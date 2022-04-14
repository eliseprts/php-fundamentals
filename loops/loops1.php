<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loops 1</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Loops 1</h1>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">1. Foreach: practice</h2>
        <div>
            <?php
                $names = array('John', 'jeanne', 'Joan', 'emile');
                var_dump($names);

                echo "<br>";
                // Capitalize the first letter of each name
                foreach($names as $name) {
                    ucfirst($name);
                };
                var_dump($names);

                echo "<br>";
                // Capitalize the first letter of each name + save back in the array
                foreach($names as $key=> $value) {
                    $names[$key] = ucfirst($value);
                }
                var_dump($names);
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">2. Foreach : exercise</h2>
        <div>
            <?php
                $pronouns = array('I', 'You', 'She/He', 'We', 'You', 'They');
                foreach ($pronouns as $pronoun) {
                    if ($pronoun == "She/He") {
                        echo "<p> " . $pronoun . " codes";
                    } else {
                        echo "<p> " . $pronoun . " code";
                    }
                }
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">3. While : practice</h2>
        <div>
            <?php
                $amount_of_lines = 1;
                
                while ($amount_of_lines <= 100) {
                    echo $amount_of_lines . " : I shall not watch flies fly when I'm learning PHP.<br>";
                    $amount_of_lines ++;
                }
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">4. For : practice</h2>
        <div>
            <?php
                for($amount_of_lines2 = 1; $amount_of_lines2 <= 100; $amount_of_lines2 ++) {
                    echo $amount_of_lines2 . " : I shall not watch flies fly when I'm learning PHP.<br>";
                }
            ?>
        </div>
    </section>

</body>
</html>