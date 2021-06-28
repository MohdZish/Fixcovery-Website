<?php  

session_start();
if(!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
	header("Location: loginpage.php");
	die();
}


include_once("navbar.php");
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="uploadpost.css">
	<link rel="stylesheet" href="ckeditor5/content-styles.css">
	<script src="ckeditor5/ckeditor.js"></script>

	<link rel="stylesheet" href="Editor/css/medium-editor.css"> <!-- Core -->
	<link rel="stylesheet" href="Editor/css/default.css"> <!-- or any other theme -->


</head>

<body>


	<script type="text/javascript">

		

var ckeditor = document.querySelectorAll('.editor p');
[].forEach.call(links, function(item) {
	item.classList.add('myClass');
});

function descbuttonchange(descbutton) {

	descbutton.closest(".methodclass").querySelector("#metinput").value="";
	var x = document.getElementById("adddesc");

	  if (x.innerHTML.includes("Remove")) { //includes check if it's add or remove
	  	x.innerHTML = "<i class='fas fa-plus'></i> Add Description";
		//x.style.cssText  = "border-color: #0275d8;";
		descbutton.closest(".methodclass").querySelector("#metinput").value="";
	} else {
		x.innerHTML = "<i class='fas fa-times'></i> Remove Description";
		descbutton.closest(".methodclass").querySelector("#metinput").value="";
	    //x.style.cssText  = "border-color: #c21919; color:#c21919;";
	}
}

function videobtnchange(addvideobutton) {
	 /* var x = document.getElementById("addvideo");

	  if (x.innerHTML.includes("Remove")) { //includes check if it's add or remove
	    x.innerHTML = "<i class='fab fa-youtube'></i> Add Video";
		//x.style.cssText  = "border-color: #0275d8;";
		document.getElementById("noteinput").value = "";
	  } else {
	    x.innerHTML = "<i class='fab fa-youtube'></i> Remove Video";
	    document.getElementById("input").value = "";
	    //x.style.cssText  = "border-color: #c21919; color:#c21919;";
	}*/
}

function searchvideourl(){
		//var videospot = document.getElementsByClassName("videocanvas");
		var urlinput = document.getElementById("videourlinput").value;
		
		
		var embedurl = urlinput.replace("watch?v=", "embed/");
		alert(embedurl);
		var videospot = document.getElementById('videocanvas');
		videospot.innerHTML = '<iframe height="200px" width="auto" src="'+ embedurl + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen SameSite="None"></iframe>';
	}

	function stepadd(addbutton) {

	    //let parentdiv = theaddbutton.parentNode.parentNode.parentNode.parentNode.parentNode;

	    var thismethod = addbutton.closest(".methodbox");

	    let menu = thismethod.querySelector('.stepclass');
	    let clonedMenu = menu.cloneNode(true);

	    var numofsteps = thismethod.querySelectorAll(".stepclass");
	    var maximumstepcount = parseInt(numofsteps.length, 10)

		//clonedMenu.id = 'stepblock' + (maximumstepcount+1);

		thismethod.querySelector(".forsteps").appendChild(clonedMenu);

        //change step number in each repetition
        var changestepnumber = clonedMenu.getElementsByClassName("stepcircle")[0];
        changestepnumber.innerHTML = (maximumstepcount+1);

        //change step number inside box
        var changestepnum = clonedMenu.getElementsByClassName("titlelabel")[0];
        changestepnum.innerHTML = "Step " + (maximumstepcount+1);

        //remove any existing texts
        var refreshtext = clonedMenu.getElementsByClassName("inputboxes")[0];
        refreshtext.value = "";

        //remove any existing texts
        var refreshtext = clonedMenu.getElementsByClassName("inputboxes")[0];
        refreshtext.value = "";

        //enable removestepbutton state as active
        var removestepbtn = clonedMenu.getElementsByClassName("removestepbtn")[0];
        removestepbtn.disabled = false;
        removestepbtn.id = "removebuttonid" + (maximumstepcount+1);

    }

	function removestep(removebutton) {  //id is for which step number is selected to remove
		
		var thismethod = removebutton.closest(".methodbox"); //for stepfixer

		var thisstep = removebutton.closest(".stepclass");
		//var num = removebutton.replace(/\D/g, "");
		thisstep.parentNode.removeChild(thisstep);
		stepfixer(thismethod);

	}

	function stepfixer(forsteps){

		var numofsteps = forsteps.querySelectorAll(".stepclass");
		var maximumstepcount = parseInt(numofsteps.length, 10)
		

		for (j=1; j < maximumstepcount; j++) {

	    	//Fixing the step display number
	    	var newelement = numofsteps[j].getElementsByClassName("stepcircle")[0];
	    	newelement.innerHTML = j+1;

	    	//Fixing the remove button id 
	    	var changebuttonid = numofsteps[j].querySelector(".removestepbtn");
	    	changebuttonid.id = "removebuttonid" + (j+1);

	    	//Fixing the step number inside input
	    	var changeinnerstep = numofsteps[j].querySelector(".titlelabel");
	    	changeinnerstep.innerHTML = "Step " + (j+1);
	    	//alert("numofsteps[j].id")
	    }
	}
	
	function noteadd(thenotebutton) {

		var thismethod = thenotebutton.closest(".methodbox");
		let menu = thismethod.querySelector('#notebox');
		let clonedMenu = menu.cloneNode(true);
		clonedMenu.hidden = false;

		thismethod.querySelector(".forsteps").appendChild(clonedMenu);
	}

	function removenote(thenotebutton) {  

		var thisnote = thenotebutton.closest(".noteclass");
		//var num = removebutton.replace(/\D/g, "");

		thisnote.parentNode.removeChild(thisnote);
	}

	function addimage(theimagebutton){
		var thismethod = theimagebutton.closest(".methodbox");
		let menu = document.querySelector('#imagebox');
		let clonedMenu = menu.cloneNode(true);
		clonedMenu.hidden = false;
		clonedMenu.tag = "";

		thismethod.querySelector(".forsteps").appendChild(clonedMenu);
	}

	function removeimage(removeimagebutton){
		var thisimage = removeimagebutton.closest(".imageclass");
		//var num = removebutton.replace(/\D/g, "");

		thisimage.parentNode.removeChild(thisimage);
	}

	function preview_image(event, theimagebutton) 
	{
		var reader = new FileReader();
		reader.onload = function()
		{
			var output = theimagebutton.parentNode.parentNode.querySelector("#output_image")
			output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
	}

	function getfinalstring(){
		
		//check number of methods to use in for loop
		var numofmethods = document.querySelectorAll(".methodclass");
		var maximummethodcount = parseInt(numofmethods.length, 10);
		var finalstring = "";

		for (methodnumber = 1; methodnumber < maximummethodcount; methodnumber++){
		var divMethod = document.querySelectorAll(".methodclass")[methodnumber]; //THE method
		var divElem = divMethod.querySelectorAll("#forsteps")[0];

		var inputElements = divElem.querySelectorAll("textarea, input"); //gets all type of ELEMENTS precised in ORDER so great!!!!
		var temparray = [];

		var number = parseInt(inputElements.length, 10);

		

		var methodname = divMethod.getElementsByClassName("methodname");
		alert(methodname[0].value);
		finalstring = finalstring + "@m@meth " + methodname[0].value + "\n";

		var methoddesc = divMethod.getElementsByClassName("methoddescinput");
		if(methoddesc[0].value != ""){
			finalstring = finalstring + "@s@desc " +  methoddesc[0].value + "@s@\n";
		}

		for (i=0; i < number; i++){
			alert(inputElements[i].value);
			if(inputElements[i].id == "step" && inputElements[i].value != ""){
				temparray[i] = "@s@step " + inputElements[i].value + " @s@ \n";
			}

			if(inputElements[i].id == "noteinput" && inputElements[i].value != ""){
				temparray[i] = "@s@note " + inputElements[i].value + " @s@ \n";
			}
		}


		for(var sentence in temparray){
			finalstring = finalstring + temparray[sentence];
		}
		
	}

	alert(finalstring);

}


function methodadd() {
	let menu = document.querySelector('#methodblock');
	let clonedMenu = menu.cloneNode(true);

	clonedMenu.hidden = false;

	var numofsteps = document.querySelectorAll(".methodclass");
	var maximummethodcount = parseInt(numofsteps.length, 10);

	clonedMenu.id = 'methodblock' + (maximummethodcount+1);
	document.getElementById("formethod").appendChild(clonedMenu);

	clonedMenu.querySelector("#methoddescbox").id = "methoddescbox" + (maximummethodcount+1);

	clonedMenu.querySelector(".removemethodbtn").disabled = false;

}

function removemethod(removemethodbtn){
	if (confirm("Delete this method?")) {
		var themethodtoremove = removemethodbtn.parentNode.parentNode;
		removemethodbtn.parentNode.parentNode.parentNode.removeChild(themethodtoremove)
	} 
	else {

	}


}

function loadmethod() {
	let menu = document.querySelector('#methodblock');
	let clonedMenu = menu.cloneNode(true);
	clonedMenu.hidden = false;

	var addstepbutton = clonedMenu.querySelector("#addstepbtn0")
	addstepbutton.id = "addstepbutton1"

	clonedMenu.id = 'methodblock1';
	document.getElementById("formethod").appendChild(clonedMenu);
}

window.onload = loadmethod;



function changetextarea() {
	alert("hi1");
	let textarea = document.getElementById( 'hiddeneditor' );
	let editor = document.getElementById( 'editor' );
	alert("hi2");
	textarea.value = editor.innerHTML();
}

function test() {
	alert(editor.getData());
	document.getElementById( 'hiddeneditor' ).value = editor.getData();

}

function addmet() {
	// ADD HTML TO CKEDITOR
	const viewFragment = editor.data.processor.toView( "<br><strong>Method : </strong><br>" );
	const modelFragment = editor.data.toModel( viewFragment );

	editor.model.insertContent( modelFragment, editor.model.document.selection );

}


</script>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">

		</nav>

		<main role="main" class="col-md-8">
			<form action="insertpost.php" method="post">
				<div class="d-flex justify-content-between flex-wrap align-items-center pt-1 pb-2 mb-3 border-bottom">
					<input id="input" name="post_title" class="form-control inputboxes" id="input" placeholder="Title" autocomplete="off">

				</div>


				<div class="editor ck-content" id="editor" name="editor">
				</div>

				<textarea name="hiddeneditor" id="hiddeneditor" style="display: none;">hhh</textarea>

				<script>


					BalloonEditor
					.create( document.getElementById( 'editor' ), {
						placeholder: 'Start your article here...',
						image: {
							toolbar: [ 'imageTextAlternative' ]
						}
					} )
					.then( editor => { 
						window.editor = editor;
					} );


				</script>

				<a onclick="addmet()" class="btn btn-primary text-light">Add method</a>

				<textarea class="editable" id="editable">qdsqsd</textarea>
				<script src="Editor/js/medium-editor.js"></script>

				<script>
					var elements = document.getElementsByClassName('editable'),
						editor = new MediumEditor(elements);

						if(elements){
						 alert(elements.length);
						}
				</script>
			</main>

			<div class="container col-md-2 pt-4">
				<div class="documentationcard">
					<div class="card mx-auto" style="justify-content: center;">
						<div class="card-body mx-auto " style="height: 50px; padding-top: 15px;">
							<h6 class="text-muted mx-auto">
								Get some tips!<i class="far fa-lightbulb fa-fw"></i>
							</h6>
						</div>
					</div>
				</div>

				<div class="pt-3">
					<button onclick="test()" class="btn btn-lg btn-success btn-block">Upload this fix</button>
				</div>
			</div>

		</form>
	</div>


	<header class="page-header header container-fluid">
	</header>

</body>
</html>
