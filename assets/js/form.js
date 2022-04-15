console.log('test');
$(experience_hide).hide();
$(document).ready(function(){

  });
  
$('select').change(function() {
    var data= $('#singapore_experience').find('option:selected').text();
    console.log(data);
   if(data=='Yes'){
	   $(experience_hide).show();
   }
    else{
		$('#experience_hide').hide();
	}
});