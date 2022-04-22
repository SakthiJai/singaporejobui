
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<script src="assets/js/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

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
    <form action="api.php?action=registerForminsert" id="registration_form" enctype="multipart/form-data" method="POST">
        <div class="container-fluid bg-gray" id="accordion-style-1">
	<div class="container">
		<section>
			<div class="row">
				<div class="col-12">
							
				</div>
				<div class="col-12 mx-auto">
					<div class="accordion" id="accordionExample" style="font-family: 'Roboto Mono', monospace;	">
						<div class="card">
							<div class="card-header" id="headingOne" style="height:46px;">
								<h5 class="mb-0">
							<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border:none;">
							  <i class="fa fa-angle-double-right mr-3"></i>Personal Information
							</button>
						  </h5>
							</div>

							<div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									 <div class="big_form_group">
				<div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                        <label>First Name</label>
                        <input type="text"  id="first_name" name="first_name"  class="form-control" placeholder="">
                      </div>
                        
                       <div class="form-group ">
                        <label>Father Name</label>
                        <input type="text"  id="father_name" name="father_name" class="form-control" id="designation" placeholder="">
                      </div>
                     <div class="form-group ">
                        <label>Email</label>
                        <input type="text"  id="email" name="email" class="form-control" placeholder="">
                      </div>  
					 <div class="form-group ">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
                      </div>  
                    </div>
					<div class="col-md-4">
					<div class="form-group ">
                        <label>Last Name</label>
                        <input type="text"  id="last_name" name="last_name" class="form-control" id="designation" placeholder="">
                      </div>
					  <div class="form-group ">
                        <label>Mother Name</label>
                       <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="">
                      </div>
					<div class="form-group ">
                        <label>Gender</label>
                        <select class="form-control" id="gender" name="gender">
						<option value="">Select</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                      </div>
					  
					  <div class="form-group ">
                        <label>Whatsapp Number</label>
                        <input type="text"  id="whatsapp_number" name="whatsapp_number" class="form-control" placeholder="">
                      </div>
					
                      
                      
                    
					</div>
                    <div class="col-md-4">
                        <div class="form-group ">
						 <label>Photo</label>
                         <div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm" style="margin-top:-12px;">
                <input  type="file" onchange="readURL(this);" id="upload" name="upload" class="form-control border-0" >
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose Your Profile Image</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
					  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
					</label>
                </div>
            </div>

            <!-- Uploaded image area-->
           
            <div class="image-area mt-1"><img id="imageResult" src="#" alt="" style="max-width: 50%;" name="imageresult" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                      </div>
                    </div>
                </div>
					<div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Date of Birth</label>
						  <input type="text" id="dateofbirth" class="datepicker form-control" placeholder="Select Date" name="dateofbirth">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Age</label>
                        <input type="text" id="age" name="age" class="form-control" placeholder="">
                      </div>
                    </div>
				<!---	<div class="col-md-4">
                      <div class="form-group ">
                        <label>Marital Status</label>
                         <select class="form-control" id="martial_status" name="martial_status">
						 <option value="">Select</option>
                          <option value="1">Married</option>
                          <option value="2">Unmarried</option>
                        </select>
                      </div>
                    </div>--->
					   </div>
					 <div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Instagram Url</label>
                        <input type="text" id="instagram" name="instagram" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Facebook Url</label>
                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Twitter Url</label>
                        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="">
                      </div>
                    </div>
					   </div>  
					 <div class="row">
					<div class="col-sm-12">
					 <div class="form-group ">
                        <label>Address</label>
                        <textarea   id="address"  name="address"  class="form-control" placeholder="">
                        </textarea>
                      </div>
					  </div>
					</div>
					
                </div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo" style="height:46px;">
								<h5 class="mb-0">
							<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border:none;">
							 <i class="fa fa-angle-double-right mr-3"></i>Singapora Detalis
							</button>
						  </h5>
							</div>
							<div id="collapseTwo" class="collapse show fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div class="big_form_group">
					   <div class="row">			
					   <div class="col-md-4">
                      <div class="form-group ">
                        <label>Passport No</label>
                        <input type="text" id="passportno"  name="passportno" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Place of Issue</label>
                        <input type="text" id="placeofissue" name="placeofissue" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Date of Issue</label>
                        <input type="text" id="dateofissue" name="dateofissue" class="datepicker form-control" placeholder="Select Date">
                      </div>
                    </div>
					   </div>
					   <div class="row">
							<div class="col-md-4">
								<div class="form-group ">
								<label>Date of Expiry</label>
								<input type="text" id="dateofexpiry" name="dateofexpiry" class="datepicker form-control" placeholder="Select Date">
								</div>
							</div>
							<div class="col-md-4">
                      <div class="form-group ">
                        <label>Driving License</label>
                        <input type="text" id="drivinglicense" name="drivinglicense" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label >Singapora Driving License</label>
                        <input type="text" id="singaporedriving" name="singaporedriving" class="form-control"  >
                      </div>
                    </div>
					   </div>
					   </div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree" style="height:46px;">
								<h5 class="mb-0">
							<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border:none;">
							  <i class="fa fa-angle-double-right mr-3"></i> Personal Experience
							</button>
						  </h5>
							</div>
							<div id="collapseThree" class="collapse show fade" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<div class="big_form_group">
				<div class="row">
                     <div class="col-md-4">
                      <div class="form-group ">
                        <label >Degree</label>
                        <select class="form-control" id="Qualifation" name="Qualifation" onchange="getdegreecat(this.value)">
						<option value="">Select</option>
                          <option value="1">Diploma</option>
                          <option value="2">Bachelors Degree</option>
                          <option value="3">Master Degree</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Degree Name</label>
						<select class="form-control" id="degree_name" name="degree_name">
						<option value="">Select</option>
                        </select>
                      </div>
                    </div>
					<div class="col-md-4 ">
                      <div class="form-group">
                        <label>Work Permit Number</label>
                        <input type="text" id="work_permit_no" name="work_permit_no" class="form-control" placeholder="">
                      </div>
                    </div>
					</div>
                  <div class="row">
                     
                     <div class="col-md-4">
                      <div class="form-group ">
                        <label >Skilled Labour</label>
                        <select class="form-control" id="skilld" name="skilld">
						<option value="">Select</option>
                          <option value="1">Fresher</option>
                          <option value="2">Experience</option>

                        </select>
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group">
                        <label>Primary Skill</label>
                        <input type="text" id="primary_skill" name="primary_skill" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Secoundry Skill</label>
                        <input type="text" id="secoundry_skill" name="secoundry_skill" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
				  <div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Singapore Experience</label>
                        <select class="form-control" id="singapore_experience" name="singapore_experience">
						<option value="">Select</option>
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                        </select>
                      </div>
                    </div> 	
					<div class="col-md-4" id="experience_hide">
                      <div class="form-group">
                        <label>If Yes</label>
                        <input type="text" id="singapore_experience_details" name="singapore_experience_details" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4 experience_hide">
                      <div class="form-group">
                        <label>Year Experience</label>
                        <input type="text" id="year_experience" name="year_experience" class="form-control" placeholder="">
                      </div>
                    </div>
				  </div>
				   <div class="row">
				   <div class="col-md-4">
                      <div class="form-group ">
                        <label>Total Experience</label>
                        <input type="text" id="totalExperience"  name="totalExperience" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label>Relevant Experience</label>
                        <input type="text" id="relevant_experience" name="relevant_experience" class="form-control" placeholder="">
                      </div>
                    </div>	
					
					
				   </div>
					  
					   
                </div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour" style="height:46px;">
								<h5 class="mb-0">
							<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="border:none;">
							  <i class="fa fa-angle-double-right mr-3"></i> Upload Docments 
							</button>
						  </h5>
							</div>
							<div id="collapseFour" class="collapse  show fade" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
									<section> 
			<div class="big_form_group" id="materDegreehide1">
                  <div class="row">
				  <div class="col-md-4">
					  <div class="form-group">
						 <label style="margin-left:19px;">Resume</label>
                         <div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="resume" type="file"  class="form-control" name="resume">
							<label id="resume-label" for="resume" class="font-weight-light text-muted">Choose Your Resume</label>
							<div class="input-group-append">
								<label for="resume" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" ><i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
					</div>  
                    </div>
					<div class="col-md-4">
                      <div class="form-group">
                        <label style="margin-left:19px;">10th Certficate</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm" >
							<input id="certficate_10th" type="file"  class="form-control border-0" name="certficate_10th">
							<label id="certficate_10th-label" for="certficate_10th" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="certficate_10th" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">12th Certficate</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm" >
							<input id="certificate_12th" type="file"  class="form-control border-0" name="certificate_12th">
							<label id="certificate_12th-label" for="certificate_12th" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="certificate_12th" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                    </div>
					</div>
					<div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Diploma</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="diploma" type="file"  class="form-control border-0" name="diploma">
							<label id="diploma-label" for="diploma" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="diploma" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Bachelors Degree</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="bachelorsdegree" type="file"  class="form-control border-0" name="bachelorsdegree">
							<label id="bachelorsdegree-label" for="bachelorsdegree" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="bachelorsdegree" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">MasterDegree</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="degree" type="file"  class="form-control border-0" name="degree">
							<label id="degree-label" for="degree" class="font-weight-light text-muted">Choose Your Certificate</label>
							<div class="input-group-append">
								<label for="degree" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                    </div>
					
					</div>
				<div class="row">
				<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Skilled Certicate</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="skilled" type="file"  class="form-control border-0" name="skilled">
							<label id="skilled-label" for="skilled" class="font-weight-light text-muted">Choose Your Profile Image</label>
							<div class="input-group-append">
								<label for="skilled" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                 </div>
				<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Mark Sheet</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="sheet" type="file"  class="form-control border-0" name="sheet">
							<label id="sheet-label" for="sheet" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="sheet" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                 </div>
				<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Work Experience Certificate</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="class3_lic" type="file"  class="form-control border-0" name="class3_lic">
							<label id="class3_lic_label" for="class3_lic" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="class3_lic" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                </div> 
					</div>
					<div class="row">
					<div class="col-md-4">
                      <div class="form-group ">
                        <label style="margin-left:19px;">Others</label>
						<div class="input-group mb-1 px-2 py-2 rounded-pill bg-white shadow-sm">
							<input id="skilled" type="file"  class="form-control border-0" name="skilled">
							<label id="skilled-label" for="skilled" class="font-weight-light text-muted">Choose Your Certficate</label>
							<div class="input-group-append">
								<label for="skilled" class="btn btn-info m-0 rounded-pill px-4" style="background: #6200ea;color: #fff;" > <i class="fa fa-cloud-upload mr-2 text-muted"></i>
								  <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" alt="" width="25" class="mb-1">&nbsp;&nbsp;<small class="text-uppercase font-weight-bold text-muted" style="color:#fff !important">Choose file</small>
								</label>
							</div>
					</div>
                      </div>
                 </div>
				 </div>
					
                </div>
				
            </section>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<div class="form-group row">
                  <div  class="col-md-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
	</div>
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
                <i class="fa fa-hand-o-right" ></i> <a href="emp-edit-password.html">Change password</a>+++
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" ></script>


<script src="assets/js/owl.carousel.min.js"></script>



<script src="assets/js/form.js"></script>
 
</body>

<!-- Mirrored from veepixel.com/tf/html/jodice/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 06:50:31 GMT -->
</html>
<style>



#accordion-style-1 h1,
#accordion-style-1 a{
   color: #3fc199;
}
#accordion-style-1 .btn-link {
    color: white;
    background-color: transparent;
    text-decoration: none !important;
    font-size: 16px;
    font-weight:800;
	padding-left: 25px;
}

#accordion-style-1 .card-body {
    border-top: 2px solid #007b5e;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
	display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
	background: #007b5e;
    padding: 13px 11px;
    color: #ffffff;
    width: 35px;
    height: 41px;
    position: absolute;
    left: -1px;
    top: 10px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
	display:block;
}
.error{
	color:red !important;
}
.job_main_right{width:100% !important;}
ul{ list-style: none}
.container{max-width:100% !important;}
#upload {
    opacity: 0;
}
#certifcate{
    opacity: 0;
}
#resume{
    opacity: 0;  
}
#certificate_8th{
    opacity: 0;
}
#certficate_10th{
    opacity: 0;
}
#certificate_12th{
    opacity: 0;
}
#bachelorsdegree{
    opacity: 0;
}
#degree{
    opacity: 0;
}
#skilled{
    opacity: 0;
}
#sheet{
    opacity: 0;
}
#class3_lic{
    opacity: 0;
}
#diploma{
    opacity: 0;
}
#diploma-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#certificate_8th-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#certifcate-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#resume-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#certficate_10th-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#certificate_12th-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#bachelorsdegree-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#degree-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#skilled-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#sheet-label{
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}
#class3_lic_label{
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


.datepicker-dropdown {
    top: 0;
    left: 0
}

.datepicker table tr td.today,
span.focused {
    border-radius: 50% !important
}

thead tr:nth-child(2) {
    background-color: #FF80AB !important
}

thead tr:nth-child(3) th {
    color: #FF80AB !important;
    padding-top: 20px;
    padding-bottom: 10px
}

.dow,
.old-day,
.day,
.new-day {
    width: 40px !important;
    height: 40px !important;
    border-radius: 0px !important
}

.old-day:hover,
.day:hover,
.new-day:hover,
.month:hover,
.year:hover,
.decade:hover,
.century:hover {
    border-radius: 50% !important;
    background-color: #eee
}

.active {
    border-radius: 50% !important;
    background-image: linear-gradient(#90CAF9, #64B5F6) !important;
    color: #fff !important
}

.prev,
.next,
.datepicker-switch {
    border-radius: 0 !important;
    padding: 20px 10px !important;
    text-transform: uppercase;
    font-size: 20px;
    color: #fff;
    opacity: 0.8
}

.prev:hover,
.next:hover,
.datepicker-switch:hover {
    background-color: inherit !important;
    opacity: 1
}
.card-header{
	background: linear-gradient(to left, #185a9d, #43cea2) !important;
}
.form-group label{
	font-size:12px !important;
}
</style>
<script>
getJobDetails();
  $(document).ready(function(){

$('.datepicker').datepicker({
format: 'dd-mm-yyyy',
todayHighlight: true,
toggleActive: true
});

});


  

// Custom Steps Jquery Steps

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
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#resume')
                .attr(e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function getJobDetails()
{
	console.log('55555');
	console.log('<?php echo $job[1];?>');
		$.post('api.php?action=getjobDetails&id='+<?php echo $job[1];?>, {} ,function(data){
		data=JSON.parse(data);
		var education = data[0]['is_edu_required'];
		if(education!=1){
			$('#materDegreehide1').hide();
		}
		$('#job_tittle').text(data[0]['job_tittle']);
		
		});
}
$('.input-group.date').datepicker({format: "dd.mm.yyyy"}); 

function getdegreecat(value){
	$.post('api.php?action=getdegreecat&id='+value, {} ,function(data){
		data=JSON.parse(data);
		console.log(data.length);
		data.forEach((option)=>
		{
		   $('#degree_name').append('<option value="'+option.id+'">'+option.degree_name+'</option>'); 
		});
		});
}
</script>
