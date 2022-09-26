<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 100px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#2B8235;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
}

#myBtn:hover {
  background-color: #555;
}
	
	.arrow {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}
	.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}
	
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="arrow up"></i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>