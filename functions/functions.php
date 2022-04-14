<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Functions</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Functions</h1>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">1. Practice</h2>
        <div>
            <?php
                $str = 'This is going to be shuffled !';
                $str = str_shuffle($str);
            ?>
        </div>
        <div>
            <?php
                $txt = 'According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.';
                $txt_array = explode(' ', $txt);

                // foreach ($txt_array as $key => $value) {
                //     $txt_array[$key] = str_shuffle($value);
                // }

                // $txt = implode(' ', $txt_array);

                // echo $txt;

                foreach($txt_array as $word) {
                    echo str_shuffle($word) . " ";
                }
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">2. Capitalize</h2>
        <div>
            <?php
                $name = 'emile';
                echo ucfirst($name);
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">2. Year</h2>
        <div>
            <p>Current year: <?php echo date('Y');?></p>
        </div>
        <div>
            <p>Today: 
                <?php
                    date_default_timezone_set("Europe/Brussels");
                    echo date('d/m/Y h:i:sa');
                ?>
            </p>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">3. Sum</h2>
        <div>
            <?php
                function sum($nb1, $nb2) {
                    if (is_numeric($nb1) == 1 AND is_numeric($nb2) == 1) {
                        echo $nb1 + $nb2;
                    } else {
                        echo 'Error: argument is the not a number.';
                    }
                };
                sum('a', 3);
            ?>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">4. Acronym</h2>
        <div>
            <?php
                $text = 'In code we trust!';
                function acronym($str) {
                    strtoupper($str);
                    $str_array = explode(' ', $str);
                    foreach ($str_array as $word) {
                        $first_char = $word[0];

                        echo $first_char;
                    }
                }
                acronym($text);
            ?>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">5. Change character</h2>
        <div>
            <p>
                <?php
                    function replace($str) {
                        echo preg_replace('/ae/', 'æ', $str);
                    }
                    $word = 'caecotrophie';
                    replace($word);
                ?>
            </p>
            <p>
                <?php
                    function replace2($str2) {
                        echo preg_replace('æ', '/ae/', $str2);
                    }
                    $word2 = 'cæcotrophie';
                    replace($word2);
                ?>
            </p>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">6. Feedback</h2>
        <div>
            <?php
                function feedback($message, $class = 'info') {
                    return "<div class=\"" . $class . "\">" . ucfirst($class) . ": " . $message . ".</div>";
                };
                $message_error = 'Incorrect email address';
                $class_error = 'error';
                echo feedback($message_error, $class_error);
            ?>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">7. Words generator</h2>
        <div>
            <?php

            ?>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">8. Decapitalize</h2>
        <div>
            <?php
                $str = 'STOP YELLING I CAN\'T HEAR MYSELF THINKING!!';
                echo strtolower($str);
            ?>
        </div>
    </section>

    <section class="my-5">
        <h2 class="fs-4 text fw-light">8. Cone volume</h2>
        <div>
            <?php
                function calculate_cone_volume($r, $h) {
                    $vol = floor(pow($r, 2) * pi() * $h * (1/3));
                    echo '<p>The volume of a cone which ray is ' . $r . ' and height is ' . $h . ' = ' . $vol . 'cm<sup>3</sup></p>';
                }
                calculate_cone_volume(5, 2);
            ?>
        </div>
    </section>

</body>
</html>