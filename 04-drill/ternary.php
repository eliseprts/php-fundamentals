<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ternary operators</title>
</head>
<body class="m-5">

<h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Ternary operators 1</h1>

<section>
    <p>Male or female ?</p>
    <form action="" method="get">
        <div>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <input type="submit" name="submit" value="Greet me now">
    </form>
    <p>
        <?php

            $hello = "Hello ";

            echo ($_GET['gender'] == "male" ? $hello . "Mister!" : $hello . "Miss!");

        ?>
    </p>
</section>
    
</body>
</html>