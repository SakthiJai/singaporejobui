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
work_permit_no: 
        {
            required: true,
        },	
primary_skill: 
        {
            required: true,
        },
secoundry_skill: 
        {
            required: true,
        },		
degree_name: 
        {
            required: true,
        },	
totalExperience: 
        {
            required: true,
        },
year_experience: 
        {
            required: true,
        },		
    },
messages : {
  first_name: {
    required: "Enter Your FirstName"
    },
	 last_name: {
    required: "Enter Your LastName"
    },
	
	father_name: {
    required: "Enter Your Father Name"
    },	
	upload: {
    required: "Enter Your Upload"
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
	work_permit_no: {
    required: "Enter  Your Work Permit No"
    },
	primary_skill: {
    required: "Enter  Your Primary Skill"
    },
	secoundry_skill: {
    required: "Enter  Your Secoundry Skill"
    },
	degree_name: {
    required: "Enter  Your Degree Name"
    },	
	totalExperience: {
    required: "Enter  Your Total Experience"
    },	
	year_experience: {
    required: "Enter  Your Year Of Experience"
    },	
 },
  
    highlight: function(element) {
        $(element).closest('.form-control').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error');
    },
    submitHandler: function (form) {
     document.getElementById("#registration_form").submit();
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