<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Survey</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <h1>Survey</h1>
<form action="store.php" method="post" onsubmit="return false">
<?php
	include 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$enroll = $_POST['flexRadioDefault'];
	$course = $_POST['course'];
	$others = $_POST['others'];
	
	mysqli_query($mysqli, "insert into table1 (name,email,age,occupation,enroll,course,others)
	values('$name', '$email', '$age', '$occupation', '$enroll', '$course', '$others')");
	
?>
 <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>
    <div class="mb-3">
      <label for="occupation" class="form-label">Choose your occupation</label>
      <select id="occupation" class="form-select" name="occupation" required>
        <option value="fulltime">Full Time Job</option>
		<option value="parttime">Part Time Job</option>
		<option value="freelancer">Freelancer</option>
		<option value="teacher">Teacher</option>
		<option value="student">Student</option>
		<option value="prefernot">Prefer not to say</option>
      </select>
    </div>
	
	<h5>How likely are you to enroll with us?</h5>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1" value="1" checked>
		<label class="form-check-label" for="radio1">Extremely Likely</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2" value="2">
		<label class="form-check-label" for="radio2">Very Likely</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio3" value="3">
		<label class="form-check-label" for="radio3">Likely</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" id="radio4" value="4">
		<label class="form-check-label" for="radio4">Not Likely</label>
	</div>
	
	<h5>What course do you like to enroll in?</h5>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="android" name="course" checked>
		<label class="form-check-label" for="android">Android apps</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="wd" name="course">
		<label class="form-check-label" for="wd">Web Development</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="js" name="course">
		<label class="form-check-label" for="js">Javascript</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="p" name="course">
		<label class="form-check-label" for="p">Python</label>
	</div>
	<div class="mb-3">
		<label for="Textarea1" class="form-label">Any other specification you would like to mention?</label>
		<textarea class="form-control" id="Textarea1" rows="5" name="others" required></textarea>
	</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <script src="script.js"></script>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</body>

</html>