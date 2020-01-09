<style>
.slidecontainer {
  min-width:180px;
   padding-top:3px;
   padding-left:20px;
   padding-right:10px;
   padding-bottom:10px;
   margin-right:0px;
   margin-bottom:10px;
   background-color:white;
   border-radius:5px;
   text-align:;
}
.slidecontainer button {
	margin-top:0px;
   padding:7px;
   background-color:#20b2aa;
   border-radius:5px;
   color:white;
   
}
.slidecontainer button a{
	color:white;
	text-decoration:none;
	font-weight:600;
}
/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 15px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  border-radius:5px;
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 15px; /* Set a specific slider handle width */
  height: 15px; /* Slider handle height */
  background: #20b2aa; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}
</style>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<?php

function pricefsectionleft($siteid){
  echo '<div class="slidecontainer">';
  echo '<p>Price: <span id="demo"></span></p>';
  echo '<input type="range" min="1" max="10000" value="50" class="slider" id="myRange">';
  echo '<div> <button><a href="">Filter</a></button></div>';
  echo '</div>';

}
?>