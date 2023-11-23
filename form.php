<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5; /* Light background color */
	  width: 800px;
	  margin: auto;

    }

    .title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .input_field {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold; /* Bold font for labels */
      color: #333; /* Text color for labels */
    }

    .input_field .input,
    .input_field .textarea,
    .input_field select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .gender {
      display: flex;
      align-items: center;
    }

    .input_field .gender select {
      flex: 1;
      margin-left: 10px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007BFF; /* Blue button color */
      color: #fff;
      cursor: pointer;
    }

    /* Optional: Add hover effect for the button */
    .btn:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="">Tech-Verse Academy</h1>
      <nav id="navbar" class="navbar">
        <ul>
          
          
		  <li><a class="nav-link scrollto" href="login.php">Login</a></li>
           </ul>       
      </nav>
    </div>
  </header>
<section>
<div class="container">
	<form id="frm_registration" action="server.php?opcode=2" method = "POST"  enctype="multipart/form-data">
	<div class="title">
		Registration form
	</div>
		<div class="input_field">
				<label>Name:</label>
				<input type="text" class="input" name="name" id="name" required>
		</div>
		<div class="input_field">
			<label>Gender:</label>
			<div class="gender">
			<select name="gender" class="gender" id="gender">
				<option value="">--Select--</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>
	</div>
	</div>
	<div class="input_field">
	<label>Phone Number:</label>
	<input type="text" class="input" name="phone" id="phone"required>
	</div>
	<div class="input_field">
	<label>Address:</label>
	<textarea class="textarea" name="address" id="address" required></textarea>
	</div>
	<div class="input_field">
	<label>Email:</label>
	<input type="email" class="input" name="email" id="email" required>
	</div>
	<div class="input_field">
	<label>School / College name:</label>
	<input type="text" class="input" name="school" id="school" required>
	</div>
	<div class="input_field">
  <label for="course">Select course:</label>
  <select class="course" name="course" id="course" onchange="updateTopics()" required>
    <option value="">--Please choose a course--</option>
    <option value="aiee">All India Entrance Examination</option>
    <option value="tee">Tripura Entrance Examination</option>
    <option value="b_eng">Boards & Diploma / Degree Classes</option>
    <option value="sc">Special Software classes</option>
  </select>
</div>
<div class="input_field">
  <label for="topic">Course you want to register:</label>
  <select name="topic" class="topic" id="topic">
    <option value="0">--select your course to register--</option>
  </select>
</div>
	<div class="input_field">
	<label>Set Username:</label>
	<input type="text" class="input" name="uname" required>
	</div>
	<div class="input_field">
	<label>Set Password</label>
	<input type="password" class="input" name="password" id="password" required>
	</div>
	<div class="input_field">
	<input type="submit" value="register" class="btn" name="register" id="register" onclick="validate();">
	</div>
</form>
<br>
	<p><a href="login.php">Already have an account</a> </p>
</div>
</section>
<script>
function validate(){	
			var name = document.getElementById("fname").value;		
			var regex = /^[a-zA-Z ]{2,30}$/;
			if(name.length == ""){
				alert("Name can not be blank");
				return false;
			} else if(! regex.test(name)){
				alert("Enter a valid name");
				return false;
			}
			var school = document.getElementById("school").value;			
			var scgex = /^[a-zA-Z ]{5,100}$/;

			if(school.length == ""){
				alert("School/college name can not be blank");
				return false;
			} else if(! scgex.test(school)){
				alert("Enter a valid name");
				return false;
			}
			alert(1);
			var phone = document.getElementById("phone").value;
			
			var phgex = /^\d{10,11}$/;

			if(phone.length == ""){
				alert("Phone number can not be blank");
				return false;
			} else if(! phgex.test(phone)){
				alert("Enter a valid phone number");
				return false;
			}
			
			var address = document.getElementById("address").value;
			
			var adgex = /^[a-zA-Z ]{5,300}$/;

			if(address.length == ""){
				alert("Address can not be blank");
				return false;
			} else if(! adgex.test(address)){
				alert("Enter a valid Address");
				return false;
			}

			if(document.getElementById("gender").value == 0) {
				alert("Select gender");
				return false;
			}
			
			if(document.getElementById("password").value != document.getElementById("conpassword").value){
				alert("Password and confirm password must be same");
				return false;
			}
			alert(1);
			document.getElementById("frm_registration").submit();
			//alert(2);
		}

function updateTopics() {
    const course = document.getElementById("course").value;
    const topicDropdown = document.getElementById("topic");
    
    // Clear previous options
    topicDropdown.innerHTML = "<option value=''>--select your course to register--</option>";
    
    if (course === "aiee") {
      const topics = ["NEET", "JEE (Mains)", "WBJEE", "CUET"];
      for (let i = 0; i < topics.length; i++) {
        const option = document.createElement("option");
        option.text = topics[i];
        topicDropdown.add(option);
      }
    } else if (course === "tee") {
      const topics = ["TBJEE", "TITLEE", "TCEALET", "DEEET"];
      for (let i = 0; i < topics.length; i++) {
        const option = document.createElement("option");
        option.text = topics[i];
        topicDropdown.add(option);
      }
    } else if (course === "b_eng") {
      const topics = ["School Class", "Board CBSE", "Board TBSE", "Degree Engineering", "Diploma Engineering"];
      for (let i = 0; i < topics.length; i++) {
        const option = document.createElement("option");
        option.text = topics[i];
        topicDropdown.add(option);
      }
    } else if (course === "sc") {
      const topics = ["Auto-CAD(2D & 3D)", "Creo-CAD", "C / C++ Programming", "OOPS", "MATLAB"];
      for (let i = 0; i < topics.length; i++) {
        const option = document.createElement("option");
        option.text = topics[i];
        topicDropdown.add(option);
      }
    }
}

</script>

<?php

	if(isset($_GET["err"])){
		$stat = $_GET["err"];
		if($stat == 1){
			echo "<script>alert('Saved successfully');</script>";
		} else if($stat == 0){
			echo "<script>alert('Saving failed.');</script>";
		} else if($stat == 2){
			echo "<script>alert('Validation failed.');</script>";
		} else if($stat == 101){
			echo "<script>alert('file exists.');</script>";
		}  else if($stat == 102){
			echo "<script>alert('Select a proper image file.');</script>";
		}  else if($stat == 103){
			echo "<script>alert('file size should be max 500kb.');</script>";
		} else if($stat == 104){
			echo "<script>alert('Some error occured during file upload.');</script>";
		} 
	}
?>

</body>
</html>

