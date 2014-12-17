$(document).ready(function(){ 
$("#model, #modellab, #table").hide(); 
$('#collapseOne').collapse("hide");
});

$.getJSON('json/make.json', function(data) {   
$.each(data, function(key, project) {
	
	 var newOption = $('<option value="'+project.make+'">'+project.make+'</option>');
	 $('#make').append(newOption);
                      
      });
});

//display and populate the model option box
$("#make").change(function(){
$("#model ,#modellab").show();
$("#model").empty();
$("#part").empty();
$("#table").empty();
var blank = $('<option value="">Please Select</option>');
$('#model').append(blank);

var make = document.getElementById("make").value;
	
	$.getJSON('json/'+make+'.json', function(data) {   
		$.each(data, function(key, choice) {
			 var newOption = $('<option value="'+choice.model+'">'+choice.model+'</option>');
			 $('#model').append(newOption);
		            
		            
		});
	});
});


//display and populate the part type option box

$(document).ready(function(){ 
$("#part, #partlab").hide(); 

});
$("#model").change(function(){
$("#part ,#partlab").show();
$("#part").empty();
$("#table").empty();
var blank = $('<option value="">Please Select</option>');
$('#part').append(blank);
	
	$.getJSON('json/part.json', function(data) {   
		$.each(data, function(key, choice) {
			 var newOption = $('<option value="'+choice.type+'">'+choice.type+'</option>');
			 $('#part').append(newOption);
		            
		            
		});
	});

});

//build table
$("#part").change(function(){
$("#table").show();
$("#table").empty();
var header =$('<th>Vehicle</th><th>Part</th>');
$('#table').append(header);
var part = document.getElementById("part").value;
var model = document.getElementById("model").value; 
$.getJSON('json/'+part+'.json', function(data) {   
		$.each(data, function(key, choice) {		     
			 var newRow = $('<tr><td>'+model+'</td><td>'+choice.part+'</td></tr>');		     
              $('#table').append(newRow);         	            
		});
	});
});

