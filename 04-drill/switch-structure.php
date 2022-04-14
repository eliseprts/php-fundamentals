<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Switch structure</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Switch structure</h1>

    <section>
        <h2 class="fs-4 text fw-light">School sucks!</h2>
        <form action="" method="get">
            <label for="note">Note</label>
            <input type="" name="note">
            <input type="submit" name="submit" value="Get result">
        </form>
        <p>
            <?php

                if (isset($_GET['note'])) {
                    switch ($_GET['note']) {
                        case 0:
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                            echo "<i class=\"fw-light\">This work is really bad. What a dumb kid!</i>";
                            break;
                        case 5:
                        case 6:
                        case 7:
                        case 8:
                        case 9:
                            echo "<i class=\"fw-light\">This is not sufficient. More studying is required.</i>";
                            break;
                        case 10:
                            echo "<i class=\"fw-light\">Barely enough!</i>";
                            break;
                        case 11:
                        case 12:
                        case 13:
                        case 14:
                            echo "<i class=\"fw-light\">Not bad!</i>";
                            break;
                        case 15:
                        case 16:
                        case 17:
                        case 18:
                            echo "<i class=\"fw-light\">Bravo, bravissimo!</i>";
                            break;
                        case 19:
                        case 20: 
                            echo "<i class=\"fw-light\">Too good to be true : confront the cheater!</i>";
                            break;
                        default :
                        echo "<i class=\"fw-light text-danger\">Enter a note between 0 and 20</i>";
                    }
                }
                
            ?>
</body>
</html>