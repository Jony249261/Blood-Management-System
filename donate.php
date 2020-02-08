

<?php 
  //include header file
  include ('include/header.php');
  include ('include/config.php');
  if(isset($_POST['submit'])){
  	if(isset($_POST['term'])===true){
  		if(isset($_POST['name']) && !empty($_POST['name'])){
  			
  			if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {
  				$name = $_POST['name'];
  				
  				if(isset($_POST['gender']) && !empty($_POST['gender'])){
  					$gender = $_POST['gender'];
  			
		  			if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
		  				$blood_group = $_POST['blood_group'];
			  			if(isset($_POST['date']) && !empty($_POST['date'])){
			  			$date = $_POST['date'];

				  			if(isset($_POST['email']) && !empty($_POST['email'])){
				  			$email = $_POST['email'];
				  			$email_check = mysqli_query($connection, "SELECT * FROM `donor` WHERE `email` = '$email';");

				  			
				  			if(mysqli_num_rows($email_check)==0){
				  				if(isset($_POST['contact']) && !empty($_POST['contact'])){
				  			$contact = $_POST['contact'];

				  			if(isset($_POST['city']) && !empty($_POST['city'])){
				  			$city = $_POST['city'];
				  			
				  			if(isset($_POST['password']) && !empty($_POST['password'])){
				  			if(isset($_POST['c_password']) && !empty($_POST['c_password'])){
				  			if(isset($_POST['password']) == ($_POST['c_password'])){
				  			
				  			$password = $_POST['password'];
				  		
				  			$result = mysqli_query($connection,"INSERT INTO `donor`( `name`, `gender`, `email`, `city`, `dob`, `contact_no`,`password`, `blood_group`) VALUES ('$name','$gender','$email','$city','$date','$contact','$password','$blood_group')");
				  			
				  			if($result){
				  				$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Insert Succesfully!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
header('location:signin.php');

				  			}else{
				  				$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data is not Insert!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				  			}
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Password not match</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
				  			
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please enter your c_password</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
				  			
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please enter your password</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please select your city</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
				  			
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please enter your contact no</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}

				  			}else{
				  				$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Email is already Exist!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				  			}
  			
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please enter your email address</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}

  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please select your date of Birth</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please select your blood group</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please fill the name field</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
  			}else{
  				$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please agreed with our terms & condition</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  			}
  		}else{
  			$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please fill the name field</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  		}
  		
  	}else{
  		     $termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please agreed with our terms & condition</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

  	}
  }





?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					
					<hr class="red-bar">
					<?php if(isset($termerror)) echo $termerror;?>
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name"  pattern="[A-Za-z/\s]+$" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)){echo $name;} ?>">
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" >
                <option value="">---Select Your Blood Group---</option>
                <?php if(isset($blood_group)){echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>';} ?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div><!--gender-->
				    <div class="form-group">
              <label for="date">Date of Birth</label><br>
              <input class="form-control" type="date" id="date" name="date" value="<?php if(isset($date)){echo $date;} ?>">
            </div><!--End form-group-->
				    <div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"value="<?php if(isset($email)){echo $email;} ?>">
					</div>
					<div class="form-group">
              <label for="contact">Contact No</label>
              <input type="text" name="contact" placeholder="01********" class="form-control"  pattern="^\d{11}$" id="contact" title="11 numeric characters only" maxlength="11" value="<?php if(isset($contact)){echo $contact ;} ?>">
            </div><!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" >
	<option>-- Select --</option>
	<?php if(isset($city)){echo '<option selected="" value="'.$city.'">'.$city.'</option>';} ?>
	     <optgroup title="Dhaka" label="&raquo;Dhaka Division" label="&raquo;"></optgroup>
	<option value="Ghorashal" >Ghorashal</option>
	<option value="Monohardi" >Monohardi</option>
	<option value="Shibpur" >Shibpur</option>
	<option value="Mirpur" >Mirpur</option>
	<option value="Raipura" >Raipura</option>
	<option value="Kotli" >Kotli</option>
	<option value="Mirpur" >Mirpur</option>
	<option value="Mirzapur" >Mirzapur</option>
	<option value="Dhanbari" >Dhanbari</option>
	<option value="Madhupur" >Madhupur</option>
	<option value="Gopalpur" >Gopalpur</option>
	<option value="Aricha" >Aricha</option>
	     <optgroup title="Rajshahi" label="&raquo;Rajshahi Division" label="&raquo;"></optgroup>
	<option value="Bogra" >Bogra</option>
	<option value="Naogaon" >Naogaon</option>
	<option value="Pabna" >Pabna</option>
	<option value="Natore" >Natore</option>
	<option value="Nawabganj" >Nawabganj </option>
	<option value="Shahjadpur" >Shahjadpur</option>
	      <optgroup title="Khulna" label="&raquo;Khulna Division" label="&raquo;"></optgroup>
	<option value="Bagherhat" >Bagherhat</option>
	<option value="Chuadanga" >Chuadanga</option>
	<option value="Jhenaidah" >Jhenaidah</option>
	<option value="Magura" >Magura</option>
	<option value="Darshana" >Darshana</option>
	<option value="Meherpur" >Meherpur</option>
	    <optgroup title="Mymensingh" label="&raquo;Mymensingh Division" label="&raquo;"></optgroup>
	<option value="Shambhuganj" >Shambhuganj</option>
	<option value="Phulpur" >Phulpur</option>
	<option value="Muktagachha" >Muktagachha</option>
	<option value="Bhaluka" >Bhaluka</option>
	<option value="Gouripur" >Gouripur</option>
	<option value="Sherpur" >Sherpur</option>
	     <optgroup title="Rangpur" label="&raquo;Rangpur Division" label="&raquo;"></optgroup>
	<option value="Dinajpur" >Dinajpur</option>
	<option value="Gaibandha" >Gaibandha</option>
	<option value="Kurigram" >Kurigram</option>
	<option value="Lalmonirhat" >Lalmonirhat</option>
	<option value="Nilphamari" >Nilphamari</option>
	<option value="Panchagarh" >Panchagarh</option>
	<option value="ThakurgaonThakurgaon" >SThakurgaonherpur</option>
	     <optgroup title="Barishal" label="&raquo;Barishal Division" label="&raquo;"></optgroup>
	<option value="Bhola" >Bhola</option>
	<option value="Patuakhali" >Patuakhali</option>
	<option value="Pirojpur" >Pirojpur</option>
	<option value="Jhalokati" >Jhalokati</option>
	<option value="Barguna" >Barguna</option>
	<option value="Amtali" >Amtali</option>
	<option value="Bakerganj" >Bakerganj</option>
	<option value="Char Fasson" >Char Fasson</option>
	    <optgroup title="Chittagong" label="&raquo; Chittagong Division" label="&raquo;"></optgroup>
	<option value="Chhagalnaiya" >Chhagalnaiya</option>
	<option value="Daganbhuiyan" >Daganbhuiyan</option>
	<option value="Parshuram" >Parshuram</option>
	<option value="Sonagazi" >Sonagazi</option>
	<option value="Bandarban" >Bandarban</option>
	<option value="Khagrachhari" >Khagrachhari</option>
	<option value="Rangamati" >Rangamati</option>
	<option value="Rangunia" >Rangunia</option>
	      <optgroup title="Sylhet" label="&raquo; Sylhet Division" label="&raquo;"></optgroup>
	<option value="Golapganj" >Golapganj</option>
	<option value="Habiganj" >Habiganj</option>
	<option value="Maulvibazar" >Maulvibazar</option>
	<option value="Sreemangal" >Sreemangal</option>
	<option value="Beanibazar" >Beanibazar</option>
	<option value="Barlekha" >Barlekha</option>
	<option value="Sunamganj" >Sunamganj</option>
</select>
            </div><!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control"  pattern=".{6,}"value="<?php if(isset($password)){echo $password;} ?>">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="c_password">Confirm Password</label>
              <input type="password" name="c_password" id="c_password" placeholder="Confirm Password" class="form-control"  pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" name="term" value="true"  style="margin-left:10px;" checked="">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>