// Variable Definitions
//alert("here1");

//alert("");
//x.innerHTML="Did it work?";

var background=document.getElementById("background-img");

function ChangeBg(){
	if(background.src=="http://vtrung.info/images/bg02.jpg"){
	$("#background-img").fadeIn(1000)
	background.src="http://vtrung.info/images/bg01.jpg"
	setTimeout(function(){$("#background-img").fadeOut(1000)},13000)	
	setTimeout(function(){ChangeBg()},15000);
	}
	else{
	$("#background-img").fadeIn(500)
	background.src="http://vtrung.info/images/bg02.jpg"
	setTimeout(function(){$("#background-img").fadeOut(1000)},13000)	
	setTimeout(function(){ChangeBg()},15000);
	}
	}

window.onload=function(){
	setTimeout(function(){ChangeBg()},10000);
	}

// ============ Dropdown List =================//



var learn=document.getElementById("learn");
var finance=document.getElementById("finance");
var entain=document.getElementById("entain");
var devel=document.getElementById("devel");
var dscript=document.getElementById("djscript");
var i=0;

function ExpandHide(x){
if(document.getElementById(x).style.display=="none"){
	document.getElementById(x).style.display="block"
	}else{
	document.getElementById(x).style.display="none"}
}


devel.onclick=function(){
	ExpandHide("ddevel");

	};
	
entain.onclick=function(){
	ExpandHide("dentain");

	};	
	
finance.onclick=function(){
	ExpandHide("dfinance");
	};
	
learn.onclick=function(){
	ExpandHide("dlearn");
	};
	
dscript.onclick=function(){
	ExpandHide("ddjscript");
	};

// ====================== Others ============

$(function() {
    $( ".draggable" ).draggable();
  });
	
	
// First Code with getting date

	
function displayDate()
	{
	document.getElementById("demo").innerHTML=Date();
	};
	
// NOTES ARE WRITTEN