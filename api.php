<?php 
//print_r($_POST);
session_start();
include('dbconnection.php');
error_reporting(0);
$action=$_GET['action'];
//print_r($_POST);
switch($action)
{	
	
	case 'getjoblist':
		getjoblist($conn);
	break;
	case 'getjobDetails':
		getjobDetails($conn,$_GET['id']);
	break;	
	case 'getsectorslist':
		getsectorslist($conn);
	break;
	case 'getexperiencelist':
		getexperiencelist($conn);
	break;
	case 'getcategorylist':
		getcategorylist($conn);
	break;
	case 'getsalarylist':
		getsalarylist($conn);
	break;
	case'registerForminsert':
		registerForminsert($conn,$_POST);
	break;
	case 'getjobapplication':
		getjobapplication($conn);
	break;
	default:
	break;
}
function getjoblist($conn)
{
	$sql="SELECT * FROM job_list where status =1";
	$materialinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($materialinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($materialinformation);
}
function getjobDetails($conn,$id)
{
	 $sql="SELECT A.job_id ,A.job_tittle,A.ref_image,A.job_sectors,A.job_category,A.sub_category,A.job_experience,A.serivce_charge,A.requried_skills,A.description,
		B.education_requried,B.education_certficate
	FROM job_list A
	left join sub_category B ON B.sub_cat_id= A.sub_category
	where A.job_id='".$id."'";
	$materialinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($materialinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($materialinformation);
}
function getsectorslist($conn)
{
	$sql="SELECT * 
		FROM sectors
		where  status IN (1,2)";
	$companiesinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($companiesinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($companiesinformation);
}
function getexperiencelist($conn)
{
	$sql="SELECT * 
		FROM experiencerange
		where  status IN (1,2)";
	$experienceinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($experienceinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($experienceinformation);
}
function getcategorylist($conn)
{
	$sql="SELECT * 
		FROM category
		where  status IN (1,2)";
	$experienceinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($experienceinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($experienceinformation);
}
function getsalarylist($conn)
{
	$sql="SELECT * 
		FROM salary
		where  status IN (1,2)";
	$experienceinformation	=	[];
	if($search_result= mysqli_query($conn,$sql))
	 {
		 if(mysqli_num_rows($search_result)>0)
		 {
		 while($search_row=mysqli_fetch_array($search_result)){
			 array_push($experienceinformation,$search_row);
		 }
		 }
	 }
	 echo json_encode($experienceinformation);
}
function registerForminsert($conn,$data)
{
	//print_r($_FILES['bachelorsdegree']['name']);exit;
	if($_FILES['resume']['name']!=""){
		$file_name 	= $_FILES['resume']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['resume']['tmp_name'];
		$path_filename_ext = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['certifcate']['name']!=""){
		$file_name 	= $_FILES['certifcate']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certifcate']['tmp_name'];
		$path_filename_ext1 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext1)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['degree']['name']!=""){
		$file_name 	= $_FILES['degree']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['degree']['tmp_name'];
		$path_filename_ext2 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext2)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
if($_FILES['class3_lic']['name']!=""){
		$file_name 	= $_FILES['class3_lic']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['class3_lic']['tmp_name'];
		$path_filename_ext3 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext3)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['skilled']['name']!=""){
		$file_name 	= $_FILES['skilled']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['skilled']['tmp_name'];
		$path_filename_ext4 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext4)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['sheet']['name']!=""){
		$file_name 	= $_FILES['sheet']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['sheet']['tmp_name'];
		$path_filename_ext5 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext5)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['upload']['name']!=""){
		$file_name 	= $_FILES['upload']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['upload']['tmp_name'];
		$path_filename_ext6 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext6)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['certficate_10th']['name']!=""){
		$file_name 	= $_FILES['certficate_10th']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certficate_10th']['tmp_name'];
		$path_filename_ext8 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext8)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['certificate_12th']['name']!=""){
		$file_name 	= $_FILES['certificate_12th']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certificate_12th']['tmp_name'];
		$path_filename_ext9 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext9)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
if($_FILES['bachelorsdegree']['name']!=""){
		$file_name 	= $_FILES['bachelorsdegree']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['bachelorsdegree']['tmp_name'];
		$path_filename_ext10 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext10)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['diploma']['name']!=""){
		$file_name 	= $_FILES['diploma']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['diploma']['tmp_name'];
		$path_filename_ext11 = $target_dir.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext11)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
	  $sql="INSERT INTO `job_application` (first_name,last_name,dob,mother_name,father_name,address,email_id,gender,mobile_number,maritial_status,age,application_status,whatsapp_number,images) VALUES ('".$data['first_name']."','".$data['last_name']."','".$data['dateofbirth']."','".$data['mother_name']."','".$data['father_name']."','".$data['address']."','".$data['email']."','".$data['gender']."','".$data['mobile']."','".$data['martial_status']."','".$data['age']."','1','".$data['whatsapp_number']."','".$path_filename_ext6."')";
	 if (mysqli_query($conn,$sql))
	{
		 $sql="INSERT INTO `jop_application_certificate`(qualification,total_experience,revalent_experience,passport_no,place_issue,	date_issue,expried_date,indian_license,other_country_license,skilled_labour,resume,pervious_certficate,mater_degree_certificate,class3_lac,skilled_certificate,status,mark_sheet,certifcate_10th,certficate_12th,bachelors_degree,instagram,facebook,twitter,singapore_experience_details,diploma_certificate) VALUES ('".$data['Qualifation']."','".$data['totalExperience']."','".$data['relevant_experience']."','".$data['passportno']."','".$data['placeofissue']."','".$data['dateofissue']."','".$data['dateofexpiry']."','".$data['drivinglicense']."','".$data['singaporedriving']."','".$data['skill_labour']."','".$path_filename_ext."','".$path_filename_ext1."','".$path_filename_ext2."','".$path_filename_ext3."','".$path_filename_ext4."','1','".$path_filename_ext5."','".$path_filename_ext8."','".$path_filename_ext9."','".$path_filename_ext10."','".$data['instagram']."','".$data['facebook']."','".$data['twitter']."','".$data['singapore_experience_details']."','".$path_filename_ext11."')";
		if (mysqli_query($conn,$sql))
		{
			$error =200;
		}else{
			$error =500;
		}
	}	
    else{
		$error=501;
	}
	if($error==200){
		echo 'Insert Sucessfully';
	}
	else{
		echo "insert issue";
	}
}
function getjobapplication($conn){
			$sql="SELECT A.job_app_id,A.first_name,A.age
			FROM job_application A
			inner join  jop_application_certificate B on B.job_app_id =A.job_app_id";
				$materialinformation=[];
					if($search_result= mysqli_query($conn,$sql))
					 {
						 if(mysqli_num_rows($search_result)>0)                  
						 {                                      
						 while($search_row=mysqli_fetch_array($search_result)){
							 array_push($materialinformation,$search_row);
						 }
						 }
					 }
	 echo json_encode($materialinformation);
}
?>