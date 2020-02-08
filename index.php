<?php 

	//include header file
	include ('include/header.php');

?>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Dhaka" label="&raquo;Dhaka Division" label="&raquo;"></optgroup>
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
	<option value="Sunamganj" >Sunamganj</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.

							We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>