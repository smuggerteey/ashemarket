<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Profile: <?php echo $_SESSION['Username']; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        /* Base Styles */
        body {
            background-color: #f8f8f8;
            color: #333;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #721515;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h2, header h4 {
            margin: 0;
            padding: 0;
        }

        /* Profile Picture */
        .img-circle {
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        /* Form Styles */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #721515;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #5c0d0d;
        }

        button.button.special {
            background-color: #721515;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button.button.special:hover {
            background-color: #5c0d0d;
        }

        /* Select Styles */
        .select-wrapper {
            position: relative;
        }

        select {
            appearance: none;
            background-color: white;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        select:focus {
            outline: none;
            border-color: #721515;
        }

        /* Section Styles */
        #post {
            background-color: #f8f8f8;
            padding: 20px;
        }

        .box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .box .header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="subpage">

<?php
			require 'menu.php';

		?>


    <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <div class="box">
                <header>
                    <span class="image left">
                        <img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="img-circle" class="img-responsive" height="200px">
                    </span>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h4><?php echo $_SESSION['Username'];?></h4>
                    <br>
                    <form method="post" action="Profile/updatePic.php" enctype="multipart/form-data">
                        <input type="file" name="profilePic" id="profilePic">
                        <br>
                        <div class="12u$">
                            <input type="submit" class="button special small" name="upload" value="Upload" />
                            <input type="submit" class="button special small" name="remove" value="Remove" />
                        </div>
                    </form>
                </header>
                <form method="post" action="Profile/updateProfile.php">
                    <div class="row uniform">
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="<?php echo $_SESSION['Name'];?>" placeholder="Full Name" required />
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="<?php echo $_SESSION['Mobile'];?>" placeholder="Mobile No" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="uname" id="uname" value="<?php echo $_SESSION['Username'];?>" placeholder="Username" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['Email'];?>" placeholder="Email" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
    <div class="select-wrapper">
        <label for="section">Your Hobby</label>
        <select name="section" id="section" required>
            <option value="" disabled selected>Select your hobby</option>
            <option value="Band">Band</option>
            <option value="Drama">Drama</option>
            <option value="Dance">Dance</option>
            <option value="Decoration">Decoration</option>
            <option value="Other">Other</option>
        </select>
    </div>
</div>

<p><b>Major :</b></p>
<div class="3u 12u$(small)">
    <input type="radio" id="cs" name="edu" value="Computer Science" checked>
    <label for="cs">Computer Science</label>
</div>
<div class="3u 12u$(small)">
    <input type="radio" id="ce" name="edu" value="Computer Engineering">
    <label for="ce">Computer Engineering</label>
</div>
<div class="3u 12u$(small)">
    <input type="radio" id="ee" name="edu" value="Electrical Engineering">
    <label for="ee">Electrical Engineering</label>
</div>
<div class="3u 12u$(small)">
    <input type="radio" id="me" name="edu" value="Mechanical Engineering">
    <label for="me">Mechanical Engineering</label>
</div>
<div class="3u 12u$(small)">
    <input type="radio" id="mis" name="edu" value="MIS">
    <label for="mis">MIS</label>
</div>
<div class="3u 12u$(small)">
    <input type="radio" id="ba" name="edu" value="Business Administration">
    <label for="ba">Business Administration</label>
</div>

<p><b>Academic Year :</b></p>
<div class="2u 12u$(small)">
    <input type="radio" id="1" name="year" value="1" checked>
    <label for="1">1<sup>st</sup> Year</label>
</div>
<div class="2u 12u$(small)">
    <input type="radio" id="2" name="year" value="2">
    <label for="2">2<sup>nd</sup> Year</label>
</div>
<div class="2u 12u$(small)">
    <input type="radio" id="3" name="year" value="3">
    <label for="3">3<sup>rd</sup> Year</label>
</div>
<div class="2u 12u$(small)">
    <input type="radio" id="4" name="year" value="4">
    <label for="4">4<sup>th</sup> Year</label>
</div>
<div class="12u$">
    <center>
        <input type="submit" class="button special" value="Update Profile" />
    </center>
</div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
