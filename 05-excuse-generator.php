<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Apology Generator</title>
</head>
<body class="m-5">

    <?php

    // Define variables and set to empty value
    $nameChildErr = $genderErr = $nameParentErr = $nameTeacherErr = $reasonErr = "";
    $nameChild = $gender = $nameParent = $nameTeacher = $reason = "";
    date_default_timezone_set("Europe/Brussels");
    $date = date("d/m/Y");

    // Check each $_POST variable with test_input() function
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['nameChild'])) {
            $nameChildErr = "Name of child is required";
        } else {
            $nameChild = test_input($_POST['nameChild']);
        }
        
        if(empty($_POST['gender'])) {
            $genderErr = "Gender is required";
        } else {
            // $gender = test_input($_POST['gender']);
            if ($_POST['gender'] == "boy") {
                $gender = "son";
            } else {
                $gender = "daughter";
            }
        }
        
        if(empty($_POST['nameParent'])) {
            $nameParentErr = "Name of parent is required";
        } else {
            $nameParent = test_input($_POST['nameParent']);
        }
        
        if(empty($_POST['nameTeacher'])) {
            $nameTeacherErr = "Name of teacher is required";
        } else {
            $nameTeacher = test_input($_POST['nameTeacher']);
        }
        
        if(empty($_POST['reason'])) {
            $reasonErr = "Reason is required";
        } else {
            // $reason = test_input($_POST['reason']);
            if ($_POST['reason'] == "illness") {
                $reason = "illness";
            } elseif ($_POST['reason'] == "deathPet") {
                $reason = "the death of our pet";
            } elseif ($_POST['reason'] == "extraActivity") {
                $reason = "a significant extra-curricular activity";
            } else {
                $reason = "an alien invasion in our house";
            }
        }
    }

    // Remove special characters, backslashes
    function test_input($data) {
        // $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center py-5">Apology generator</h1>

    <div class="container">
        <h2 class="fs-4 text fw-light">Complete this form</h2>
        <p class="text-danger fw-lighter fs-6">* required field</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="mb-3">
                <label for="nameChild">Name of the child</label>
                <input type="text" name="nameChild">
                <span class="text-danger fw-lighter fs-6">* <?php echo $nameChildErr; ?></span>
            </div>
            <div class="mb-3">
                <span>Gender</span>
                <input type="radio" id="boy" name="gender" value="boy">
                <label for="boy" class="fw-light">Boy</label>
                <input type="radio" id="girl" name="gender" value="girl">
                <label for="girl" class="fw-light">Girl</label>
                <span class="text-danger fw-lighter fs-6">* <?php echo $genderErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="nameParent">Name of the parent</label>
                <input type="text" name="nameParent">
                <span class="text-danger fw-lighter fs-6">* <?php echo $nameParentErr; ?></span>
            </div>
            <div class="mb-3">
                <label for="nameTeacher">Name of the teacher</label>
                <input type="text" name="nameTeacher">
                <span class="text-danger fw-lighter fs-6">* <?php echo $nameTeacherErr; ?></span>
            </div>
            <div class="mb-3">
                <span>Reason for the absence</span>
                <input type="radio" id="illness" name="reason" value="illness">
                <label for="illness" class="fw-light">Illness</label>
                <input type="radio" id="deathPet" name="reason" value="deathPet">
                <label for="deathPet" class="fw-light">Death of the pet</label>
                <input type="radio" id="extraActivity" name="reason" value="extraActivity">
                <label for="extraActivity" class="fw-light">Significant extra-curriculum activity</label>
                <input type="radio" id="alien" name="reason" value="alien">
                <label for="alien" class="fw-light">Alien invasion</label>
                <span class="text-danger fw-lighter fs-6">* <?php echo $reasonErr; ?></span>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Generate excuse word">
        </form>
    </div>
    
    <div class="container my-5">
        <h2 class="fs-4 text fw-light">Excuse word</h2>
        <div class="row">

            <div class="col-10 bg-light">

                <div class="p-10">
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            echo "<p class=\"fw-light fst-italic\">Dear " . $nameTeacher . ",";
                            echo "<p class=\"fw-light fst-italic\">My " . $gender . ", " . $nameChild . " had to miss school this " . $date . " due to " . $reason . ". Should there be any verification, please do not hesitate to contact me.</p>";
                            echo "<p class=\"fw-light fst-italic\">Yours sincerely,</p>";
                            echo "<p class=\"fw-light fst-italic\">" . $nameParent . "</p>";
                        }
                    ?>
                </div>
                
            </div>

        </div>
    </div>

</body>
</html>