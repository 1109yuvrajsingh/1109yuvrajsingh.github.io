<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'pink_pedals');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form

	$email = mysqli_real_escape_string($db, $_POST['email']);
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$lname = mysqli_real_escape_string($db, $_POST['lname']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$gender = mysqli_real_escape_string($db, $_POST['radiogroup1']);
	$cycle = mysqli_real_escape_string($db, $_POST['cycle']);
	// form validation: ensure that the form is correctly filled
	if (empty($fname)) {
		array_push($errors, "First Name is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($lname)) {
		array_push($errors, "Last Name is required");
	}
	if (empty($phone)) {
		array_push($errors, "Phone Number is required");
	}
	if (empty($gender)) {
		array_push($errors, "Gender is required");
	}
	if (empty($address)) {
		array_push($errors, "Address is required");
	}
	if (empty($cycle)) {
		array_push($errors, "Cycle Number is required");
	}


	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO package1 (Fname, Lname, phone, Address, gender, email, cycles) 
					  VALUES('$fname','$lname','$phone', '$address', '$gender', '$email', '$cycle')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		//header('location: '#');
	}
}
