<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if( isset($_POST['user_info']) ) {
        echo "<h1>HELLO WORLD</h1>";

        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $age        = $_POST['age'];
        $gender     = $_POST['gender'];
        $fav_colors  = [];
        // check if there are favorite colors submitted
        $fav_colors = isset($_POST['fav_color']) ? $_POST['fav_color'] : [];

        $civil_status = $_POST['civil_status'];

        $is_awesome = false;

       
        echo "<b>Full Name: </b>" . "$first_name</b> $last_name";
        echo "<br/>";
        echo "<b>Age: </b>" . $age;
        echo "<br/>";
        echo "<b>Gender: </b>" . $gender;
        echo "<br/>";
        echo "<b>Favorite Colors: </b>";
        echo "<pre>";
        print_r($fav_colors);
        echo "</pre>";
        echo "<b>Civil Status: </b>" . $civil_status;
        

    }
    else {
        echo "No user info submitted. Please complete the form below.";
    }
?>
    <br/><br/>
    <form action="index.php" method="POST">
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required placeholder="First name" value="<?= $first_name ?? '' ?>">
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required placeholder="Last name" value="<?= $last_name ?? '' ?>">
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required placeholder="age" value="<?= $age ?? '' ?>">
        </div>
        <div>
            <p>Gender</p>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female" checked> Female</label>
           
        </div>
        <div>
            <p>Favorite Colors</p>
            <label><input type="checkbox" name="fav_color[]" value="red"> Red</label>
            <label><input type="checkbox" name="fav_color[]" value="green"> Green</label>
            <label><input type="checkbox" name="fav_color[]" value="blue"> Blue</label>

        </div>

        <div>
            <label for="civil_status">Civil Status:</label>
            <select name="civil_status" id="civil_status">
                <option value="" disabled selected>Select a gender...</option>
                <option value="Single">Single</option>
                <option value="merried">Married</option>
                <option value="Divorce">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
        </div>
        <div>
            <button type="submit" name="user_info">Submit</button>
        </div>
    </form>

</body>
</html>