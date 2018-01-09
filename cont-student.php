<!DOCTYPE HTML>
<HTML>

<head>
	<title>Home | InternUs</title>
	<meta name ="viewport" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href="css/horizontal.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/radio.js"></script>

</head>

<body>
	<div class = "wrap" style="background-image: url('images/header2.jpg')">
		<header>
			<div class="logo">
				<a href="index.php"><img src="images/logo.png"/></a>
			</div>
			<div class="nav">
				<ul style="margin-top: 10px; margin-bottom: 10px;">
					<li><a href="index.php" id="loginform"><img src="images/logout.png"/>LOGOUT</a></li>
					<li><a href="studentprofile.php" id="joinform"><img src="images/profile.png"/>MY PROFILE</a></li>							
				</ul>
			</div>
<div class="intro">
	<h2><span>Launch your career in minutes<br>&nbspSearch Internships</span></h2>
</span></h2>
</div>							
</header>
</div>
<div class="container-menu">
	<div class="row">
		<div id="cssmenu">
			<ul>
				<li><a href="index-student.php">INTERNSHIP LISTING</a></li>
				<li class="active"><a href="studentprofile.php">MY PROFILE</a></li>				
			</ul>
		</div>
	</div>
</div>

<div class="container">
  <form action="studentprofile.php">

    <label for="student_name">Student Name</label>
    <input type="text" id="student_name" name="student_name" placeholder="Student Name">

    <label for="student_surname">Student Surname</label>
    <input type="text" id="student_surname" name="student_surname" placeholder="Student Name">

    <label for="student_id">Student Number</label>
    <input type="text" id="student_id" name="student_id" placeholder="Student Number">

    <label for="student_email">Student Email</label>
    <input type="text" id="student_email" name="student_email" placeholder="Company Email">

    <label for="password">Password</label>
    <input type="text" id="password" name="password" placeholder="password">

    <label for="password">Confirm Password</label>
    <input type="text" id="password" name="password" placeholder="password">

    <label for="student_resume">Resume </label>
    <input type='file'/>

    <label for="student_coverletter">Cover Letter </label>
    <input type='file'/><br><br>

    <input id="submmit_student" type="submit" value="Submit">

  </form>
</div>
</body>

</HTML>