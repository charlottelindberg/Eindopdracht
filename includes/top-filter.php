<? php

// include("../css/style.css");
// include("/js/javascript.js");

?>

<style>
#myBtnContainer {
  margin-inline-start: 7vw;
}

  .btnFilterSelection {
  float: left;
  background-color: #f3969a;
  color: #884b60;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

.btnFilter {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #884b60;
  color: #f3969a;
  cursor: pointer;
}

.btnFilter:hover {
  background-color: #884b60;
  color: #f3969a;
}

.btnFilter.active {
  background-color: #f3969a;
  color: #884b60;
}
</style>

<!-- begin Filter Selection Top  -->
<div id="myBtnContainer">
  <button class="btnFilter active" onclick="filterSelection('all')"> Alles tonen</button>
  <button class="btnFilter" onclick="filterSelection('honden')"> Honden</button>
  <button class="btnFilter" onclick="filterSelection('katten')"> Katten</button>
  <button class="btnFilter" onclick="filterSelection('konijnen')"> Konijnen</button>
  <button class="btnFilter" onclick="filterSelection('paarden')"> Paarden</button>
  <button class="btnFilter" onclick="filterSelection('vogels')"> Vogels</button>
  <button class="btnFilter" onclick="filterSelection('knaagdieren')"> Knaagdieren</button>
  <button class="btnFilter" onclick="filterSelection('reptielen')"> Reptielen</button>
  <button class="btnFilter" onclick="filterSelection('anderen')"> Andere dierensoorten</button>
</div>
<!-- end Filter Selection Top  -->

<div class="container">
  <div class="btnFilterSelection honden">Border Collie</div>
  <div class="btnFilterSelection katten">Angora</div>
  <div class="btnFilterSelection honden">Duitse Herder</div>
  <div class="btnFilterSelection katten">Sphynx</div>
  <div class="btnFilterSelection honden">Mustang</div>
  <div class="btnFilterSelection katten">Siamees</div>
  <div class="btnFilterSelection konijnen">Vlaamse Reus</div>
  <div class="btnFilterSelection konijnen">Blauwe Ham</div>
  <div class="btnFilterSelection vogels">Flamingo</div>
  <div class="btnFilterSelection konijnen">Dwerg Rex</div>
  <div class="btnFilterSelection vogels">Parakeet</div>
  <div class="btnFilterSelection vogels">Papegaai</div>
  <div class="btnFilterSelection konijnen">Hollander</div>
</div>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("btnFilterSelection");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btnFilter");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>