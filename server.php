<?php 
include "dbconnection.php";


$opcode = $_GET['opcode'];

if ( $opcode == 1) {


		if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$sql="INSERT INTO feedback(name, email, message) VALUES('$name','$email','$message')";
echo $sql;

		$result = $conn->query($sql);
		
		if ($result == TRUE) {
			header("Location:index.php");
		} else {
			echo "something error occured please try again after some time";
		}
    }
}elseif ( $opcode == 2){



		if(isset($_POST['register'])) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$school = $_POST['school'];
		$course = $_POST['course'];
		$topic = $_POST['topic'];
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		echo"3";		
		$sql="INSERT INTO form (name,gender,phone,address,email,school,course,topic,uname,password) VALUES('$name','$gender','$phone','$address','$email','$school','$course','$topic','$uname','$password')";
		//echo $sql;
		$result = $conn->query($sql);
		if ($result == TRUE) {
			
			echo "Record uploaded";
			header("Location: login.php?status=".$status);

		} else {
			//echo "Error:". $sql . "<br>". $conn->error;
echo "error";
			//header("Location: form.php.php?status=".$status);
		//exit;
		}
    }
}
elseif($opcode == 3){

	if(isset($_POST['btnlogin'])){
		$usr_name = $_POST['txtuname'];
		$usr_pass = $_POST['txtupass'];

		$sql="select * from form where uname='$usr_name' and password ='$usr_pass'";

		$result=$conn->query($sql);
		$empname = '';
		$usrid = 0;

		if ($result->num_rows == 1) {  // should be 1
			while ($row = $result->fetch_assoc()) { // ??????? better way
				$empname = $row['name'];
				$usrid = $row['usrid'];
			}
			
			$result -> free_result(); //FREE the resultset
			$conn->close();

			session_start();
			$_SESSION["login_user"] = $empname;
			$_SESSION["login_usrid"] = $usrid;
			header("location:dashboard.php");
			exit;
		} else {
			header("location:login.php?err=1");	
		}
	}

}
elseif($opcode == 4){

	if(isset($_POST['btnlogin'])){
		$usr_name = $_POST['txtuname'];
		$usr_pass = $_POST['txtupass'];

		$sql="select * from admin where uname='$usr_name' and password ='$usr_pass'";

		$result=$conn->query($sql);
		$empname = '';
		$usrid = 0;

		if ($result->num_rows == 1) {  // should be 1
			while ($row = $result->fetch_assoc()) { // ??????? better way
				$empname = $row['name'];
				$usrid = $row['usrid'];
			}
			
			$result -> free_result(); //FREE the resultset
			$conn->close();

			session_start();
			$_SESSION["login_user"] = $empname;
			$_SESSION["login_usrid"] = $usrid;
			header("location:admin_dashboard.php");
			exit;
		} else {
			header("location:login.php?err=1");	
		}
	}

}