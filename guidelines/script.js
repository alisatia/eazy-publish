var divstructure = document.getElementById("structure");
var divword = document.getElementById("word");
var divguidelines = document.getElementById("guidelines");
var divformating = document.getElementById("formating");
var divprocessing = document.getElementById("processing");
var divprice = document.getElementById("price");

var tstrr = document.getElementById("strr");
var tworr = document.getElementById("worr");
var tguii = document.getElementById("guii");
var tforr = document.getElementById("forr");
var tproo = document.getElementById("proo");
var tprii = document.getElementById("prii");

function structure() {
  tstrr.style.color = "white";
  tworr.style.color = "#b7b8ba";
  tguii.style.color = "#b7b8ba";
  tforr.style.color = "#b7b8ba";
  tproo.style.color = "#b7b8ba";
  tprii.style.color = "#b7b8ba";

  divstructure.style.display = "block";
  divword.style.display = "none";
  divguidelines.style.display = "none";
  divformating.style.display = "none";
  divprocessing.style.display = "none";
  divprice.style.display = "none";
}

function word() {
  tstrr.style.color = "#b7b8ba";
  tworr.style.color = "white";
  tguii.style.color = "#b7b8ba";
  tforr.style.color = "#b7b8ba";
  tproo.style.color = "#b7b8ba";
  tprii.style.color = "#b7b8ba";

  divstructure.style.display = "none";
  divword.style.display = "block";
  divguidelines.style.display = "none";
  divformating.style.display = "none";
  divprocessing.style.display = "none";
  divprice.style.display = "none";
}

function guidelines() {
  tstrr.style.color = "#b7b8ba";
  tworr.style.color = "#b7b8ba";
  tguii.style.color = "white";
  tforr.style.color = "#b7b8ba";
  tproo.style.color = "#b7b8ba";
  tprii.style.color = "#b7b8ba";

  divstructure.style.display = "none";
  divword.style.display = "none";
  divguidelines.style.display = "block";
  divformating.style.display = "none";
  divprocessing.style.display = "none";
  divprice.style.display = "none";
}

function formating() {
  tstrr.style.color = "#b7b8ba";
  tworr.style.color = "#b7b8ba";
  tguii.style.color = "#b7b8ba";
  tforr.style.color = "white";
  tprii.style.color = "#b7b8ba";

  divstructure.style.display = "none";
  divword.style.display = "none";
  divguidelines.style.display = "none";
  divformating.style.display = "block";
  divprocessing.style.display = "none";
  divprice.style.display = "none";
}

function processing() {
  tstrr.style.color = "#b7b8ba";
  tworr.style.color = "#b7b8ba";
  tguii.style.color = "#b7b8ba";
  tforr.style.color = "#b7b8ba";
  tproo.style.color = "white";
  tprii.style.color = "#b7b8ba";

  divstructure.style.display = "none";
  divword.style.display = "none";
  divguidelines.style.display = "none";
  divformating.style.display = "none";
  divprocessing.style.display = "block";
  divprice.style.display = "none";
}

function price() {
  tstrr.style.color = "#b7b8ba";
  tworr.style.color = "#b7b8ba";
  tguii.style.color = "#b7b8ba";
  tforr.style.color = "#b7b8ba";
  tproo.style.color = "#b7b8ba";
  tprii.style.color = "white";

  divstructure.style.display = "none";
  divword.style.display = "none";
  divguidelines.style.display = "none";
  divformating.style.display = "none";
  divprocessing.style.display = "none";
  divprice.style.display = "block";
}
