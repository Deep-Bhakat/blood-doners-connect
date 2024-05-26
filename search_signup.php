<?php
require_once("db.php");
$donor_id=$_GET['id'];

?>


<?php

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$blood=$_POST['blood'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$country=$_POST['country'];
$postal_code=$_POST['postal_code'];
$reason=$_POST['reason'];
 $abcd=$donor_id;
 $dnor=$_POST['donor_id'];

if(isset($_POST['submit2']))
{
echo $sql3="INSERT INTO donee(name,address,email,blood_grp,phone,state,city,country,postal_code,reason,donor_id,status) values ('$name','$address','$email','$blood','$phone','$state','$city','$country','$postal_code','$reason','$dnor','1') ";

$result3=mysqli_query($con,$sql3);
if($result3){
  $message2="New Donee Registered Successfully";

  echo "<script type='text/javascript'>alert('$message2');</script>";

echo '<script>window.location.href = "index.html";</script>';


}
}

?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODvkSszbBaGLp-ZXPSRU3208OS6NrNdU&callback=loadMap"
	></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="googlemap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="signup_style.css">
	<title>Become A Donor</title>

	<script>
	$( function() {
		$( "#datepicker2" ).datepicker();
	} );
	</script>
</head>

<body>
	<header>
		<!-- header tag instead of regular div for SEO advantage -->
		<div id="logo" onClick="location.href='index.html'"><img src="images/logo.svg"></div>
		<div id="titleText">
			<h1>BLOOD DONORS CONNECT</h1>
		</div>
		<div id="admin">
			<!--<?xml version="1.0" encoding="utf-8"?>-->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
			<g>
				<path
				d="M516.7,923.4l-14.5,8.4c-9.6,5.6-20.2,8.2-30.6,8.2c-21.1,0-41.7-11-53.1-30.6l-30.7-53c-8.1-14.1-10.4-30.8-6.1-46.5c4.2-15.7,14.5-29.1,28.5-37.2l13.8-8c-3.2-16.6-4.8-33.4-4.8-50.3c0-16.8,1.6-33.6,4.8-50.2l-13.9-8c-29.3-16.9-39.3-54.4-22.4-83.7l30.6-53c8.2-14.1,21.6-24.4,37.2-28.6c5.2-1.4,10.5-2.1,15.9-2.1c10.7,0,21.3,2.8,30.6,8.2l14.5,8.3c14-11.9,29.3-22.1,45.3-31c-23.8-11.6-50.9-20.8-82.1-26.8v-30.3c72.2-34.5,122.5-107.6,122.5-192.9C602.3,106,506.3,10,387.9,10c-118.4,0-214.4,96-214.4,214.4c0,85.4,50.3,158.5,122.5,192.9v30.3C51.9,494.4,51,730.8,51,867.5c0,106.8,331.8,138.6,529.6,95.5C557.8,952.5,536,939.8,516.7,923.4z" />
				<path
				d="M893.7,793.7l55.2,31.8l-30.6,53.1l-55.8-32.2c-33.2,42.1-81.4,71.1-137,79.1l0.1,64.4l-61.3,0.1v-64.4c-55.5-8-103.7-37-136.9-79.1l-55.8,32.2l-30.7-53l55.3-31.9c-9.9-24.6-15.6-51.3-15.6-79.4c0-28.1,5.8-54.8,15.6-79.3l-55.3-31.9l30.6-53l55.8,32.2c33.3-42.1,81.5-71.2,137-79.2v-64.4h61.3v64.4c55.5,8,103.7,37,137,79.1l55.7-32.2l30.7,53.1L893.7,635c9.9,24.6,15.6,51.3,15.6,79.4S903.6,769.1,893.7,793.7z M695,590.8c-68.2,0-123.5,55.3-123.5,123.5c0,68.2,55.2,123.5,123.5,123.5c68.2,0,123.5-55.3,123.5-123.5C818.5,646.1,763.2,590.8,695,590.8z" />
			</g>
		</svg>
		<a href="admin_login.php">Admin</a>
	</div>
</header>
<div id="content" class="container-fluid">
	<form action="search_signup.php" method="POST">
		<div class="row">
			<div class="col-lg-3 col-md-2 align-self-start"></div>
			<div id="signup" class="col-lg-6 col-md-8 align-self-center">
				<div id="formcontent">
					<h1 class="text-center font-weight-bold">REGISTER</h1>
					<hr class="mx-auto">
					<br>
					<label>Name</label>
					<input type="text" class="form-control" name="name" id="name" autocomplete="off"
					placeholder="Enter Your Name">
					<br>
					<label>Phone number (without country code)</label>
					<input type="phone" class="form-control" name="phone" id="phone" autocomplete="off"
					placeholder="Enter Your Phone Number" maxlength="10">
					<br>
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email" autocomplete="off"
					placeholder="Enter Your Email">
					<br>
					<label>Blood Group</label>
					<select id="blood" name="blood" class="form-control">
						<option value="notSelected" selected="selected">Select your blood group</option>
						<option value="A+">A+</option>
						<option value="O+">O+</option>
						<option value="B+">B+</option>
						<option value="AB+">AB+</option>
						<option value="A-">A-</option>
						<option value="O-">O-</option>
						<option value="B-">B-</option>
						<option value="AB-">AB-</option>
					</select>
					<br>


					<label>Address</label>
					<textarea name="address" class="form-control" id="address"
					placeholder="Enter Your Address"></textarea>

					<br>
					<label>Country</label>
					<select id="country" name="country" class="form-control">
						<option value="notSelected" selected="selected">Choose Your Country</option>
						<option value="India">India</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Nepal">Nepal</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="USA">United States Of America</option>
						<option value="Australia">Australia</option>
						<option value="UK">United Kingdom</option>
					</select>
					<br>

					<label>State</label>
					<select id="state" name="state" class="form-control">
						<option value="notSelected" selected="selected">Select Your State</option>
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
						<option value="Daman and Diu">Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Orissa">Orissa</option>
						<option value="Pondicherry">Pondicherry</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttaranchal">Uttaranchal</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>
					</select>
					<br>
					<label>City</label>
					<select id="city" name="city" class="form-control">
						<option value="" selected="selected">Select Your City</option>
						<option value="Adilabad">Adilabad</option>
						<option value="Agra">Agra</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Ahmednagar">Ahmednagar</option>
						<option value="Aizawl">Aizawl</option>
						<option value="Ajitgarh (Mohali)">Ajitgarh (Mohali)</option>
						<option value="Ajmer">Ajmer</option>
						<option value="Akola">Akola</option>
						<option value="Alappuzha">Alappuzha</option>
						<option value="Aligarh">Aligarh</option>
						<option value="Alirajpur">Alirajpur</option>
						<option value="Allahabad">Allahabad</option>
						<option value="Almora">Almora</option>
						<option value="Alwar">Alwar</option>
						<option value="Ambala">Ambala</option>
						<option value="Ambedkar Nagar">Ambedkar Nagar</option>
						<option value="Amravati">Amravati</option>
						<option value="Amreli district">Amreli district</option>
						<option value="Amritsar">Amritsar</option>
						<option value="Anand">Anand</option>
						<option value="Anantapur">Anantapur</option>
						<option value="Anantnag">Anantnag</option>
						<option value="Angul">Angul</option>
						<option value="Anjaw">Anjaw</option>
						<option value="Anuppur">Anuppur</option>
						<option value="Araria">Araria</option>
						<option value="Ariyalur">Ariyalur</option>
						<option value="Arwal">Arwal</option>
						<option value="Ashok Nagar">Ashok Nagar</option>
						<option value="Auraiya">Auraiya</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Azamgarh">Azamgarh</option>
						<option value="Badgam">Badgam</option>
						<option value="Bagalkot">Bagalkot</option>
						<option value="Bageshwar">Bageshwar</option>
						<option value="Bagpat">Bagpat</option>
						<option value="Bahraich">Bahraich</option>
						<option value="Baksa">Baksa</option>
						<option value="Balaghat">Balaghat</option>
						<option value="Balangir">Balangir</option>
						<option value="Balasore">Balasore</option>
						<option value="Ballia">Ballia</option>
						<option value="Balrampur">Balrampur</option>
						<option value="Banaskantha">Banaskantha</option>
						<option value="Banda">Banda</option>
						<option value="Bandipora">Bandipora</option>
						<option value="Bangalore Rural">Bangalore Rural</option>
						<option value="Bangalore Urban">Bangalore Urban</option>
						<option value="Banka">Banka</option>
						<option value="Bankura">Bankura</option>
						<option value="Banswara">Banswara</option>
						<option value="Barabanki">Barabanki</option>
						<option value="Baramulla">Baramulla</option>
						<option value="Baran">Baran</option>
						<option value="Bardhaman">Bardhaman</option>
						<option value="Bareilly">Bareilly</option>
						<option value="Bargarh (Baragarh)">Bargarh (Baragarh)</option>
						<option value="Barmer">Barmer</option>
						<option value="Barnala">Barnala</option>
						<option value="Barpeta">Barpeta</option>
						<option value="Barwani">Barwani</option>
						<option value="Bastar">Bastar</option>
						<option value="Basti">Basti</option>
						<option value="Bathinda">Bathinda</option>
						<option value="Beed">Beed</option>
						<option value="Begusarai">Begusarai</option>
						<option value="Belgaum">Belgaum</option>
						<option value="Bellary">Bellary</option>
						<option value="Betul">Betul</option>
						<option value="Bhadrak">Bhadrak</option>
						<option value="Bhagalpur">Bhagalpur</option>
						<option value="Bhandara">Bhandara</option>
						<option value="Bharatpur">Bharatpur</option>
						<option value="Bharuch">Bharuch</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Bhilwara">Bhilwara</option>
						<option value="Bhind">Bhind</option>
						<option value="Bhiwani">Bhiwani</option>
						<option value="Bhojpur">Bhojpur</option>
						<option value="Bhopal">Bhopal</option>
						<option value="Bidar">Bidar</option>
						<option value="Bijapur">Bijapur</option>
						<option value="Bijapur">Bijapur</option>
						<option value="Bijnor">Bijnor</option>
						<option value="Bikaner">Bikaner</option>
						<option value="Bilaspur">Bilaspur</option>
						<option value="Bilaspur">Bilaspur</option>
						<option value="Birbhum">Birbhum</option>
						<option value="Bishnupur">Bishnupur</option>
						<option value="Bokaro">Bokaro</option>
						<option value="Bongaigaon">Bongaigaon</option>
						<option value="Boudh (Bauda)">Boudh (Bauda)</option>
						<option value="Budaun">Budaun</option>
						<option value="Bulandshahr">Bulandshahr</option>
						<option value="Buldhana">Buldhana</option>
						<option value="Bundi">Bundi</option>
						<option value="Burhanpur">Burhanpur</option>
						<option value="Buxar">Buxar</option>
						<option value="Cachar">Cachar</option>
						<option value="Central Delhi">Central Delhi</option>
						<option value="Chamarajnagar">Chamarajnagar</option>
						<option value="Chamba">Chamba</option>
						<option value="Chamoli">Chamoli</option>
						<option value="Champawat">Champawat</option>
						<option value="Champhai">Champhai</option>
						<option value="Chandauli">Chandauli</option>
						<option value="Chandel">Chandel</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chandrapur">Chandrapur</option>
						<option value="Changlang">Changlang</option>
						<option value="Chatra">Chatra</option>
						<option value="Chennai">Chennai</option>
						<option value="Chhatarpur">Chhatarpur</option>
						<option value="Chhatrapati Shahuji Maharaj Nagar">Chhatrapati Shahuji Maharaj Nagar</option>
						<option value="Chhindwara">Chhindwara</option>
						<option value="Chikkaballapur">Chikkaballapur</option>
						<option value="Chikkamagaluru">Chikkamagaluru</option>
						<option value="Chirang">Chirang</option>
						<option value="Chitradurga">Chitradurga</option>
						<option value="Chitrakoot">Chitrakoot</option>
						<option value="Chittoor">Chittoor</option>
						<option value="Chittorgarh">Chittorgarh</option>
						<option value="Churachandpur">Churachandpur</option>
						<option value="Churu">Churu</option>
						<option value="Coimbatore">Coimbatore</option>
						<option value="Cooch Behar">Cooch Behar</option>
						<option value="Cuddalore">Cuddalore</option>
						<option value="Cuttack">Cuttack</option>
						<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
						<option value="Dahod">Dahod</option>
						<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
						<option value="Dakshina Kannada">Dakshina Kannada</option>
						<option value="Daman">Daman</option>
						<option value="Damoh">Damoh</option>
						<option value="Dantewada">Dantewada</option>
						<option value="Darbhanga">Darbhanga</option>
						<option value="Darjeeling">Darjeeling</option>
						<option value="Darrang">Darrang</option>
						<option value="Datia">Datia</option>
						<option value="Dausa">Dausa</option>
						<option value="Davanagere">Davanagere</option>
						<option value="Debagarh (Deogarh)">Debagarh (Deogarh)</option>
						<option value="Dehradun">Dehradun</option>
						<option value="Deoghar">Deoghar</option>
						<option value="Deoria">Deoria</option>
						<option value="Dewas">Dewas</option>
						<option value="Dhalai">Dhalai</option>
						<option value="Dhamtari">Dhamtari</option>
						<option value="Dhanbad">Dhanbad</option>
						<option value="Dhar">Dhar</option>
						<option value="Dharmapuri">Dharmapuri</option>
						<option value="Dharwad">Dharwad</option>
						<option value="Dhemaji">Dhemaji</option>
						<option value="Dhenkanal">Dhenkanal</option>
						<option value="Dholpur">Dholpur</option>
						<option value="Dhubri">Dhubri</option>
						<option value="Dhule">Dhule</option>
						<option value="Dibang Valley">Dibang Valley</option>
						<option value="Dibrugarh">Dibrugarh</option>
						<option value="Dima Hasao">Dima Hasao</option>
						<option value="Dimapur">Dimapur</option>
						<option value="Dindigul">Dindigul</option>
						<option value="Dindori">Dindori</option>
						<option value="Diu">Diu</option>
						<option value="Doda">Doda</option>
						<option value="Dumka">Dumka</option>
						<option value="Dungapur">Dungapur</option>
						<option value="Durg">Durg</option>
						<option value="East Champaran">East Champaran</option>
						<option value="East Delhi">East Delhi</option>
						<option value="East Garo Hills">East Garo Hills</option>
						<option value="East Khasi Hills">East Khasi Hills</option>
						<option value="East Siang">East Siang</option>
						<option value="East Sikkim">East Sikkim</option>
						<option value="East Singhbhum">East Singhbhum</option>
						<option value="Eluru">Eluru</option>
						<option value="Ernakulam">Ernakulam</option>
						<option value="Erode">Erode</option>
						<option value="Etah">Etah</option>
						<option value="Etawah">Etawah</option>
						<option value="Faizabad">Faizabad</option>
						<option value="Faridabad">Faridabad</option>
						<option value="Faridkot">Faridkot</option>
						<option value="Farrukhabad">Farrukhabad</option>
						<option value="Fatehabad">Fatehabad</option>
						<option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
						<option value="Fatehpur">Fatehpur</option>
						<option value="Fazilka">Fazilka</option>
						<option value="Firozabad">Firozabad</option>
						<option value="Firozpur">Firozpur</option>
						<option value="Gadag">Gadag</option>
						<option value="Gadchiroli">Gadchiroli</option>
						<option value="Gajapati">Gajapati</option>
						<option value="Ganderbal">Ganderbal</option>
						<option value="Gandhinagar">Gandhinagar</option>
						<option value="Ganganagar">Ganganagar</option>
						<option value="Ganjam">Ganjam</option>
						<option value="Garhwa">Garhwa</option>
						<option value="Gautam Buddh Nagar">Gautam Buddh Nagar</option>
						<option value="Gaya">Gaya</option>
						<option value="Ghaziabad">Ghaziabad</option>
						<option value="Ghazipur">Ghazipur</option>
						<option value="Giridih">Giridih</option>
						<option value="Goalpara">Goalpara</option>
						<option value="Godda">Godda</option>
						<option value="Golaghat">Golaghat</option>
						<option value="Gonda">Gonda</option>
						<option value="Gondia">Gondia</option>
						<option value="Gopalganj">Gopalganj</option>
						<option value="Gorakhpur">Gorakhpur</option>
						<option value="Gulbarga">Gulbarga</option>
						<option value="Gumla">Gumla</option>
						<option value="Guna">Guna</option>
						<option value="Guntur">Guntur</option>
						<option value="Gurdaspur">Gurdaspur</option>
						<option value="Gurgaon">Gurgaon</option>
						<option value="Gwalior">Gwalior</option>
						<option value="Hailakandi">Hailakandi</option>
						<option value="Hamirpur">Hamirpur</option>
						<option value="Hamirpur">Hamirpur</option>
						<option value="Hanumangarh">Hanumangarh</option>
						<option value="Harda">Harda</option>
						<option value="Hardoi">Hardoi</option>
						<option value="Haridwar">Haridwar</option>
						<option value="Hassan">Hassan</option>
						<option value="Haveri district">Haveri district</option>
						<option value="Hazaribag">Hazaribag</option>
						<option value="Hingoli">Hingoli</option>
						<option value="Hissar">Hissar</option>
						<option value="Hooghly">Hooghly</option>
						<option value="Hoshangabad">Hoshangabad</option>
						<option value="Hoshiarpur">Hoshiarpur</option>
						<option value="Howrah">Howrah</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Idukki">Idukki</option>
						<option value="Imphal East">Imphal East</option>
						<option value="Imphal West">Imphal West</option>
						<option value="Indore">Indore</option>
						<option value="Jabalpur">Jabalpur</option>
						<option value="Jagatsinghpur">Jagatsinghpur</option>
						<option value="Jaintia Hills">Jaintia Hills</option>
						<option value="Jaipur">Jaipur</option>
						<option value="Jaisalmer">Jaisalmer</option>
						<option value="Jajpur">Jajpur</option>
						<option value="Jalandhar">Jalandhar</option>
						<option value="Jalaun">Jalaun</option>
						<option value="Jalgaon">Jalgaon</option>
						<option value="Jalna">Jalna</option>
						<option value="Jalore">Jalore</option>
						<option value="Jalpaiguri">Jalpaiguri</option>
						<option value="Jammu">Jammu</option>
						<option value="Jamnagar">Jamnagar</option>
						<option value="Jamtara">Jamtara</option>
						<option value="Jamui">Jamui</option>
						<option value="Janjgir-Champa">Janjgir-Champa</option>
						<option value="Jashpur">Jashpur</option>
						<option value="Jaunpur district">Jaunpur district</option>
						<option value="Jehanabad">Jehanabad</option>
						<option value="Jhabua">Jhabua</option>
						<option value="Jhajjar">Jhajjar</option>
						<option value="Jhalawar">Jhalawar</option>
						<option value="Jhansi">Jhansi</option>
						<option value="Jharsuguda">Jharsuguda</option>
						<option value="Jhunjhunu">Jhunjhunu</option>
						<option value="Jind">Jind</option>
						<option value="Jodhpur">Jodhpur</option>
						<option value="Jorhat">Jorhat</option>
						<option value="Junagadh">Junagadh</option>
						<option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
						<option value="Kabirdham (formerly Kawardha)">Kabirdham (formerly Kawardha)</option>
						<option value="Kadapa">Kadapa</option>
						<option value="Kaimur">Kaimur</option>
						<option value="Kaithal">Kaithal</option>
						<option value="Kakinada">Kakinada</option>
						<option value="Kalahandi">Kalahandi</option>
						<option value="Kamrup">Kamrup</option>
						<option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
						<option value="Kanchipuram">Kanchipuram</option>
						<option value="Kandhamal">Kandhamal</option>
						<option value="Kangra">Kangra</option>
						<option value="Kanker">Kanker</option>
						<option value="Kannauj">Kannauj</option>
						<option value="Kannur">Kannur</option>
						<option value="Kanpur">Kanpur</option>
						<option value="Kanshi Ram Nagar">Kanshi Ram Nagar</option>
						<option value="Kanyakumari">Kanyakumari</option>
						<option value="Kapurthala">Kapurthala</option>
						<option value="Karaikal">Karaikal</option>
						<option value="Karauli">Karauli</option>
						<option value="Karbi Anglong">Karbi Anglong</option>
						<option value="Kargil">Kargil</option>
						<option value="Karimganj">Karimganj</option>
						<option value="Karimnagar">Karimnagar</option>
						<option value="Karnal">Karnal</option>
						<option value="Karur">Karur</option>
						<option value="Kasaragod">Kasaragod</option>
						<option value="Kathua">Kathua</option>
						<option value="Katihar">Katihar</option>
						<option value="Katni">Katni</option>
						<option value="Kaushambi">Kaushambi</option>
						<option value="Kendrapara">Kendrapara</option>
						<option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option>
						<option value="Khagaria">Khagaria</option>
						<option value="Khammam">Khammam</option>
						<option value="Khandwa (East Nimar)">Khandwa (East Nimar)</option>
						<option value="Khargone (West Nimar)">Khargone (West Nimar)</option>
						<option value="Kheda">Kheda</option>
						<option value="Khordha">Khordha</option>
						<option value="Khowai">Khowai</option>
						<option value="Khunti">Khunti</option>
						<option value="Kinnaur">Kinnaur</option>
						<option value="Kishanganj">Kishanganj</option>
						<option value="Kishtwar">Kishtwar</option>
						<option value="Kodagu">Kodagu</option>
						<option value="Koderma">Koderma</option>
						<option value="Kohima">Kohima</option>
						<option value="Kokrajhar">Kokrajhar</option>
						<option value="Kolar">Kolar</option>
						<option value="Kolasib">Kolasib</option>
						<option value="Kolhapur">Kolhapur</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Kollam">Kollam</option>
						<option value="Koppal">Koppal</option>
						<option value="Koraput">Koraput</option>
						<option value="Korba">Korba</option>
						<option value="Koriya">Koriya</option>
						<option value="Kota">Kota</option>
						<option value="Kottayam">Kottayam</option>
						<option value="Kozhikode">Kozhikode</option>
						<option value="Krishna">Krishna</option>
						<option value="Kulgam">Kulgam</option>
						<option value="Kullu">Kullu</option>
						<option value="Kupwara">Kupwara</option>
						<option value="Kurnool">Kurnool</option>
						<option value="Kurukshetra">Kurukshetra</option>
						<option value="Kurung Kumey">Kurung Kumey</option>
						<option value="Kushinagar">Kushinagar</option>
						<option value="Kutch">Kutch</option>
						<option value="Lahaul and Spiti">Lahaul and Spiti</option>
						<option value="Lakhimpur">Lakhimpur</option>
						<option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
						<option value="Lakhisarai">Lakhisarai</option>
						<option value="Lalitpur">Lalitpur</option>
						<option value="Latehar">Latehar</option>
						<option value="Latur">Latur</option>
						<option value="Lawngtlai">Lawngtlai</option>
						<option value="Leh">Leh</option>
						<option value="Lohardaga">Lohardaga</option>
						<option value="Lohit">Lohit</option>
						<option value="Lower Dibang Valley">Lower Dibang Valley</option>
						<option value="Lower Subansiri">Lower Subansiri</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Ludhiana">Ludhiana</option>
						<option value="Lunglei">Lunglei</option>
						<option value="Madhepura">Madhepura</option>
						<option value="Madhubani">Madhubani</option>
						<option value="Madurai">Madurai</option>
						<option value="Mahamaya Nagar">Mahamaya Nagar</option>
						<option value="Maharajganj">Maharajganj</option>
						<option value="Mahasamund">Mahasamund</option>
						<option value="Mahbubnagar">Mahbubnagar</option>
						<option value="Mahe">Mahe</option>
						<option value="Mahendragarh">Mahendragarh</option>
						<option value="Mahoba">Mahoba</option>
						<option value="Mainpuri">Mainpuri</option>
						<option value="Malappuram">Malappuram</option>
						<option value="Maldah">Maldah</option>
						<option value="Malkangiri">Malkangiri</option>
						<option value="Mamit">Mamit</option>
						<option value="Mandi">Mandi</option>
						<option value="Mandla">Mandla</option>
						<option value="Mandsaur">Mandsaur</option>
						<option value="Mandya">Mandya</option>
						<option value="Mansa">Mansa</option>
						<option value="Marigaon">Marigaon</option>
						<option value="Mathura">Mathura</option>
						<option value="Mau">Mau</option>
						<option value="Mayurbhanj">Mayurbhanj</option>
						<option value="Medak">Medak</option>
						<option value="Meerut">Meerut</option>
						<option value="Mehsana">Mehsana</option>
						<option value="Mewat">Mewat</option>
						<option value="Mirzapur">Mirzapur</option>
						<option value="Moga">Moga</option>
						<option value="Mokokchung">Mokokchung</option>
						<option value="Mon">Mon</option>
						<option value="Moradabad">Moradabad</option>
						<option value="Morena">Morena</option>
						<option value="Mumbai City">Mumbai City</option>
						<option value="Mumbai suburban">Mumbai suburban</option>
						<option value="Munger">Munger</option>
						<option value="Murshidabad">Murshidabad</option>
						<option value="Muzaffarnagar">Muzaffarnagar</option>
						<option value="Muzaffarpur">Muzaffarpur</option>
						<option value="Mysore">Mysore</option>
						<option value="Nabarangpur">Nabarangpur</option>
						<option value="Nadia">Nadia</option>
						<option value="Nagaon">Nagaon</option>
						<option value="Nagapattinam">Nagapattinam</option>
						<option value="Nagaur">Nagaur</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Nainital">Nainital</option>
						<option value="Nalanda">Nalanda</option>
						<option value="Nalbari">Nalbari</option>
						<option value="Nalgonda">Nalgonda</option>
						<option value="Namakkal">Namakkal</option>
						<option value="Nanded">Nanded</option>
						<option value="Nandurbar">Nandurbar</option>
						<option value="Narayanpur">Narayanpur</option>
						<option value="Narmada">Narmada</option>
						<option value="Narsinghpur">Narsinghpur</option>
						<option value="Nashik">Nashik</option>
						<option value="Navsari">Navsari</option>
						<option value="Nawada">Nawada</option>
						<option value="Nawanshahr">Nawanshahr</option>
						<option value="Nayagarh">Nayagarh</option>
						<option value="Neemuch">Neemuch</option>
						<option value="Nellore">Nellore</option>
						<option value="New Delhi">New Delhi</option>
						<option value="Nilgiris">Nilgiris</option>
						<option value="Nizamabad">Nizamabad</option>
						<option value="North 24 Parganas">North 24 Parganas</option>
						<option value="North Delhi">North Delhi</option>
						<option value="North East Delhi">North East Delhi</option>
						<option value="North Goa">North Goa</option>
						<option value="North Sikkim">North Sikkim</option>
						<option value="North Tripura">North Tripura</option>
						<option value="North West Delhi">North West Delhi</option>
						<option value="Nuapada">Nuapada</option>
						<option value="Ongole">Ongole</option>
						<option value="Osmanabad">Osmanabad</option>
						<option value="Pakur">Pakur</option>
						<option value="Palakkad">Palakkad</option>
						<option value="Palamu">Palamu</option>
						<option value="Pali">Pali</option>
						<option value="Palwal">Palwal</option>
						<option value="Panchkula">Panchkula</option>
						<option value="Panchmahal">Panchmahal</option>
						<option value="Panchsheel Nagar district (Hapur)">Panchsheel Nagar district (Hapur)</option>
						<option value="Panipat">Panipat</option>
						<option value="Panna">Panna</option>
						<option value="Papum Pare">Papum Pare</option>
						<option value="Parbhani">Parbhani</option>
						<option value="Paschim Medinipur">Paschim Medinipur</option>
						<option value="Patan">Patan</option>
						<option value="Pathanamthitta">Pathanamthitta</option>
						<option value="Pathankot">Pathankot</option>
						<option value="Patiala">Patiala</option>
						<option value="Patna">Patna</option>
						<option value="Pauri Garhwal">Pauri Garhwal</option>
						<option value="Perambalur">Perambalur</option>
						<option value="Phek">Phek</option>
						<option value="Pilibhit">Pilibhit</option>
						<option value="Pithoragarh">Pithoragarh</option>
						<option value="Pondicherry">Pondicherry</option>
						<option value="Poonch">Poonch</option>
						<option value="Porbandar">Porbandar</option>
						<option value="Pratapgarh">Pratapgarh</option>
						<option value="Pratapgarh">Pratapgarh</option>
						<option value="Pudukkottai">Pudukkottai</option>
						<option value="Pulwama">Pulwama</option>
						<option value="Pune">Pune</option>
						<option value="Purba Medinipur">Purba Medinipur</option>
						<option value="Puri">Puri</option>
						<option value="Purnia">Purnia</option>
						<option value="Purulia">Purulia</option>
						<option value="Raebareli">Raebareli</option>
						<option value="Raichur">Raichur</option>
						<option value="Raigad">Raigad</option>
						<option value="Raigarh">Raigarh</option>
						<option value="Raipur">Raipur</option>
						<option value="Raisen">Raisen</option>
						<option value="Rajauri">Rajauri</option>
						<option value="Rajgarh">Rajgarh</option>
						<option value="Rajkot">Rajkot</option>
						<option value="Rajnandgaon">Rajnandgaon</option>
						<option value="Rajsamand">Rajsamand</option>
						<option value="Ramabai Nagar (Kanpur Dehat)">Ramabai Nagar (Kanpur Dehat)</option>
						<option value="Ramanagara">Ramanagara</option>
						<option value="Ramanathapuram">Ramanathapuram</option>
						<option value="Ramban">Ramban</option>
						<option value="Ramgarh">Ramgarh</option>
						<option value="Rampur">Rampur</option>
						<option value="Ranchi">Ranchi</option>
						<option value="Ratlam">Ratlam</option>
						<option value="Ratnagiri">Ratnagiri</option>
						<option value="Rayagada">Rayagada</option>
						<option value="Reasi">Reasi</option>
						<option value="Rewa">Rewa</option>
						<option value="Rewari">Rewari</option>
						<option value="Ri Bhoi">Ri Bhoi</option>
						<option value="Rohtak">Rohtak</option>
						<option value="Rohtas">Rohtas</option>
						<option value="Rudraprayag">Rudraprayag</option>
						<option value="Rupnagar">Rupnagar</option>
						<option value="Sabarkantha">Sabarkantha</option>
						<option value="Sagar">Sagar</option>
						<option value="Saharanpur">Saharanpur</option>
						<option value="Saharsa">Saharsa</option>
						<option value="Sahibganj">Sahibganj</option>
						<option value="Saiha">Saiha</option>
						<option value="Salem">Salem</option>
						<option value="Samastipur">Samastipur</option>
						<option value="Samba">Samba</option>
						<option value="Sambalpur">Sambalpur</option>
						<option value="Sangli">Sangli</option>
						<option value="Sangrur">Sangrur</option>
						<option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
						<option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
						<option value="Saran">Saran</option>
						<option value="Satara">Satara</option>
						<option value="Satna">Satna</option>
						<option value="Sawai Madhopur">Sawai Madhopur</option>
						<option value="Sehore">Sehore</option>
						<option value="Senapati">Senapati</option>
						<option value="Seoni">Seoni</option>
						<option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
						<option value="Serchhip">Serchhip</option>
						<option value="Shahdol">Shahdol</option>
						<option value="Shahjahanpur">Shahjahanpur</option>
						<option value="Shajapur">Shajapur</option>
						<option value="Shamli">Shamli</option>
						<option value="Sheikhpura">Sheikhpura</option>
						<option value="Sheohar">Sheohar</option>
						<option value="Sheopur">Sheopur</option>
						<option value="Shimla">Shimla</option>
						<option value="Shimoga">Shimoga</option>
						<option value="Shivpuri">Shivpuri</option>
						<option value="Shopian">Shopian</option>
						<option value="Shravasti">Shravasti</option>
						<option value="Sibsagar">Sibsagar</option>
						<option value="Siddharthnagar">Siddharthnagar</option>
						<option value="Sidhi">Sidhi</option>
						<option value="Sikar">Sikar</option>
						<option value="Simdega">Simdega</option>
						<option value="Sindhudurg">Sindhudurg</option>
						<option value="Singrauli">Singrauli</option>
						<option value="Sirmaur">Sirmaur</option>
						<option value="Sirohi">Sirohi</option>
						<option value="Sirsa">Sirsa</option>
						<option value="Sitamarhi">Sitamarhi</option>
						<option value="Sitapur">Sitapur</option>
						<option value="Sivaganga">Sivaganga</option>
						<option value="Siwan">Siwan</option>
						<option value="Solan">Solan</option>
						<option value="Solapur">Solapur</option>
						<option value="Sonbhadra">Sonbhadra</option>
						<option value="Sonipat">Sonipat</option>
						<option value="Sonitpur">Sonitpur</option>
						<option value="South 24 Parganas">South 24 Parganas</option>
						<option value="South Delhi">South Delhi</option>
						<option value="South Garo Hills">South Garo Hills</option>
						<option value="South Goa">South Goa</option>
						<option value="South Sikkim">South Sikkim</option>
						<option value="South Tripura">South Tripura</option>
						<option value="South West Delhi">South West Delhi</option>
						<option value="Sri Muktsar Sahib">Sri Muktsar Sahib</option>
						<option value="Srikakulam">Srikakulam</option>
						<option value="Srinagar">Srinagar</option>
						<option value="Subarnapur (Sonepur)">Subarnapur (Sonepur)</option>
						<option value="Sultanpur">Sultanpur</option>
						<option value="Sundergarh">Sundergarh</option>
						<option value="Supaul">Supaul</option>
						<option value="Surat">Surat</option>
						<option value="Surendranagar">Surendranagar</option>
						<option value="Surguja">Surguja</option>
						<option value="Tamenglong">Tamenglong</option>
						<option value="Tarn Taran">Tarn Taran</option>
						<option value="Tawang">Tawang</option>
						<option value="Tehri Garhwal">Tehri Garhwal</option>
						<option value="Thane">Thane</option>
						<option value="Thanjavur">Thanjavur</option>
						<option value="The Dangs">The Dangs</option>
						<option value="Theni">Theni</option>
						<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						<option value="Thoothukudi">Thoothukudi</option>
						<option value="Thoubal">Thoubal</option>
						<option value="Thrissur">Thrissur</option>
						<option value="Tikamgarh">Tikamgarh</option>
						<option value="Tinsukia">Tinsukia</option>
						<option value="Tirap">Tirap</option>
						<option value="Tiruchirappalli">Tiruchirappalli</option>
						<option value="Tirunelveli">Tirunelveli</option>
						<option value="Tirupur">Tirupur</option>
						<option value="Tiruvallur">Tiruvallur</option>
						<option value="Tiruvannamalai">Tiruvannamalai</option>
						<option value="Tiruvarur">Tiruvarur</option>
						<option value="Tonk">Tonk</option>
						<option value="Tuensang">Tuensang</option>
						<option value="Tumkur">Tumkur</option>
						<option value="Udaipur">Udaipur</option>
						<option value="Udalguri">Udalguri</option>
						<option value="Udham Singh Nagar">Udham Singh Nagar</option>
						<option value="Udhampur">Udhampur</option>
						<option value="Udupi">Udupi</option>
						<option value="Ujjain">Ujjain</option>
						<option value="Ukhrul">Ukhrul</option>
						<option value="Umaria">Umaria</option>
						<option value="Una">Una</option>
						<option value="Unnao">Unnao</option>
						<option value="Upper Siang">Upper Siang</option>
						<option value="Upper Subansiri">Upper Subansiri</option>
						<option value="Uttar Dinajpur">Uttar Dinajpur</option>
						<option value="Uttara Kannada">Uttara Kannada</option>
						<option value="Uttarkashi">Uttarkashi</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Vaishali">Vaishali</option>
						<option value="Valsad">Valsad</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Vellore">Vellore</option>
						<option value="Vidisha">Vidisha</option>
						<option value="Viluppuram">Viluppuram</option>
						<option value="Virudhunagar">Virudhunagar</option>
						<option value="Visakhapatnam">Visakhapatnam</option>
						<option value="Vizianagaram">Vizianagaram</option>
						<option value="Vyara">Vyara</option>
						<option value="Warangal">Warangal</option>
						<option value="Wardha">Wardha</option>
						<option value="Washim">Washim</option>
						<option value="Wayanad">Wayanad</option>
						<option value="West Champaran">West Champaran</option>
						<option value="West Delhi">West Delhi</option>
						<option value="West Garo Hills">West Garo Hills</option>
						<option value="West Kameng">West Kameng</option>
						<option value="West Khasi Hills">West Khasi Hills</option>
						<option value="West Siang">West Siang</option>
						<option value="West Sikkim">West Sikkim</option>
						<option value="West Singhbhum">West Singhbhum</option>
						<option value="West Tripura">West Tripura</option>
						<option value="Wokha">Wokha</option>
						<option value="Yadgir">Yadgir</option>
						<option value="Yamuna Nagar">Yamuna Nagar</option>
						<option value="Yanam">Yanam</option>
						<option value="Yavatmal">Yavatmal</option>
						<option value="Zunheboto">Zunheboto</option>
					</select>
					<br>
					<label>PIN Code</label>
					<input type="text" name="postal_code" id="postal_code" autocomplete="off"
					placeholder="Enter Your PIN Code" maxlength="6" class="form-control">
					<br>
					<?php 

$sql2="select * from donators where id='$donor_id'";
$result2=mysqli_query($con,$sql2);
$c=1;
while($row2=mysqli_fetch_array($result2))
{





?>
					<input type="hidden" name="donor_id" id="donor_id" autocomplete="off"
				maxlength="6" class="form-control" value="<?php echo $row2['id']; ?>">
					<br>

					<?php
} 
					?>
					<label>Reason</label>
					<textarea name="reason" class="form-control" id="reason"
					placeholder="Enter The Reason For Blood Request"></textarea>

					<br>
					<button class="btn btn-danger btn-block btn-lg" type="submit" name="submit2" id="submit2">Submit</button>
					<br>

				</div>
			</div>
			<div class="col-lg-3 col-md-2 align-self-end"></div>
		</div>
	</form>
</div>
</body>

</html>
