<?php
session_start();
include('dbconnection.php');
error_reporting(0);
$action=$_GET['action'];
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
	  $sql="INSERT INTO `job_application` (first_name,last_name,dob,mother_name,father_name,address,email_id,gender,mobile_number,maritial_status,age,application_status,whatsapp_number) VALUES ('".$data['first_name']."','".$data['last_name']."','".$data['dateofbirth']."','".$data['mother_name']."','".$data['father_name']."','".$data['address']."','".$data['email']."','".$data['gender']."','".$data['mobile']."','".$data['martial_status']."','".$data['age']."','1','".$data['whatsapp_number']."')";
	 if (mysqli_query($conn,$sql))
	{
		 $sql="INSERT INTO `jop_application_certificate`(qualification,total_experience,revalent_experience,passport_no,place_issue,	date_issue,expried_date,indian_license,other_country_license,skilled_labour,skype_id,resume,pervious_certficate,mater_degree_certificate,class3_lac,skilled_certificate,status,mark_sheet) VALUES ('".$data['Qualifation']."','".$data['totalExperience']."','".$data['relevant_experience']."','".$data['passportno']."','".$data['placeofissue']."','".$data['dateofissue']."','".$data['dateofexpiry']."','".$data['drivinglicense']."','".$data['singaporedriving']."','".$data['skill_labour']."','".$data['skypeid']."','".$data['resume']."','".$data['certifcate']."','".$data['degree']."','".$data['class3_lic']."','".$data['skilled']."','1','".$data['sheet']."')";
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
?>