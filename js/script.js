var countDownDate = new Date("Jan 5, 2024 16:00:00").getTime();
var x = setInterval(function() {
    var counter = document.getElementById("demo") ;
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + "يوم " + hours + "ساعه "
  + minutes + "دقيقة " + seconds + " ";
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "EXPIRED";
  }
}, 1000);

const win = document.querySelector("#winner")
const cards = document.querySelector("#cards")

win.addEventListener('click', function(){
cards.style.display = 'flex';
})
