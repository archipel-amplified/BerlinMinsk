var ajax_VerboseFlag = false;
var scriptUrl_ajax = 'http://localhost/BerlinMinsk/ajax.php';


function ajax_error () {
	//document.getElementById('error').style.visibility = 'visible';
    	//document.getElementById('loader').style.visibility = 'hidden';
 }

function ajax_feedback(str) {
    	/*if (ajax_VerboseFlag) {
        	document.getElementById('feedback').firstChild.nodeValue = str;
        	document.getElementById('feedback').style.display = 'block';
    	}*/
}
////////////// xmlhttprequest ////////////////
//
function ajax_loadXMLDoc(method, arg) { // make xmlhttprequest
	request = false;
    	// windows ie...
    	/*@cc_on @*/
    	/*@if (@_jscript_version >= 5)
    	try {
        	request = new ActiveXObject("Msxml2.XMLHTTP");
    	} catch(e) {
    	try {
 		request = new ActiveXObject("Microsoft.XMLHTTP");
 	} catch(e) {
 		request = false;
 	}
 }
 @end @*/
 // mozilla/firefox...
 	if(! request && typeof XMLHttpRequest!= 'undefined') {
 		try {
 			request = new XMLHttpRequest();
 		} catch(e) {
 			request = false;
 		}
 	}
 	//
 	//
 	if(request) {
 		request.onreadystatechange = processChangeAjax; // callback timecoder
 	if (method == 'GET') {
 		var uri = scriptUrl + '?transcript=' + arg;
 		request.open("GET", uri, true);
 		request.send(null);

 	} else if (method == 'POST') {
 		//document.getElementById('loader').style.visibility = 'visible';
 		//document.getElementById('error').style.visibility = 'hidden';
 		var uri = scriptUrl_ajax + scriptCommand;
//alert(scriptCommand);
 		//document.getElementById('resulttranscript').firstChild.nodeValue = uri;
 		ajax_feedback('connect to: ' + uri);
 		request.open('POST', uri, true);
 		request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
 		//request.setRequestHeader("Content-length", arg.length);
 		request.send(arg); // or send the form???

 	} else {
 		ajax_feedback('unsupported method: ' + method);
 	}

 	} else {
	 	ajax_feedback('cant create XMLHttpRequest object!');
 	}
}


function processChangeAjax() { 
 	try {
 		if (request.readyState == 4) { // request succeded
 			try{
 				if (request.status == 200) {
 					var resultList = eval(request.responseText);
 					ajax_feedback(resultList);
 					var func = resultList[0];
 					eval(func)(resultList);
 					//document.getElementById('loader').style.visibility = 'hidden';
 				}
 			}
 			catch(e) {
 			}
 		}	
 		if (request.readyState == 3) { // request succeded
 			ajax_error( );
 		}
 		else {
 			ajax_feedback( "problem retrieving data: " + request.status +': ' + request.statusText);
 		}
 	}catch(e){
 	}
}	 
