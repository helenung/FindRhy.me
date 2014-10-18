if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
} else {
alert("Geolocation is not supported by this browser.");
}
function showPosition(position) {


	var lat = position.coords.latitude;
	var lon = position.coords.longitude;



	$.getJSON( "result.php?lat="+lat+"&lon="+lon,function( data ) {
	
	var items = [];
	var index = 0;
	$.each(data, function(){
		//console.log(data[index]["name"]);
		var name = data[index]["name"];
        var file = data[index]["file"];
        items.push("<li class='name' id='output'>"+name+"</li>");
        items.push("<pre class='poems' id='"+name+"'></pre>");
        populatePre(file, name);
        index+=1;
	});
        $('#loading').hide();
	if(index==0){
		items.push("<li class='poemError' id='output'>No results near here, you can be the first to <a href='index.php'>write about this location.</a></li>");
	}
	console.log("index = " +index);
	var myNode = document.getElementById("map");
	myNode.innerHTML = '';

	 $("<ul/>", {
	"class": "my-new-list",
	html: items.join("")
	}).appendTo(document.getElementById("map"));

	});
}

function populatePre(url, name) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        document.getElementById(name).textContent = this.responseText;
    };
    xhr.open('GET', url);
    xhr.send();
}

