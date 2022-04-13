<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Arrays 2</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Arrays 2</h1>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">1. Associative array : potential hobbies</h2>
        <div>
            <?php

                $me = array(
                    'firstname' => 'Elise',
                    'lastname' => 'Pourtois',
                    'age' => 29,
                    'city' => 'Limal',
                    'status' => 'engaged',
                    'hair' => 'brown',
                    'eyes' => 'brown',
                    'pet' => 'cat',
                    'hobbies' => array('yoga', 'books', 'arts & crafts', 'nature', 'board games')
                );

                $soulmate = array(
                    'firstname' => 'Martin',
                    'lastname' => 'Tombal',
                    'age' => '27',
                    'city' => 'Limal',
                    'status' => 'engaged',
                    'hair' => 'brown',
                    'eyes' => 'brown',
                    'pet' => 'cat',
                    'hobbies' => array('video games', 'floorball', 'cycling', 'nature', 'board games')
                );

                // Compare values of array and returns the matches
                $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
                // Remove duplicate + merge array
                $possible_hobbies_via_merge = array_unique(array_merge($me['hobbies'], $soulmate['hobbies']));

            ?>
            <p>Possible hobbies via intersection : 
                <?php
                    echo "<pre>";
                    print_r($possible_hobbies_via_intersection);
                    echo "</pre>";
                ?>
            </p>
            <p>Possible hobbies via merge :
                <?php
                    echo "<pre>";
                    print_r($possible_hobbies_via_merge);
                    echo "</pre>";
                ?>
            </p>
        </div>
    </section>


</body>
</html>