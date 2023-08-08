window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("donate-button").style.display = "block";
  } else {
    document.getElementById("donate-button").style.display = "none";
  }
}
