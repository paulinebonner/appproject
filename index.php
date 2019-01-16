<!doctype heml>
<html>

<head>
    <title>org chart</title>
    <script src="test.js"></script>
</head>

<body>
    <form action="process.php" method="post">
        <div class="container">
            <h1>New Employee Registration</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="firstName"><b>First Name</b></label>
            <input type="text" placeholder="First Name" name="fname" required><br>

            <label for="lastName"><b>Last Name</b></label>
            <input type="text" placeholder="Last Name" name="lname" required><br>

            <label for="jobTitle"><b>Job Title</b></label>
            <input type="text" placeholder="Job Title" name="title" required><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br>

            <b>Direct Reports</b><input type="radio" name="directReport" value="yes" id="dr-btn"><br>

            <b>Supervisor</b>
            <select name="supervisor">
                <?php
		          $d = file_get_contents('data.json');
		          $d = json_decode($d, true);
		
		          foreach($d as $k => $o){
                    if($o['directReport'] == "yes")
                        {echo '<option value="'.$k.'">'.$o['fullName'].'</option>';}
		          }
	           ?>
            </select><br>

            <button type="submit" class="registerbtn">Register</button>
        </div>

    </form>
</body>

</html>
