
<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/browse-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 06:50:17 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Jobber</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="assets/images/fav.png" type="image/gif" sizes="64x64">

<!-- CSS
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css">
<link href="assets/css/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link href="assets/css/select2.min.css" rel="stylesheet" />
<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/wizard.css">
<link rel="stylesheet" href="assets/css/color-1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php 
$job	= explode("?",$_SERVER['REQUEST_URI']);
?>
<!-- Header 01
================================================== -->
<header class="header_01 header_inner">
  <div class="header_main">
    <div class="header_menu fixed-top">
      <div class="container">
        <div class="header_top">
         <div class="logo">
            <a href="index.html">
              <img alt="JoDice" class="img-fluid" src="assets/images/Jobber.png">
            </a>
          </div>
          <div class="navigation">
           <nav>
              <div class="hamburger hamburger--spring js-hamburger ">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div>
              <ul>

                    <li>
                      <a href="contact-us.html">Contact us</a>
                    </li>

              </ul>
            </nav>
              <div class="ac_nav">
              <a href="register.html"><button class="btn btn-primary">Register </button></a>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_btm">
      
    </div>
  </div> 
</header>


<!-- End Header 02
================================================== -->



<!-- Main 
================================================== -->
<main>
  <div class="job_container">
    <div class="container">
      <div class="row job_main">
       
        <div class=" job_main_right">
          <div class="row job_section">
          <div class="col-sm-12">
            <div class="jm_headings">
                <h5 class="col-lg-12">Applying Job : <span  id="job_tittle"></span> </h5>
				
                
              </div>
              <div class="section-divider">
              </div>
			  <!-- JQUERY STEP -->

<div class="wrapper">
    <form action="" id="registration-form">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
			
            <section>
                <div class="big_form_group">
					
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>First Name</label>
                        <input type="text"  id="first_name" name="first_name" class="form-control" placeholder="" data-validation="first_name" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Last Name</label>
                        <input type="text"  id="last_name" name="last_name" class="form-control" id="designation"placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Father Name</label>
                        <input type="text"  id="last_name" name="last_name" class="form-control" id="designation"placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>DOB</label>
                        <input type="text"  id="last_name" name="last_name" class="form-control" id="designation"placeholder="">
                      </div>
                    </div>	
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Email</label>
                        <input type="text"  id="email" name="email" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
                      </div>
                    </div>
					</div>
					<div class="row">
                    
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="pasword" id="pasword" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Marital Status</label>
                        <input type="text" class="form-control" name="gender" id="gender" placeholder="">
                      </div>
                    </div>
					</div>
					
					 <div class="row">
                    <div class="col-md-4">
                      <div class="form-group ">
						 <label>Photo</label>
                         <div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose Your Profile Image</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
					  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
					</label>
                </div>
            </div>

            <!-- Uploaded image area-->
           
            <div class="image-area mt-1"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                      </div>
                    </div>
		<div class="col-sm-8">
					 <div class="form-group ">
                        <label>Address</label>
                        <textarea class="form-control"  name="address" id="address">
                        </textarea>
                      </div>
					  </div>
					</div>
					
					
                </div>
                
            </section> 
			
			<!-- SECTION 2 -->
            <h4></h4>
            <section>
               <div class="big_form_group">
                  <div class="row">
                     <div class="col-md-4">
                      <div class="form-group ">
                        <label >Qualification</label>
                        <select class="form-control" id="Qualifation" name="Qualifation">
                          <option>
                            Diploma
                          </option>
                          <option>
                            Bachelors Degree
                          </option>
                          <option>
                            Master Degree
                          </option>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Total Experience</label>
                        <input type="text" id="totalExperience"  name="totalExperience" class="form-control" placeholder="">
                      </div>
                    </div> 
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Relevant Experience</label>
                        <input type="text" id="singaporeexperience" name="singaporeexperience" class="form-control" placeholder="">
                      </div>
                    </div>
					</div>
					<div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Date of Birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Age</label>
                        <input type="text" id="age" name="age" class="form-control" placeholder="">
                      </div>
                    </div>
					
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Passport No</label>
                        <input type="text" id="passportno"  name="passportno" class="form-control" placeholder="">
                      </div>
                    </div>
					   </div>
					   
					   <div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Place of Issue</label>
                        <input type="text" id="placeofissue" name="placeofissue" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Date of Issue</label>
                        <input type="date" id="dateofissue" name="dateofissue" class="form-control" placeholder="">
                      </div>
                    </div>
					
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Date of Expiry</label>
                        <input type="date" id="dateofexpiry" name="dateofexpiry" class="form-control" placeholder="">
                      </div>
                    </div>
					   </div>
					   </div>
					   
                
            </section> <!-- SECTION 3 -->
            <h4></h4>
            <section>
                <div class="big_form_group">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Indian Driving License</label>
                        <input type="text" id="drivinglicense" name="drivinglicense" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label >Other Country Driving License</label>
                        <input type="text" id="singaporedriving" name="singaporedriving" class="form-control"  >
                      </div>
                    </div> 
                     <div class="col-md-4">
                      <div class="form-group ">
                        <label >Skilled Labour</label>
                        <select class="form-control" id="skilld" name="skilld">
                          <option>
                            Fresh
                          </option>
                          <option>
                            1nd Year
                          </option>
                          <option>
                           2nd Year
                          </option>

                        </select>
                      </div>
                    </div>
                    
                  </div>
				  
				   <div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Skype Id</label>
                        <input type="text" id="skypeid" name="skypeid" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Mobile</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="">
                      </div>
                    </div>
					
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Home Number</label>
                        <input type="text" id="homenumber"  name="homenumber" class="form-control" placeholder="">
                      </div>
                    </div>
					   </div>
					   
				 <div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Resume</label>
                        <input type="file" id="resume" name="resume" class="form-control" placeholder="">
                      </div>
                    </div>
					
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Provisional Certifcate</label>
                        <input type="file" id="certifcate" name="certifcate" class="form-control" placeholder="">
                      </div>
                    </div>
					   </div>
					   
                </div>
            </section> <!-- SECTION 4 -->
            <h4></h4>
            <section> 
			<div class="big_form_group">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>MasterDegree/Diploma</label>
                        <input type="file"  id="degree"  name="degree" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Mark Sheet</label>
                        <input type="file"  id="sheet"  name="sheet" class="form-control" id="designation"placeholder="">
                      </div>
                    </div> 
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label>Passport</label>
                        <input type="file"  id="passport" name="passport" class="form-control" placeholder="">
                      </div>
                    </div>
					</div>
				<div class="row">
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label  >Class3 Lic</label>
                        <input type="file"  id="demo" name="demo" class="form-control"  id="users "placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label  >Skilled Certicate</label>
                        <input type="file" id="Skilled" name="Skilled" class="form-control"  id="users "placeholder="">
                      </div>
                    </div>
					</div>
				<div class="form-group row">
                  <div  class="col-md-9 ">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>	
                </div>
            </section>
        </div>
    </form>
</div>
                 
          </div>
          </div>  
           
                    
        </div>
      </div>
    </div>
  </div>
</main>


<!-- Footer Container
================================================== -->
<footer id="colophon" class="site-footer custom_footer dark_footer">
  <div class="container">
    <div class="row footer_widget">
        <div class="col-md-4">
          <div class="footer_widget_box">
           
            <div class="logo">
            <a href="index.html">
                 <img alt="JoDice" class="img-fluid" src="assets/images/Jobber.png">
            </a>
          </div>
          <p style="color: rgba(255,255,255,0.6);margin-top: 30px;text-align: justify;">Search available jobs by category, location and more</p>
          
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer_widget_box">
            <h2 >Quick Links</h2>
            <ul >
              <li>
                <i class="fa fa-hand-o-right" ></i> <a href="emp-registration.html">Home</a> 
              </li>
              <li>
                <i class="fa fa-hand-o-right" ></i> <a href="post-a-job.html">Candidate</a>
              </li>
              <li>
                <i class="fa fa-hand-o-right" ></i> <a href="find-staff.html">Employer</a>
              </li>
              <li>
                <i class="fa fa-hand-o-right" ></i> <a href="job-dashboard.html">Contact Us</a>
              </li>
              <!-- <li>
                <i class="fa fa-hand-o-right" ></i> <a href="emp-edit-profile.html">Update profile</a>
              </li>
              <li>
                <i class="fa fa-hand-o-right" ></i> <a href="emp-edit-password.html">Change password</a>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer_widget_box">
            <h2 >Address</h2>
             <ul>
                      <!-- <li><i class="fas fa-map-marker-alt"></i>
                        Keas 69 Str. 15234, Chalandri <br>
                        Athens, <b>Greece</b>
                      </li> -->
                      <li style="color: rgba(255,255,255,0.6);"><i class="fas fa-map-marker-alt" style="background: white;
    font-size: 20px;
    border-radius: 50px;
    color: #0390d6;
    padding: 10px 12px 9px 13px;
    margin-right: 15px;"></i>
                        Lorum ipsum,<br/><span style="margin-left:60px;">Building now, 208.</span>
                      </li>
                      <!-- <li><a href="tel:#"><i class="fas fa-phone"></i> +30-2106019311 (landline)</a></li> -->
                      <li><a href="tel:+65 8152 0523"><i class="fas fa-phone" style="background: white;
    font-size: 20px;
    border-radius: 50px;
    color: #0390d6;
    padding: 10px 12px 9px 8px;
    margin-right: 15px;"></i> +65 1111 111 <!-- (mobile phone) --></a></li>
                      <li><a href="mailto:jobber@gmail.com"><i class="fas fa-envelope" style="background: white;
    font-size: 20px;
    border-radius: 50px;
    color: #0390d6;
    padding: 10px 9px 9px 10px;
    margin-right: 15px;"></i> jobber@gmail.com</a></li>
                    </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="footer_widget_box">
            <h2 >Get In Touch</h2>
            <ul class="social_list">
              <li> <a href="#"><i class="fab fa-twitter"></i></a> 
              </li>
              <li> <a href="#"><i class="fab fa-facebook"></i></a> 
              </li>
              <li> <a href="#"><i class="fab fa-linkedin"></i></a> 
              </li>
              <li> <a href="#"><i class="fab fa-youtube"></i></a> 
              </li>
            </ul>

          </div>
          
    <!--       <div class="footer_widget_box">
            <form class="newsletter">
                        <h2 >Newsletter</h2>
                        <div  class="d-flex">

                          <input class="form-control" type="email" placeholder="Enter your email ">
                          <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                         
                        </div>
                       
                    </form>
                </div> --> 
        </div>
        <div class="col-md-12">
          <div class="footer_widget_box"  >
            <p class="copyright-text">© Copyright 2022 by <span style="color: #0390d6;font-size: 20px;">Jobber</span>. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    <!-- .site-info -->
  </div>
</footer>



<!-- End Footer Container
================================================== -->

<!-- Scripts
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" defer></script>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</body>

<!-- Mirrored from veepixel.com/tf/html/jodice/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 06:50:31 GMT -->
</html>
<style>
.error{
	color:red !important;
}
.job_main_right{width:100% !important;}
ul{ list-style: none}
.container{max-width:80% !important;}
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

</style>
<script>
getJobDetails();
$.validate({
     modules : 'location, date, security, file',
  form: '#registration-form',

  validateOnBlur: true,
  showHelpOnFocus: true,
  addSuggestions: true,
  onSuccess: function($form) {
    console.log("success")
    return false;
  },
  onError: function() {
    console.log("Error")
  }
  });
  
$(function(){
$("#wizard").steps({
headerTag: "h4",
bodyTag: "section",
transitionEffect: "fade",
enableAllSteps: true,
transitionEffectSpeed: 500,
onStepChanging: function (event, currentIndex, newIndex) {
if ( newIndex === 1 ) { console.log($("#registration-form").isValid())
	if($("#registration-form").isValid()){
       // $("#submit-button").show()
	   $('.steps ul').addClass('step-2');
    }
	//console.log('Test');
	return false;

} else {
$('.steps ul').removeClass('step-2');
}
if ( newIndex === 2 ) {
$('.steps ul').addClass('step-3');
} else {
$('.steps ul').removeClass('step-3');
}

if ( newIndex === 3 ) {
$('.steps ul').addClass('step-4');
$('.actions ul').addClass('step-last');
} else {
$('.steps ul').removeClass('step-4');
$('.actions ul').removeClass('step-last');
}
return true;
},
labels: {
finish: "Order again",
next: "Next",
previous: "Previous"
}
});
// Custom Steps Jquery Steps
$('.wizard > .steps li a').click(function(){
$(this).parent().addClass('checked');
$(this).parent().prevAll().addClass('checked');
$(this).parent().nextAll().removeClass('checked');
});
// Custom Button Jquery Steps
$('.forward').click(function(){
$("#wizard").steps('next');
})
$('.backward').click(function(){
$("#wizard").steps('previous');
})
// Checkbox
$('.checkbox-circle label').click(function(){
$('.checkbox-circle label').removeClass('active');
$(this).addClass('active');
})
})
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});
function getJobDetails()
{
	console.log('55555');
	console.log('<?php echo $job[1];?>');
	$.post('api.php?action=getjobDetails&id='+<?php echo $job[1];?>, {} ,function(data){
		console.log(data);
		data=JSON.parse(data);
		console.log(data);
		$('#job_tittle').text(data[0]['job_tittle']);
		
		});
}
</script>
