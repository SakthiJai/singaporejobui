//getroleslist();
console.log('test');
$(document).ready(function(){
$('#registration_form').validate({
    rules: {
       first_name: 
        {
            required: true,
        },
		 last_name: 
        {
            required: true,
        },
		father_name: 
        {
            required: true,
        },
		
		upload: 
        {
           required: true,
        },
		mother_name: 
        {
            required: true,
        },
		designation: 
        {
            required: true,
        },
		email: 
        {
            required: true,
        },
		users: 
        {
            required: true,
        },
		pasword: 
        {
            required: true,
        },
		gender: 
        {
            required: true,
        },
		//martial_status	: 
        //{
           // required: true,
       // },
		dateofexpiry: 
        {
            required: true,
        },
		
		mobile: 
        {
            required: true,
        },
		
		whatsapp_number: 
        {
            required: true,
        },
		
		dateofbirth: 
        {
            required: true,
        },
		
		age: 
        {
            required: true,
        },
		
		address: 
        {
            required: true,
        },
		
		passportno: 
        {
            required: true,
        },
		
		placeofissue: 
        {
            required: true,
        },
		
		dateofissue: 
        {
            required: true,
        },
		
	singaporedriving: 
        {
            required: true,
        },
		
		drivinglicense: 
        {
            required: true,
        },
		
		Qualifation: 
        {
            required: true,
        },
		
		
		other_country: 
        {
            required: true,
        },
		
		relevant_experience: 
        {
            required: true,
        },
		
		skilld: 
        {
            required: true,
        },
		
		singapore_experience: 
        {
            required: true,
        },
		
		singapore_experience_details: 
        {
            required: true,
        },
		
		
    },
messages : {
  first_name: {
    required: "Enter Your First Name"
    },
	
	 last_name: {
    required: "Enter Your Last Name"
    },
	
	father_name: {
    required: "Enter Your Father Name"
    },
	
	upload: {
    required: "Enter Your Photo"
    },
	
	mother_name: {
    required: "Enter Your Mother Name"
    },
	designation: {
    required: "Enter  Your Designation "
    },
	email: {
    required: "Enter your Email"
    },
	users: {
    required: "Enter Your Users"
    },
	pasword: {
    required: "Enter Your Password"
    },
	gender: {
    required: "Select Your Gender"
    },
	//martial_status: {
    //required: "Enter  Your Material Status"
    //},
	dateofexpiry: {
    required: "Enter  Your Date Of Expiry "
    },
	
	mobile: {
    required: "Enter  Your Mobile Number"
    },
	
	whatsapp_number: {
    required: "Enter  Your Wattsapp Number"
    },
	
	dateofbirth: {
    required: "Enter  Your Date Of Birth"
    },
	
	age: {
    required: "Enter  Your age"
    },
	
	
	
	address: {
    required: "Enter  Your Address"
    },
	
	passportno: {
    required: "Enter  Your Passport Number"
    },
	
	placeofissue: {
    required: "Enter  Your Places Of Issue"
    },
	
	dateofissue: {
    required: "Enter  Your Date Of Issue"
    },
	
	singaporedriving: {
    required: "Enter  Your Singapore Driving"
    },
	
	drivinglicense: {
    required: "Enter  Your Driving License"
    },
	
 Qualifation: {
    required: "Select  Your Qualifation"
    },
	
	other_country: {
    required: "Enter  Your Other Country Driving License"
    },
	
	relevant_experience: {
    required: "Enter  Your Other Relevant Experience"
    },
	
	skilld: {
    required: "Select  Your Other Skilled"
    },
	
	singapore_experience: {
    required: " Select Your Singapore Experience"
    },
	
	singapore_experience_details: {
    required: "Enter  Your If Yes"
    },
	
	
	
 },
  
    highlight: function(element) {
        $(element).closest('.form-control').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error');
    },
    submitHandler: function (form) {
            
     
      

   
  
      }
 });  


  });
  
  $('select').change(function() {
    var data= $('#singapore_experience').find('option:selected').text();
    console.log(data);
   if(data=='Yes'){
	   $(".experience_hide").show();
   }
    else{
		$('.experience_hide').hide();
	}
});