<?php
session_start();
include('Database.php');
$db=new Database();
$email=$_POST['email'];
$name=(isset($_POST['name'])?$_POST['name']:"");
$id=(isset($_POST['userID'])?$_POST['userID']:"");
$password=(isset($_POST['password'])?$_POST['password']:"");
$picture=(isset($_POST['picture'])?$_POST['picture']:"");
$ssql='SELECT * FROM et_login WHERE et_login_email="'.$email.'"';
$db->Query($ssql);
$numr=$db->NumRows();

if(isset($_POST['email']) && ($_POST['evtype']=="signup"))
{
	if($numr==0)
	{
		$sql='INSERT INTO et_login(et_login_name, et_login_email, et_login_api,et_login_password,et_login_img) VALUES ("'.$name.'","'.$email.'","'.$id.'","'.base64_encode($password).'","'.$picture.'")';
		$inresult=$db->UpdateDb($sql);
		$ms=1;
	}
	else
	{
		$ms=0;
	}
	echo $ms;
	if(isset($_POST['password']))
	{
		header('location:index.html?st='.$ms);
	}
}
else
{
	if($numr>0)
	{
	$logsql='SELECT * FROM et_login WHERE et_login_email="'.$email.'" and et_login_api="'.$id.'" or et_login_email="'.$email.'" and et_login_password="'.base64_decode($password).'"';
	$db->Query($logsql);
	$lognumr=$db->NumRows();
	if($lognumr>0)
	{
		$logstats=5;
		$result=$db->Rows();
		$result[0]['et_login_name'];
		$_SESSION['et_login_id']=$result[0]['et_login_id'];
		$_SESSION['et_login_name']=$result[0]['et_login_name'];
		$_SESSION['et_login_email']=$result[0]['et_login_email'];
	}
	else
	{
		$logstats=3;
	}

	}
	else
	{
		$logstats=4;
	}
echo $logstats;
}

?>