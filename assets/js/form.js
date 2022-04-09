$(document).ready(function(){
$('#registration_form').validate({
    rules: {
        name: 
        {
            required: true,
        },
		
    },
messages : {
    name: {
    required: "Enter Your FirstName"
    },
	
	
 },
  
    highlight: function(element) {
        $(element).closest('.form-control').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error');
    },
    submitHandler: function (form) {
            form.submit();
     /*var formValues=$('#registration_form').serializeArray();
	 console.log(formValues);
      $.post('api?action=registerForminsert',formValues,function(data){
		  console.log(data);
			});*/
}
 });  


  });