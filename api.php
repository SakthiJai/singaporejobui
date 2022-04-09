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
	$sql="SELECT * FROM job_list where job_id=".$id;
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
?>