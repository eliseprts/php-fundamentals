<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Conditional structures</title>
</head>
<body class="m-5">
    
  <!-- Series of exercises on PHP conditional structures -->

    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Conditional structures</h1>

    <section>
        <h2 class="fs-4 text fw-light">1.1. Clean your room</h2>
        <p>
            <?php 
            
            $room_is_filthy = false;

            if($room_is_filthy == true){
                echo "Yuk, Room is dirty : let's clean it up!";
                cleanup_room();
                echo "<br>Room is now clean!";
                $room_is_filthy = false;
            } else {
                echo "Nothing to do, Room is neat.";
            }
        
            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">1.2. Clean your room, improved</h2>
        <p>
            <?php

            $possible_states = array(
                0 => "health hazard",
                1 => "filthy",
                2 => "dirty",
                3 => "clean",
                4 => "immaculate"
            );

            $room_filthiness = $possible_states[0];

            if($room_filthiness == "filthy" OR $room_filthiness == "health hazard") {
                echo "Yuk, Room is disgusting! Let's clean it up!";
            } elseif ($room_filthiness == "dirty") {
                echo "Yuk, Room is dirty! Let's clean it up!";
            } else {
                echo "Nothing to do, room is neat.";
            }

            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">2. Different greetings according to time </h2>
        <p>
            <?php

            date_default_timezone_set("Europe/Brussels");
            $now = date("H:i");

            if ($now >= 5 AND $now < 9) {
                echo "Good morning !";
            } elseif ($now >= 9 AND $now < 12) {
                echo "Good day!";
            } elseif ($now >= 12 AND $now < 16) {
                echo "Good afternoon!";
            } elseif ($now >= 16 AND $now < 21) {
                echo "Good evening!";
            } else {
                echo "Good night!";
            }


            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">3. Different greetings according to age</h2>
        <form action="" method="get">
            <label for="age">Please type your age</label>
            <input type="" name="age">
            <input type="submit" name="submit" value="Greet me now">
        </form>
        <p>
            <?php

            if (isset($_GET['age'])) {

                if($_GET['age'] < 12) {
                    echo "<i class=\"fw-light text-success\">Hello kiddo !</i>";
                } elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18) {
                    echo "<i class=\"fw-light text-success\">Hello teenager !</i>";
                } elseif ($_GET['age'] >= 18 AND $_GET['age'] <115) {
                    echo "<i class=\"fw-light text-success\">Hello adult !</i>";
                } else {
                    echo "<i class=\"fw-light text-success\">Wow! Still alive ? Are you a robot like me ? Can I hug you ?</i>";
                }

            }

            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">4. Different greetings according to age and gender</h2>
        <form action="" method="get">
            <div>
                <label for="age2">Age</label>
                <input type="" name="age2">
            </div>
            <div>
                <input type="radio" id="man" name="gender" value="man">
                <label for="man">Man</label>
                <input type="radio" id="woman" name="gender" value="woman">
                <label for="woman">or woman ?</label>
            </div>
            <input type="submit" name="submit" value="Greet me now">
        </form>
        <p>
            <?php
                
                if(isset($_GET['gender']) AND isset($_GET['age2'])) {
                    
                    if ($_GET['gender'] == "woman") {

                        if($_GET['age2'] < 12) {
                            echo "<i class=\"fw-light text-success\">Hello miss kiddo !</i>";
                        } elseif ($_GET['age2'] >= 12 AND $_GET['age2'] < 18) {
                            echo "<i class=\"fw-light text-success\">Hello miss teen !</i>";
                        } elseif ($_GET['age2'] >= 18 AND $_GET['age2'] <115) {
                            echo "<i class=\"fw-light text-success\">Hello miss !</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Wow! Still alive ? Are you a robot like me ? Can I hug you ?</i>";
                        }
                
                    } elseif ($_GET['gender'] == "man") {

                        if($_GET['age2'] < 12) {
                            echo "<i class=\"fw-light text-success\">Hello mister kiddo !</i>";
                        } elseif ($_GET['age2'] >= 12 AND $_GET['age2'] < 18) {
                            echo "<i class=\"fw-light text-success\">Hello mister teen !</i>";
                        } elseif ($_GET['age2'] >= 18 AND $_GET['age2'] <115) {
                            echo "<i class=\"fw-light text-success\">Hello mister !</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Wow! Still alive ? Are you a robot like me ? Can I hug you ?</i>";
                        }

                    } else {
                        echo "<i class=\"fw-light text-danger\">Please enter your age and choose your gender</i>";
                    }

                }

            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">5. Different greetings according to age, gender and mothertongue</h2>
        <form action="" method="get">
            <div>
                <label for="age3">Age</label>
                <input type="" name="age3">
            </div>
            <div>
                <input type="radio" id="man" name="gender2" value="man">
                <label for="man">Man</label>
                <input type="radio" id="woman" name="gender2" value="woman">
                <label for="woman">or woman ?</label>
            </div>
            <div>
                <span>Do you speak English ?</span>
                <input type="radio" id="yes" name="language" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="language" value="no">
                <label for="no">No</label>
            </div>
            <input type="submit" name="submit" value="Greet me now">
        </form>

        <p>
            <?php

                if(isset($_GET['gender2']) AND isset($_GET['age3']) AND isset($_GET['language'])) {
                    
                    if ($_GET['language'] == "yes" AND $_GET['gender2'] == "woman") {
                        if ($_GET['age3'] < 12) {
                            echo "<i class=\"fw-light text-success\">Hello Girl!</i>";
                        } elseif ($_GET['age3'] >= 12 AND $_GET['age3'] < 18) {
                            echo "<i class=\"fw-light text-success\">Hello Miss Teen!</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Hello Miss!</i>";
                        }
                    } elseif ($_GET['language'] == "no" AND $_GET['gender2'] == "woman") {
                        if ($_GET['age3'] < 12) {
                            echo "<i class=\"fw-light text-success\">Aloha Girl!</i>";
                        } elseif ($_GET['age3'] >= 12 AND $_GET['age3'] < 18) {
                            echo "<i class=\"fw-light text-success\">Aloha Miss Teen!</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Aloha Miss!</i>";
                        }
                    } elseif ($_GET['language'] == "yes" AND $_GET['gender2'] == "man") {
                        if ($_GET['age3'] < 12) {
                            echo "<i class=\"fw-light text-success\">Hello Boy!</i>";
                        } elseif ($_GET['age3'] >= 12 AND $_GET['age3'] < 18) {
                            echo "<i class=\"fw-light text-success\">Hello Mister Teen!</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Hello Mister!</i>";
                        }
                    } elseif ($_GET['language'] == "no" AND $_GET['gender2'] == "man") {
                        if ($_GET['age3'] < 12) {
                            echo "<i class=\"fw-light text-success\">Aloha Boy!</i>";
                        } elseif ($_GET['age3'] >= 12 AND $_GET['age3'] < 18) {
                            echo "<i class=\"fw-light text-success\">Aloha Mister Teen!</i>";
                        } else {
                            echo "<i class=\"fw-light text-success\">Aloha Mister!</i>";
                        }
                    } else {
                        echo "<i class=\"fw-light text-danger\">Please enter your age, choose your gender and your language</i>";
                    }

                }

            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">6. The Girl Soccer Team</h2>
        <form action="" method="get">
            <div>
                <label for="age4">Your age</label>
                <input type="" name="age4">
            </div>
            <div>
                <input type="radio" id="male" name="gender3" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender3" value="female">
                <label for="female">or female ?</label>
            </div>
            <div>
                <label for="name">Your name</label>
                <input type="text" name="name">
            </div>
            <input type="submit" name="submit" value="Join the team">
        </form>
        <p>
            <?php

                if(isset($_GET['age4']) AND isset($_GET['gender3']) AND isset($_GET['name'])) {

                    if($_GET['age4'] >= 21 AND $_GET['age4'] <= 40 AND $_GET['gender3'] == "female") {
                        echo "<i class=\"fw-light text-success\">Welcome to the team " . $_GET['name'] . "!</i>";
                    } else {
                        echo "<i class=\"fw-light text-danger\">Sorry " . $_GET['name'] . " you don't fit the criteria...</i>";
                    }

                }

            ?>
        </p>
    </section>
        
    <section>
        <h2 class="fs-4 text fw-light">7. The Girl Soccer Team (without else)</h2>
        <form action="" method="get">
            <div>
                <label for="age5">Your age</label>
                <input type="" name="age5">
            </div>
            <div>
                <input type="radio" id="male" name="gender4" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender4" value="female">
                <label for="female">or female ?</label>
            </div>
            <div>
                <label for="name2">Your name</label>
                <input type="text" name="name2">
            </div>
            <input type="submit" name="submit" value="Join the team">
        </form>
        <p>
            <?php

                if(isset($_GET['name2'])) {
                    $answer = "<i class=\"fw-light text-danger\">Sorry " . $_GET['name2'] . " you don't fit the criteria...</i>";
                }

                if(isset($_GET['age5']) AND isset($_GET['gender4']) AND isset($_GET['name2'])){
                    if($_GET['age5'] >= 21 AND $_GET['age5'] <= 40 AND $_GET['gender4'] == "female") {
                        $answer = "<i class=\"fw-light text-success\">Welcome to the team " . $_GET['name2'] . "!</i>";
                    }
                }

                echo $answer;
                
            ?>
        </p>
    </section>

    <section>
        <h2 class="fs-4 text fw-light">8. School sucks !</h2>
        <form action="" method="get">
            <label for="note">Note</label>
            <input type="" name="note">
            <input type="submit" name="submit" value="Get result">
        </form>
        <p>
            <?php

                if (isset($_GET['note'])) {
                    if ($_GET['note'] <= 4) {
                        echo "<i class=\"fw-light\">This work is really bad. What a dumb kid!</i>";
                    } elseif ($_GET['note'] >= 5 AND $_GET['note'] <= 9) {
                        echo "<i class=\"fw-light\">This is not sufficient. More studying is required.</i>";
                    } elseif ($_GET['note'] == 10) {
                        echo "<i class=\"fw-light\">Barely enough!</i>";
                    } elseif ($_GET['note'] >= 11 AND $_GET['note'] <= 14) {
                        echo "<i class=\"fw-light\">Not bad!</i>";
                    } elseif ($_GET['note'] >= 15 AND $_GET['note'] <= 18) {
                        echo "<i class=\"fw-light\">Bravo, bravissimo!</i>";
                    } elseif ($_GET['note'] == 19 OR $_GET['note'] == 20) {
                        echo "<i class=\"fw-light\">Too good to be true : confront the cheater!</i>";
                    } else {
                        echo "<i class=\"fw-light text-danger\">Enter a note between 0 and 20</i>";
                    }
                }

            ?>
        </p>
    </section>

</body>
</html>
