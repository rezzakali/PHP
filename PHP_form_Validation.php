<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>

    <?php
    $name = $email = $gender = $comment = "";
    $nameErr = $emailErr = $genderErr = $commentErr = "";

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["comment"])) {
            $commentErr = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }


        if (empty($_POST["gender"])) {
            $genderErr = "Choose your gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


    <div class="container">
        <h2>PHP Form Validation</h2>
        <p><span class="error">* required field</span></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

            Name: <span class="error">*  <?php echo $nameErr; ?></span>
                <input type="text" name="name" class="form-control" placeholder="enter your name:"> 
           
                    <br><br>
            E-mail: <span class="error">* <?php echo $emailErr; ?></span> <input type="text" name="email" class="form-control" placeholder="enter your email:"> 
            <br><br>
            Comments:
            <textarea name="" id="" cols="" class="form-control" rows="5"></textarea>

            <br>
            Gender: <br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="others"> Others
            <br> <br>
            <input type="submit" value="submit" class="form-control btn btn-primary">
        </form>

        <br>

    </div>

<div class="container">
    
<?php

echo "<h3>Your inputs:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;




?>
</div>
</body>

</html>