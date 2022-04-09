//getroleslist();
var seg = $('#id').val();
console.log('test');
$(document).ready(function(){
$('#update').validate({
    rules: {
        first_name: 
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
		maritalstatus: 
        {
            required: true,
        },
		address: 
        {
            required: true,
        },
		Qualifation: 
        {
            required: true,
        },
		totalExperience: 
        {
            required: true,
        },
		singaporeexperience: 
        {
            required: true,
        },
		dateofbirth: 
        {
            required: true,
        },
		dateofexpiry: 
        {
            required: true,
        },
		age: 
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
		drivinglicense: 
        {
            required: true,
        },
		singaporedriving: 
        {
            required: true,
        },
		skilld: 
        {
            required: true,
        },
		
		skypeid: 
        {
            required: true,
        },
		homenumber: 
        {
            required: true,
        },
		email: 
        {
            required: true,
        },
		certifcate: 
        {
            required: true,
        },
		degree: 
        {
            required: true,
        },
		resume: 
        {
            required: true,
        },
		mobile: 
        {
            required: true,
        },
		passportno: 
        {
            required: true,
        },
		degree: 
        {
            required: true,
        },
		sheet: 
        {
            required: true,
        },
	passport: 
        {
            required: true,
        },
		demo: 
        {
            required: true,
        },
		Skilled: 
        {
            required: true,
        },
		
    },
messages : {
    first_name: {
    required: "Enter Your FirstName"
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
    required: "Enter Your Gender"
    },
	maritalstatus: {
    required: "Enter  Your Material Status"
    },
	address: {
    required: "Enter Your Address"
    },
	Qualifation: {
    required: "Enter Your Qualifation"
    },
	totalExperience: {
    required: "Enter Your TotalExperience"
    },
	singaporeexperience: {
    required: "Enter Your Singaporeexperience"
    },
	dateofbirth: {
    required: "Enter Your Dateofbirth"
    },
	dateofexpiry: {
    required: "Enter Your Dateofexpiry"
    },
	age: {
    required: "Enter Your Age"
    },
	placeofissue: {
    required: "Enter Your Placeofissue"
    },
	dateofissue: {
    required: "Enter Your Dateof Lssue"
    },
	drivinglicense: {
    required: "Enter Your Driving License"
    },
	singaporedriving: {
    required: "Enter Your Singapore Driving"
    },
	skilld: {
    required: "Enter Your Skilld"
    },
	skypeid: {
    required: "Enter Your Skypeid"
    },
  homenumber: {
    required: "Enter Your Homenumber"
    },
	email: {
    required: "Enter Your Email"
    },
	certifcate: {
    required: "Enter Your Certifcate"
    },
	degree: {
    required: "Enter Your Degree"
    },
	resume: {
    required: "Enter Your Resume"
    },
	mobile: {
    required: "Enter Your Mobile"
    },
	passportno: {
    required: "Enter Your Passport Number"
    },
	
	degree: {
    required: "Enter Your Degree"
    },
	
	sheet: {
    required: "Enter Your Sheet"
    },
	
	passport: {
    required: "Enter Your Passport"
    },
	
	demo: {
    required: "Enter Your Class3 Lic"
    },
	
	Skilled: {
    required: "Enter Your Skilled"
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