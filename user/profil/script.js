var jss = document.getElementById("jss");

function imgKirim() {
  if (jss.classList.contains("h-hide")) {
    jss.classList.remove("h-hide");
  } else {
    jss.classList.add("h-hide");
  }
}