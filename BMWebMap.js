
// Global Variables


var BMAPIKEY = 'c16de2a152dd421cad796026c129a862';
//var BMSTYLEID =  1;
var BMSTYLEID = 28792;

// Overlay Global Variables 

var BMCustomOverlay = 0

var BMLeftTopOverlay = 1;
var BMLeftBottomOverlay = 2;

var BMCenterLeftTopOverlay = 3; 
var BMCenterLeftBottomOverlay = 4; 

var BMCenterRightTopOverlay = 5; 
var BMCenterRightBottomOverlay = 6;

var BMRightTopOverlay = 7;
var BMRightBottomOverlay = 8;






var map = new CM.Map('map', new CM.Tiles.CloudMade.Web({key: BMAPIKEY, styleId: BMSTYLEID}));
map.setCenter(new CM.LatLng(52.51622, 13.391991), 12);




/*
var exampleLocation = new CM.LatLng(52.51622, 13.391991);
var exampleMarker = new CM.Marker(exampleLocation);

exampleMarker.bindInfoWindow("<h1 style=\"color:green;margin-left:10px;\">Naftalie<br><br>Solländer</h1><br><input type='button' onclick='javascript:getBiograph(123);' value='info einblenden'/>", {maxWidth: 200, noCloseOnClick: true});

map.addOverlay(exampleMarker);
*/
//exampleMarker.openInfoWindow("<h1 style=\"color:green;margin-left:10px;\">Naftalie<br><br>Solländer</h1><br><input type='button' onclick='javascript:getBiograph(123);' value='info einblenden'/>", {maxWidth: 200, noCloseOnClick: true});
//exampleMarker.hide();

var posLMControl = new CM.ControlPosition(CM.TOP_LEFT, new CM.Size(5, 140));
var posOMControl = new CM.ControlPosition(CM.TOP_LEFT, new CM.Size(5, 5));

map.addControl(new CM.LargeMapControl(), posLMControl);
//map.addControl(new CM.ScaleControl());
map.addControl(new CM.OverviewMapControl(), posOMControl);


/** 
 *  DSH 191210  
 *  Button im Marker InfoWindow zum Starten des Einblendens der Oberlays 
 *  Per setTimeout die Overlays nacheinander eingeblendet 
 **/
 
 
var firstOverlay = "";
var secondOverlay = "";
var thirdOverlay = "";
var fourthOverlay = "";
var fifthOverlay = "";
var sixthOverlay = "";
var seventhOverlay = "";
var eighthOverlay = "";




function getBiograph(id){
	//if(document.getElementById("first")){hideOverlays();}
	
	scriptCommand = "?persons";	
	ajax_loadXMLDoc("POST", "&function=testing&id="+id);
}

function nextPage(){
	alert("nächste Seite holen/einblenden ...");
}

function showBiographsInfoSecondPage(resultList){
	
	var contents = resultList[2].split("~");

	for(var i=0; i < contents.length; i= i+1){
		showNextPage(i+1, contents[i]);		
	}		
	
}

function showBiographsInfo(resultList){
	var timings = resultList[1].split(",");
	var contents = resultList[2].split("~");
	
	
	
	for(var i=0; i < timings.length; i= i+1){
		showNextOverlay(i+1, timings[i], contents[i]);		
	}		
	
	//document.getElementById("overlay_container").setAttribute("style", "display:block;");
	$( "#overlay_container" ).show( 'fold', 2000 );
	
}


function showNextPage(currOverlay, content){
	
	switch (currOverlay) {
	  case 1:
	    //this.firstOverlay = new BMOverlay("first", BMLeftTopOverlay, 250, 325);
		//this.firstOverlay.element.innerHTML = content;
		document.getElementById("TL").innerHTML = content;
	    break;
	  case 2:
		//this.secondOverlay = new BMOverlay("second", BMLeftBottomOverlay, 250, 325);
		//this.secondOverlay.element.innerHTML = content;	    
		document.getElementById("CTL").innerHTML = content;	
	    break;
	  case 3:
		//this.thirdOverlay = new BMOverlay("third", BMCenterLeftTopOverlay, 250, 325);	
		//this.thirdOverlay.element.innerHTML = content;	 		
		document.getElementById("CTR").innerHTML = content;
	    break;
	  case 4:
		//this.fourthOverlay = new BMOverlay("fourth", BMCenterLeftBottomOverlay, 250, 325);	    	
		//this.fourthOverlay.element.innerHTML = content;	 		
		document.getElementById("TR").innerHTML = content;	
	    break;
	  case 5:
	    //this.fifthOverlay = new BMOverlay("fifth", BMCenterRightTopOverlay, 250, 325);
		//this.fifthOverlay.element.innerHTML = content;	
		document.getElementById("BL").innerHTML = content;	
	    break;
	  case 6:
	    //this.sixthOverlay = new BMOverlay("sixth", BMCenterRightBottomOverlay, 250, 325);
		//this.sixthOverlay.element.innerHTML = content;	
		document.getElementById("CBL").innerHTML = content;
	    break;
	
	  case 7:
	    //this.seventhOverlay = new BMOverlay("seventh", BMRightTopOverlay, 250, 325);
		//this.seventhOverlay.element.innerHTML = content;	
		document.getElementById("CBR").innerHTML = content;
	    break;
	  case 8:
	    //this.eighthOverlay = new BMOverlay("eighth", BMRightBottomOverlay, 250, 325);
		
		/*
		var input = document.createElement("input");
		input.type = "button";
		input.setAttribute("onclick", "javascript:hideOverlays();");
		input.value = "info ausblenden";
		*/
		//this.eighthOverlay.element.innerHTML = content;
		document.getElementById("BR").innerHTML = content;
		//this.eighthOverlay.element.appendChild(input);
		setTimeout('this.eighthOverlay.show()', timeout);
		//eighthOverlay.show();
	    break;
	  default:
	    	alert("da stimmt was nicht");
	    break;
	}
}


function showNextOverlay(currOverlay, timeout, content){
	
	switch (currOverlay) {
	  case 1:
	    //this.firstOverlay = new BMOverlay("first", BMLeftTopOverlay, 250, 325);
		this.firstOverlay = document.getElementById("TL");
		this.firstOverlay.innerHTML = content;
		//setTimeout('this.firstOverlay.show()', timeout);
	    	//firstOverlay.show();
	    break;
	  case 2:
		//this.secondOverlay = new BMOverlay("second", BMLeftBottomOverlay, 250, 325);
		this.secondOverlay = document.getElementById("CTL");
		this.secondOverlay.innerHTML = content;	    
		//setTimeout('this.secondOverlay.show()', timeout);
		//secondOverlay.show();
	    break;
	  case 3:
		//this.thirdOverlay = new BMOverlay("third", BMCenterLeftTopOverlay, 250, 325);	
		this.thirdOverlay = document.getElementById("CTR");
		this.thirdOverlay.innerHTML = content;	 		
		//setTimeout('this.thirdOverlay.show()', timeout);
	    	//thirdOverlay.show();
	    break;
	  case 4:
		//this.fourthOverlay = new BMOverlay("fourth", BMCenterLeftBottomOverlay, 250, 325);	    	
		this.fourthOverlay = document.getElementById("TR");
		this.fourthOverlay.innerHTML = content;	 		
		//setTimeout('this.fourthOverlay.show()', timeout);
		//fourthOverlay.show();
	    break;
	  case 5:
	    //= new BMOverlay("fifth", BMCenterRightTopOverlay, 250, 325);
		this.fifthOverlay = document.getElementById("BL");
		this.fifthOverlay.innerHTML = content;	
		//setTimeout('this.fifthOverlay.show()', timeout);
		//fifthOverlay.show();
	    break;
	  case 6:
	    //this.sixthOverlay = new BMOverlay("sixth", BMCenterRightBottomOverlay, 250, 325);
		this.sixthOverlay = document.getElementById("CBL");
		this.sixthOverlay.innerHTML = content;	
		//setTimeout('this.sixthOverlay.show()', timeout);
		//fifthOverlay.show();
	    break;
	
	  case 7:
	    //this.seventhOverlay = new BMOverlay("seventh", BMRightTopOverlay, 250, 325);
		this.seventhOverlay = document.getElementById("CBR");
		this.seventhOverlay.innerHTML = content;	
		//setTimeout('this.seventhOverlay.show()', timeout);
		//fifthOverlay.show();
	    break;
	  case 8:
	    //this.eighthOverlay = new BMOverlay("eighth", BMRightBottomOverlay, 250, 325);
		this.eighthOverlay = document.getElementById("BR");
		/*
		var input = document.createElement("input");
		input.type = "button";
		input.setAttribute("onclick", "javascript:hideOverlays();");
		input.value = "info ausblenden";
		*/
		this.eighthOverlay.innerHTML = content;
		//this.eighthOverlay.element.appendChild(input);
		//setTimeout('this.eighthOverlay.show()', timeout);
		//eighthOverlay.show();
	    break;
	  default:
	    	alert("da stimmt was nicht");
	    break;
	}
}

function hideOverlays(){
	document.getElementById("overlay_container").setAttribute("style", "display:none;");
}

/** 
 *  END DSH 191210
 **/
function resizeDivToSizeInMs(theDiv, xSize, ySize, mSec) {
	// Set the div visible (otherwise animations dont make sense)
	document.all[theDiv].style.visibility = "visible";
	
	// Get the current size
	var curWidth = parseInt(getStyle(theDiv,"width"));
	var curHeight = parseInt(getStyle(theDiv, "height"));
	
	// Build the methodString for the next recursion.
	var methodString = 'resizeDivToSizeInMs("' + theDiv + '", ' + xSize + ', ' + ySize + ', ' + mSec + ')';
	
	// How big is one step?
	var xPixelsToGo = Math.abs(xSize - curWidth);
	var yPixelsToGo = Math.abs(ySize - curHeight);
	
	var xJump = xPixelsToGo / mSec;
	if(xJump < 1) {
		xJump = 1;
	}
	
	var yJump = yPixelsToGo / mSec;
	if(yJump < 1) {
		yJump = 1;
	}
	
	// How fast is one step?			
	var mSecPerStep = mSec / Math.max(xPixelsToGo, yPixelsToGo);
	
	
	// Check if X or Y is to resize in which direction and call again...
	if(curWidth < xSize) {
		document.all[theDiv].style.width = (curWidth + xJump);
		setTimeout(methodString, mSecPerStep);
	} else if(curWidth > xSize) {
		document.all[theDiv].style.width = (curWidth - xJump);
		setTimeout(methodString, mSecPerStep);
	}
	
	if(curHeight < ySize) {
		document.all[theDiv].style.height = (curHeight + yJump);
		setTimeout(methodString, mSecPerStep);
	} else if(curHeight > ySize) {
		document.all[theDiv].style.height = (curHeight - yJump);
		setTimeout(methodString, mSecPerStep);
	}
					
}

function getStyle(el,styleProp)
{
	var x = document.getElementById(el);
	if (x.currentStyle)
		var y = x.currentStyle[styleProp];
	else if (window.getComputedStyle)
		var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
	return y;
}


//---------------------------------------- Beginning of BMOverlay class ----------------------------------------


// Constuctor: Creates new BMOverlay with ID, type, width and height.
function BMOverlay(ID, overlayType, width, height) {
	this.width = width;
	this.height = height;
	this.ID = ID;
	this.visibility;
	this.xCoord;
	this.yCoord;
	this.element;
	
	var docWidth = parseInt(document.documentElement.clientWidth);
	var docHeight = parseInt(document.documentElement.clientHeight);
	
	// Element of the body
	var bodyElement = document.getElementsByTagName("body")[0];
	
	// Center of the document
	var centerPositionX = (docWidth / 2);
	var centerPositionY = (docHeight / 2);
	
	
	
	// Depending on the type of the overlay, choose the position
	var overlayXPosition;
	var overlayYPosition;
	
	switch(overlayType) {
		case BMLeftTopOverlay:
			overlayXPosition = centerPositionX - (this.width * 2);
			overlayYPosition = centerPositionY - this.height;
			break;
		
		case BMLeftBottomOverlay:
			overlayXPosition = centerPositionX - (this.width * 2);
			overlayYPosition = centerPositionY;
			break;
		
		case BMCenterLeftTopOverlay:
			overlayXPosition = centerPositionX - this.width;
			overlayYPosition = centerPositionY - this.height;
			break;
		
		case BMCenterLeftBottomOverlay:
			overlayXPosition = centerPositionX - this.width;
			overlayYPosition = centerPositionY;
			break;
			
		case BMCenterRightTopOverlay:
			overlayXPosition = centerPositionX;
			overlayYPosition = centerPositionY - this.height;
			break;
		
		case BMCenterRightBottomOverlay:
			overlayXPosition = centerPositionX;
			overlayYPosition = centerPositionY;
			break;

		case BMRightTopOverlay:
			overlayXPosition = centerPositionX + this.width;
			overlayYPosition = centerPositionY - this.height;
			break;
			
		case BMRightBottomOverlay:
			overlayXPosition = centerPositionX + this.width;
			overlayYPosition = centerPositionY;
			break;
			
		case BMCustomOverlay:
			// use setOverlayPosition() after initialisation!
			overlayXPosition = 0;
			overlayXPosition = 0;
			break;
		
		default:;
	}
	
	this.setOverlayPosition(overlayXPosition, overlayYPosition);
	
	
	// Create the element as child of body and set the styles
	this.element = document.createElement("div");
	this.element.setAttribute("class", "overlay");
	this.element.setAttribute("id", this.ID);
	bodyElement.appendChild(this.element);
	this.setStyles();
}



// Accessor Methods

BMOverlay.prototype.setStyles = function()
{
	this.element.style.width = this.width;
	this.element.style.height = this.height;
	this.element.style.visibility = this.visibility;
	this.element.style.top = this.yCoord;
	this.element.style.left = this.xCoord;
}

BMOverlay.prototype.setOverlayPosition = function(xCoord, yCoord)
{
	this.setOverlayXPosition(xCoord);
	this.setOverlayYPosition(yCoord);
}

BMOverlay.prototype.setOverlayXPosition = function(xCoord)
{
	this.xCoord = xCoord;
}

BMOverlay.prototype.setOverlayYPosition = function(yCoord)
{
	this.yCoord = yCoord;
}

BMOverlay.prototype.getOverlayXPosition = function()
{
	return this.xCoord;
}

BMOverlay.prototype.getOverlayYPosition = function()
{
	return this.yCoord;
}



// Methods for Visibility

BMOverlay.prototype.show = function()
{
	this.visibility = "visible";
	this.setStyles();
}

BMOverlay.prototype.hide = function()
{
	this.visibility = "hidden";
	this.setStyles();
}

//---------------------------------------- End of BMOverlay class ----------------------------------------


