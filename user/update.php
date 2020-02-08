<?php 
	
	include 'include/header.php';
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
	include 'include/sidebar.php';
$user_id = $_SESSION['user_id'];
	$sql = "SELECT * FROM `donor` WHERE id = '$user_id'";
		$result = mysqli_query($connection,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)) {
				$name = $row['name'];
				$blood_group = $row['blood_group'];
				$gender = $row['gender'];
				$date = $row['dob'];
				$save_life_date = $row['save_life_date'];
				$email = $row['email'];
				$contact_no = $row['contact_no'];
				$city = $row['city'];
			}
		}


		if(isset($_POST['submit'])){
			$user_id = $_SESSION['user_id'];
				$name = $_POST['name'];
  					$gender = $_POST['gender'];
		  				$blood_group = $_POST['blood_group'];
			  			$date = $_POST['date'];
				  			$email = $_POST['email'];
				  			$contact_no = $_POST['contact_no'];
				  			$city = $_POST['city'];
				  				$save_life_date = $_POST['save_life_date'];
				  				$result = mysqli_query($connection,"UPDATE `donor` SET `name`=`$name`,`gender`=`$gender`,`blood_group`=`$blood_group`,`email`=`$email`,`city`=`$city`,`dob`=`$date`,`save_life_date`=`$save_life_date`,`contact`=`$contact_no` WHERE `email` = `$email`");
				  				if($result){
				  					$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data insert successfully</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				  				}else{
				  					$termerror = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please try again</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				  				}
		}

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
<?php if(isset($termerror)) echo $termerror;?>

						<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name"  pattern="[A-Za-z/\s]+$" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)){echo $name;} ?>">
					</div><!--full name-->
					<div class="form-group">
              <label for="blood_group">Blood Group</label><br>
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
				              		Male<input type="radio" name="gender" id="gender" value="<?php if(isset($gender)){echo $gender;} ?>" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div><!--gender-->
				    <div class="form-group">
              <label for="date">Date of Birth</label><br>
              <input class="form-control" type="date" id="date" name="date" value="<?php if(isset($date)){echo $date;} ?>">
            </div><!--End form-group-->

			<div class="form-group">
              <label for="date">Save Life Date</label><br>
              <input class="form-control" type="date" id="date" name="save_life_date" value="<?php if(isset($save_life_date)){echo $save_life_date;} ?>">
            </div><!--End form-group-->

				    <div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"value="<?php if(isset($email)){echo $email;} ?>">
					</div>
					<div class="form-group">
              <label for="contact">Contact No</label>
              <input type="text" name="contact_no" placeholder="01********" class="form-control"  pattern="^\d{11}$" id="contact" title="11 numeric characters only" maxlength="11" value="<?php if(isset($contact_no)){echo $contact_no ;} ?>">
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
						<button id="submit" name="submit" type="submit" class="btn btn-block btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div><!--End form-group-->
				</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
 <?php
	}else{
		header('location:../index.php');
	}
	
include 'include/footer.php'; 
?>