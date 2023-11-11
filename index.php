<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>



<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">متجر ارخص حاجه </h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="#">الصفحه الرئيسية</a>
                <a class="nav-link" href="#">مزايا</a>
                <a class="nav-link" href="#">تواصل معي</a>
            </nav>
        </div>
    </header>

    <main class="px-3">


        <h1></h1>

        <h1>أهلا بك في صفحتي.</h1>
        <p class="lead">هذه الصفحة وجميع محتوياتها تعود للطالب صهيب الكندي.</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
</div>

<ul class="list-group list-group-flush">

    <li class="list-group-item">أهلا بكم جميعا</li>
    <li class="list-group-item">هذه صفحه تجريبية فقط</li>
    <li class="list-group-item">مبروك عليك الايفون مع ثلاث ايباد وواحد ماكبوك شطة كثير</li>
    <li class="list-group-item">الرجاء اتباع الشروط والاحكام للفوز بالمسابقه</li>
    <li class="list-group-item">شاكر لكم مشاركتكم</li>
    <h3 id="demo"></h3>
</ul>

<form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>
    <div class="mb-3">
        <label for="firstName" class="form-label">الاسم الأول</label>
        <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
        <div class="form-text erorr">
            <?php echo $errors['firstNameError'] ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">الأسم الأخير</label>
        <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
        <div class="form-text erorr">
            <?php echo $errors['lastNameError'] ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">الإيميل</label>
        <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
        <div class="form-text erorr">
            <?php echo $errors['emailError'] ?>
        </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<button id = "winner" type="button" class="btn btn-primary"> اختيار الفائز</button>
<div id="cards" class="row mb-5 pb-5">

    <?php foreach ($users as $user): ?>

        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class-title>
                        <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?>
                        <p class="card-text">
                            <?php echo htmlspecialchars($user['email']); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include_once './parts/footer.php'; ?>