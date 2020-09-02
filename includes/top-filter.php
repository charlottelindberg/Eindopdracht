<style>
.myBtnContainer {
    margin-left: 30%;
}

    .filterDiv {
    float: left;
    background-color: #2196F3;
    color: #ffffff;
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
  
  /* Style the buttons */
  .btnn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
  }
  
  .btnn:hover {
    background-color: #ddd;
  }
  
  .btnn.active {
    background-color: #666;
    color: white;
  }

</style>

<!-- begin Filter Selection Top  -->
<div id="myBtnContainer">
  <button class="btnn active" onclick="filterSelection('all')"> Alles tonen</button>
  <button class="btnn" onclick="filterSelection('honden')"> Honden</button>
  <button class="btnn" onclick="filterSelection('katten')"> Katten</button>
  <button class="btnn" onclick="filterSelection('konijnen')"> Konijnen</button>
  <button class="btnn" onclick="filterSelection('paarden')"> Paarden</button>
  <button class="btnn" onclick="filterSelection('vogels')"> Vogels</button>
  <button class="btnn" onclick="filterSelection('knaagdieren')"> Knaagdieren</button>
  <button class="btnn" onclick="filterSelection('reptielen')"> Reptielen</button>
  <!-- <button class="btnn" onclick="filterSelection('schapen')"> Schapen en geiten</button> -->
  <button class="btnn" onclick="filterSelection('anderen')"> Andere dierensoorten</button>
</div>

<div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div>

<!-- end Filter Selection Top  -->

<script>
    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
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

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>