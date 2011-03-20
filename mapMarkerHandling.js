var markers = [];


function fillMarkers(){
	//if(document.getElementById("first")){hideOverlays();}
	
	scriptCommand = "?markers";	
	ajax_loadXMLDoc("POST", "&function=fillMarkers");
}


function getMarkers(){
	//if(document.getElementById("first")){hideOverlays();}
	scriptCommand = "?markers";	
	ajax_loadXMLDoc("POST", "&function=getMarkers");
}

function setMarkers(list){

	var singleMarker;// = new CM.Marker(exampleLocation);

	var res = list[1];
	var resAr = res.split(",");
	var size = new CM.Size(0, -20);
	
	var icon = new CM.Icon();
			icon.image  = "http://localhost/BerlinMinsk/images/marker_rand.png";
			icon.iconSize = new CM.Size(32, 32);
			icon.iconAnchor = new CM.Point(16, 32);
			
	
	for(var i=0; i < resAr.length-1; i++){
		
		var placeRow = resAr[i];
		var placeRowAr = placeRow.split("-");

		var markerParams = {
			icon: icon,
			title: placeRowAr[0],
			clickable: true,
			draggable: false
		}
		singleMarker = new CM.Marker(new CM.LatLng(placeRowAr[1], placeRowAr[2]), markerParams);
		
		
		
		var infoWindowParams = {
			pixelOffset: size,
			noCloseOnClick: false
		}
		singleMarker.bindInfoWindow("<p> ich bin der marker mit der id : "+placeRowAr[0]+"</p>", infoWindowParams);
		
		CM.Event.addListener(singleMarker, 'click', function() {
			var tmp = this.getTitle();
			alert("Hole das Gedenkblatt zu dem Marker mit der id "+tmp);
		});
		
		map.addOverlay(singleMarker);
		markers.push(singleMarker);
	}

}


function getMarkersClustered(){
	//if(document.getElementById("first")){hideOverlays();}
	
	scriptCommand = "?markers";	
	ajax_loadXMLDoc("POST", "&function=getMarkersClustered");
}

function setMarkersClustered(list){

	var res = list[1];
	var resAr = res.split(",");
	
	var placeRow;
	var placeRowAr;
	
	//var markers = [];
	var marker;
	var markerParams;
	var size = new CM.Size(0, -20);
	
	var icon = new CM.Icon();
			icon.image  = "http://localhost/BerlinMinsk/images/marker.png";
			icon.iconSize = new CM.Size(32, 32);
			icon.iconAnchor = new CM.Point(16, 32);
	
	var infoWindowParams = {
			pixelOffset: size,
			noCloseOnClick: false
		}
		
	for(var i=0; i < resAr.length-1; i++){
		
		placeRow = resAr[i];
		placeRowAr = placeRow.split(":");
		
		markerParams = {
			icon: icon,
			title: placeRowAr[0],
			clickable: true,
			draggable: false
		}
		marker = new CM.Marker(new CM.LatLng(placeRowAr[1], placeRowAr[2]), markerParams);
		//marker.bindInfoWindow("<p> ich bin der marker mit der id : "+placeRowAr[0]+"</p>", infoWindowParams);
		
		CM.Event.addListener(marker, 'click', function() {
			
			var tmp = this.getTitle();
			
			//alert("Hole das Gedenkblatt zu dem Marker mit der id "+tmp);
			//alert(markers[(parseInt(tmp))-1].getTitle());
			
			//this.openInfoWindow("<p> ich bin der marker mit der id : "+tmp+"</p>", infoWindowParams);
			this.openInfoWindow("<p> ich bin der marker mit der id : "+markers[(parseInt(tmp))-1].getTitle()+"</p>", infoWindowParams);
		});
		//markers.push(new CM.Marker(new CM.LatLng(placeRowAr[1], placeRowAr[2])));
		markers.push(marker);
	}
	
	var object = { clusterRadius: 120, maxZoomLevel: 11}
	var clusterer = new CM.MarkerClusterer(map, object);
	clusterer.addMarkers(markers);
	
	getMarkersAndPersons();
}

function getMarkersAndPersons(){
	//if(document.getElementById("first")){hideOverlays();}
	scriptCommand = "?markers";	
	ajax_loadXMLDoc("POST", "&function=getMarkersAndPersons");
}

function setMarkersAndPersons(list){
	var singleMarker;// = new CM.Marker(exampleLocation);

	var res = list[1];
	var resAr = res.split(",");
	var size = new CM.Size(0, -20);
	
	var icon = new CM.Icon();
			icon.image  = "http://localhost/BerlinMinsk/images/marker_rand.png";
			icon.iconSize = new CM.Size(32, 32);
			icon.iconAnchor = new CM.Point(16, 32);
			
	
	for(var i=0; i < resAr.length-1; i++){
		
		var placeRow = resAr[i];
		var placeRowAr = placeRow.split(":");

		var markerParams = {
			icon: icon,
			title: placeRowAr[0],
			clickable: true,
			draggable: false
		}
		singleMarker = new CM.Marker(new CM.LatLng(placeRowAr[1], placeRowAr[2]), markerParams);
		
		
		
		var infoWindowParams = {
			pixelOffset: size,
			noCloseOnClick: false
		}
		
		var html = "<p>"+placeRowAr[5]+",&nbsp;"+placeRowAr[4]+"&nbsp;</p><p>geb."+placeRowAr[7]+"</p><p>&nbsp;*"+placeRowAr[6]+"&nbsp;&nbsp;</p>";
		html = html+"<p><input type=\"button\" onclick=\"javascript:getBiograph("+placeRowAr[3]+")\" value=\"zum Gedenkblatt\" /></p>";
		
		singleMarker.bindInfoWindow(html, infoWindowParams);
		
		CM.Event.addListener(singleMarker, 'click', function() {
			var tmp = this.getTitle();
			//alert("Hole das Gedenkblatt zu dem Marker mit der id "+tmp);
		});
		
		map.addOverlay(singleMarker);
		markers.push(singleMarker);
	}
	
}

