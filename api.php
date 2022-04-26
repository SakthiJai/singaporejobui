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
	case'getjobapplication':
		getdegreecat($conn,$_GET['id']);
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
		B.is_edu_required,B.is_certificate
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
$Current_Url = sprintf(
   '%s://%s/%s',
   isset($_SERVER['HTTPS']) ? 'https' : 'http',
   $_SERVER['HTTP_HOST'],
   trim($_SERVER['REQUEST_URI'],'\\api.php?action=registerForminsert')
);
		//echo 'http://localhost/admin/assets/images/pngtree.png';
    //print_r($_FILES['skilled']['name']);exit;
	if($_FILES['resume']['name']!=""){
		$file_name 	= $_FILES['resume']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['resume']['tmp_name'];
		$path_filename_ext = $target_dir.$filename.".".$ext;
		$saveimage = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['certifcate']['name']!=""){
		$file_name 	= $_FILES['certifcate']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certifcate']['tmp_name'];
		$path_filename_ext1 = $target_dir.$filename.".".$ext;
		$save_image1 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext1)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['degree']['name']!=""){
		$file_name 	= $_FILES['degree']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['degree']['tmp_name'];
		$path_filename_ext2 = $target_dir.$filename.".".$ext;
		$save_image2 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext2)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
if($_FILES['class3_lic']['name']!=""){
		$file_name 	= $_FILES['class3_lic']['name'];
		$target_dir = $Current_Url."assets/images/applicantfiles/";
		$store_image = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['class3_lic']['tmp_name'];
		$path_filename_ext3 = $target_dir.$filename.".".$ext;
		$save_image3 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext3)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['skilled']['name']!=""){
		$file_name 	= $_FILES['skilled']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['skilled']['tmp_name'];
		$path_filename_ext4 = $target_dir.$filename.".".$ext;
		$save_image4 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext4)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['sheet']['name']!=""){
		$file_name 	= $_FILES['sheet']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['sheet']['tmp_name'];
		$path_filename_ext5 = $target_dir.$filename.".".$ext;
		$save_image5 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext5)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['upload']['name']!=""){
		$file_name 	= $_FILES['upload']['name'];
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$target_dir = "assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['upload']['tmp_name'];
		$path_filename_ext6 = $target_dir.$filename.".".$ext;
		$save_image6 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext6)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }else{
			     print_r(error_get_last());exit;
			 }
	}
if($_FILES['certficate_10th']['name']!=""){
		$file_name 	= $_FILES['certficate_10th']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certficate_10th']['tmp_name'];
		$path_filename_ext8 = $target_dir.$filename.".".$ext;
		$save_image8 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext8)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['certificate_12th']['name']!=""){
		$file_name 	= $_FILES['certificate_12th']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['certificate_12th']['tmp_name'];
		$path_filename_ext9 = $target_dir.$filename.".".$ext;
		$save_image9 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext9)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
if($_FILES['bachelorsdegree']['name']!=""){
		$file_name 	= $_FILES['bachelorsdegree']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['bachelorsdegree']['tmp_name'];
		$path_filename_ext10 = $target_dir.$filename.".".$ext;
		$save_image10 = $store_image.$filename.".".$ext;
		//print_r($save_image10);exit;
		if(move_uploaded_file($temp_name,$path_filename_ext10)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}
if($_FILES['diploma']['name']!=""){
		$file_name 	= $_FILES['diploma']['name'];
		$target_dir = "assets/images/applicantfiles/";
		$store_image = $Current_Url."assets/images/applicantfiles/";
		$path = pathinfo($file_name);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['diploma']['tmp_name'];
		$path_filename_ext11 = $target_dir.$filename.".".$ext;
		$save_image11 = $store_image.$filename.".".$ext;
		if(move_uploaded_file($temp_name,$path_filename_ext11)){
			 echo "Congratulations! File Uploaded Successfully.";
			 }
	}	
	  $sql="INSERT INTO `job_application` (first_name,last_name,dob,mother_name,father_name,address,email_id,gender,mobile_number,maritial_status,age,application_status,whatsapp_number,images) VALUES ('".$data['first_name']."',
	  '".$data['last_name']."','".$data['dateofbirth']."','".$data['mother_name']."','".$data['father_name']."','".$data['address']."','".$data['email']."','".$data['gender']."','".$data['mobile']."',
	  '".$data['martial_status']."','".$data['age']."','1','".$data['whatsapp_number']."','".$save_image6."')";
	 if (mysqli_query($conn,$sql))
	{
	    $last_id = $conn->insert_id;
		 $sql="INSERT INTO `jop_application_certificate`(job_app_id,qualification,total_experience,revalent_experience,passport_no,place_issue,date_issue,expried_date,indian_license,other_country_license,skilled_labour,
		 resume,pervious_certficate,mater_degree_certificate,class3_lac,skilled_certificate,status,mark_sheet,certifcate_10th,certficate_12th,bachelors_degree,instagram,facebook,twitter,singapore_experience_details,
		 diploma_certificate,primary_skill,secoundry_skill,yoe,workpermit_number,degree_name,candidate_status) VALUES ('".$last_id."','".$data['Qualifation']."','".$data['totalExperience']."','".$data['relevant_experience']."',
		 '".$data['passportno']."','".$data['placeofissue']."','".$data['dateofissue']."','".$data['dateofexpiry']."','".$data['drivinglicense']."','".$data['singaporedriving']."','".$data['skill_labour']."',
		 '".$saveimage."','".$save_image1."','".$save_image2."','".$save_image3."','".$save_image4."','1','".$save_image5."','".$save_image8."','".$save_image9."',
		 '".$save_image10."','".$data['instagram']."','".$data['facebook']."','".$data['twitter']."','".$data['singapore_experience_details']."','".$save_image11."','".$data['primary_skill']."',
		 '".$data['secoundry_skill']."','".$data['year_experience']."','".$data['work_permit_no']."','".$data['degree_name']."','Applied Job')";
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
function getdegreecat($conn,$id)
{
	 $sql="SELECT * FROM education_requeried where degree_category ='".$id."'";
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
?>