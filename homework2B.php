<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
	<meta name="author" content="Gia Thurton">
	<meta name="description" content="This is homework 2 part A. It is an order page for a business that sells sunglasses">
	<style> 
	body {background-color: #A2F4E6;} 
	h1 {color: #0E6EBA}
	h4 {color: #8C3DE8}
	
	</style>
	
</head>
<body class="body">



	<h1> 90's Sunglasses </h1>
	<h4> Introducing our limited addition 90's Sunglasses. They're the best addition to any outfit. Order now! Price:$100.00 </h4>
	<img src="sunglasses.png">
	<form action="homework2B.php" method="POST">
	<p>  </p>
	<p>
		
		</p>
		<label for="fname"> First name: </label>
		<input id="fname" name="fname" type="text">
		<p>
		<label for="lname"> Last name: </label>
		<input id="lname" name="lname" type="text">
		<?php if(isset(_POST['lname'])) echo"value=$name";?>
		</p>
		<p>
		<label for="street"> Street Address: </label>
		<input id="street" name="street" type="text">
		</p>
		<p>State:
			<select id="state" name="state">
				<!-- drop down preformatted from https://www.freeformatter.com/usa-state-list-html-select.html -->
				<option value="AL" >Alabama</option>
				<option value="AK" >Alaska</option>
				<option value="AZ" >Arizona</option>
				<option value="AR" >Arkansas</option>
				<option value="CA" >California</option>
				<option value="CO" >Colorado</option>
				<option value="CT" >Connecticut</option>
				<option value="DE" >Delaware</option>
				<option value="DC" >District Of Columbia</option>
				<option value="FL" >Florida</option>
				<option value="GA" >Georgia</option>
				<option value="HI" >Hawaii</option>
				<option value="ID" >Idaho</option>
				<option value="IL" >Illinois</option>
				<option value="IN" >Indiana</option>
				<option value="IA" >Iowa</option>
				<option value="KS" >Kansas</option>
				<option value="KY" >Kentucky</option>
				<option value="LA" >Louisiana</option>
				<option value="ME" >Maine</option>
				<option value="MD" >Maryland</option>
				<option value="MA" >Massachusetts</option>
				<option value="MI" >Michigan</option>
				<option value="MN" >Minnesota</option>
				<option value="MS" >Mississippi</option>
				<option value="MO" >Missouri</option>
				<option value="MT" >Montana</option>
				<option value="NE" >Nebraska</option>
				<option value="NV" >Nevada</option>
				<option value="NH" >New Hampshire</option>
				<option value="NJ" >New Jersey</option>
				<option value="NM" >New Mexico</option>
				<option value="NY" >New York</option>
				<option value="NC" >North Carolina</option>
				<option value="ND" >North Dakota</option>
				<option value="OH" >Ohio</option>
				<option value="OK" >Oklahoma</option>
				<option value="OR" >Oregon</option>
				<option value="PA" >Pennsylvania</option>
				<option value="RI" >Rhode Island</option>
				<option value="SC" >South Carolina</option>
				<option value="SD" >South Dakota</option>
				<option value="TN" >Tennessee</option>
				<option value="TX" >Texas</option>
				<option value="UT" >Utah</option>
				<option value="VT" >Vermont</option>
				<option value="VA" >Virginia</option>
				<option value="WA" >Washington</option>
				<option value="WV" >West Virginia</option>
				<option value="WI" >Wisconsin</option>
				<option value="WY" >Wyoming</option>
			</select>
			<p>
			City: <input type=text name="city" value=''>
			</p>
			<p>
		<label for="zip"> Zip code: </label>
		<input id="zip" name="zip" type="text">
		</p>
		<p>
		<label for="phone"> Phone number: </label>
		<input id="phone" name="phone" type="text">
		</p>
		<p>
		<label for="quantity"> Quantity: </label>
		<input id="quantity" name="quantity" type="text">
		</p>
		
		
		<p>
		<label class="delivery"> Delivery Type: </label> <br>
		<input type="radio" id="option1" name="delivery" value="Pick Up"> Customer Pick Up- Free <br>
		<input type="radio" id="option1" name="delivery" value="Standard"> Standard Delivery (5-7 Business days)- $7.00 <br>
		<input type="radio" id="option1" name="delivery" value="Same Day"> Same Day Delivery (order before 1 PM EST)- $22.00 <br>
		<input type="radio" id="option1" name="delivery" value="Priority"> Priority Delivery (2-3 business days)- $15.00
		</p>
		
	
	
		<label class="label"> Add-ons: </label>
		<ul class="check-list">
		<input type="checkbox" name="checkbox1" value="checkbox1">Delivery Insurance (In case of delivery damages or theft) +$5.00 <br>
		<input type="checkbox" name="checkbox2" value="checkbox2">Repair Insurance (up to 3 repairs) + $20.00 <br>
		</ul>
		
		
		<input type="submit" value="Submit" class="button">
		</p>
		
		
		</form>
		
		<?php
		
		$host="localhost";
		$user="get26";
		$password='*jsjf4sdc420';
		$dbname="get26";
		$connect=mysqli_connect($host,$user,$password,$dbname);		
		
		$price=100;
		
		$addon1=$_POST['checkbox1'];
		$addon2=$_POST['checkbox2'];
		$state=$_POST['state'];
		
		//$total=$quantity*5
		if($_POST){
		$fname=$_POST['fname'];
		if(empty($_POST['fname'])){
		echo "<h4> Error: Please enter your first name.</br></h4>";
		}
		if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
 		 echo "<h4> Error: Please enter your first name. Only letters and white space allowed <br></h4>";
 		 }
 		 
		
		$lname=$_POST['lname'];
		if(empty($_POST['lname'])){
		echo "<h4> Error: Please enter your last name.<br></h4>";
		}
		if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
 		 echo "<h4> Error: Please enter your last name. Only letters, numbers, and white space allowed </br> </h4>";
 		 }
		$street=$_POST['street'];
		if(empty($_POST['street'])){
		echo "<h4> Error: Please enter your street. <br> </h4>";
		}
		if(!preg_match("/^[0-9a-zA-Z ]*$/",$street)) {
 		 echo "<h4> Error: Please enter your street. Only letters and white space allowed </br> </h4>";
 		 }
		$city=$_POST['city'];
		if(empty($_POST['city'])){
		echo "<h4> Error: Please enter a valid city. <br> </h4>";}
		if(!preg_match("/^[a-zA-Z-' ]*$/",$city)) {
 		 echo "<h4> Error: Please enter a valid city. Only letters and white space allowed <br> </h4>";
 		 }
		$zip=$_POST['zip'];
		if(empty($_POST['zip'])){
		echo "<h4> Error: Please enter a zip code.<br></h4>";
		}
		if(!preg_match('/^[0-9]{5}([- ]?[0-9]{4})?$/', $zip)) {
 		 echo " <h4> Error: Please enter a zip code. Only 5 digits allowed <br> </h4>";
 		 }
		$phone=$_POST['phone'];
		if(empty($_POST['phone'])){
		echo "<h4> Error: Please enter a valid phone number that includes only 10 digits<br></h4> ";
		}
		if(!preg_match('/^[0-9]{10}+$/', $phone)) {
 		 echo "<h4> Error: Please enter a valid phone number. Only 10 digits allowed<br> </h4>";
 		 }
		$quantity=$_POST['quantity'];
		if(empty($_POST['quantity'])){
		echo "<h4>Error: Please enter a valid quantity that includes only numbers<br></h4>";
		}
		if(!preg_match('/^\d+$/',$quantity)) {
 		 echo "<h4>Error: Please enter a valid quantity. Only digits allowed<br></h4>";
 		 }
		$delivery=$_POST['delivery'];
		if(empty($_POST['delivery'])){
		echo "<h4> Error: Please select a delivery method</h4> </h4>";
		}
	
		
		
		if(!empty($fname) && !empty($lname) && !empty($street) && !empty($city) && !empty($zip) && !empty($phone) && !empty($quantity) && preg_match('/^\d+$/',$quantity) && preg_match('/^[0-9]{10}+$/', $phone) && preg_match('/^[0-9]{5}([- ]?[0-9]{4})?$/', $zip) && preg_match("/^[a-zA-Z-' ]*$/",$city) && preg_match("/^[0-9a-zA-Z ]*$/",$street) && preg_match("/^[a-zA-Z-' ]*$/",$lname) && preg_match("/^[a-zA-Z-' ]*$/",$fname)){
		$total=(int)$quantity;
		$price=$price*$total;
		echo "Thank you for your order!";
		echo "<br>You ordered " . $quantity . " sunglasses to be delivered " . $delivery . " to the following address: ";
		echo "<br>" .$fname . " " . $lname . " ";
		echo "<br>" . $street;
		echo "<br>" . $city . ", " . $state . " " . $zip;
		echo "<br> Your order total is $" . $price; 
		
	
		}
		
	$text = $fname . ";" . $lname . ";" . $street . ";" . $city . ";" . $zip . ";" . $phone . ";" . $quantity;
		$new_file = fopen("homework2summary.txt", "a") or die("<br>unable to open file");
		fwrite($new_file, $text);
		fclose($new_file);
		}
		
		
	
		
		
		?>
	</body>
	</html>
