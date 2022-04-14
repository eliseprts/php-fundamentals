<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Arrays 1</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Arrays 1</h1>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">1. Practice</h2>
        <div>
            <?php
                $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
                echo $countries[2];

                echo "<br>";
                var_dump($countries);

                echo "<br>";
                echo "<pre>";
                print_r($countries);
                echo "</pre>";
            ?>
        </div>
    </section>
    
    <section class="my-4">
        <h2 class="fs-4 text fw-light">2. Family Members</h2>
        <div>
            <?php
                $family = ['Hervé', 'Marie-Anne', 'Elise', 'Mathilde'];
                print_r($family);
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">3. Recipes</h2>
        <div>
            <?php
                $recipes = ['Lasagna', 'Pizza', 'Boulets', 'Vol-au-vent', 'Mac n cheese', 'French fries'];
                print_r($recipes);
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">4. Movies</h2>
        <div>
            <?php
                $movies = ['Harry Potter and the Philosopher\'s Stone', 'Harry Potter and the Chamber of Secrets', 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter and the Goblet of Fire', 'Harry Potter and the Order of the Phoenix', 'Harry Potter and the Half-Blood Prince', 'Harry Potter and the Deathly Hallows [Part 1]', 'Harry Potter and the Deathly Hallows [Part 2]'];
                echo $movies[5];
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">4. Associative array : describe yourself</h2>
        <div class= "row">
            <div class="col">
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
                    'hobbies' => array('yoga', 'books', 'arts & crafts')
                );

                echo "<pre>";
                print_r($me);
                echo "</pre>";

                // Add a new hobby
                $me['hobbies'][] = 'taxidermy';

                // Change 'lastname'
                $me['lastname'] = 'Durand';
                ?>
            </div>
            <div class="col">
                <?php
                    $mother = array(
                        'firstname' => 'Marie-Anne',
                        'lastname' => 'Parée',
                        'age' => 59,
                        'city' => 'Ottignies',
                        'status' => 'married',
                        'hair' => 'brown',
                        'eyes' => 'grey',
                        'pet' => 'none',
                        'hobbies' => array('sewing', 'knitting', 'cooking', 'books')
                    );

                    // Add $mother to $me
                    $me['mother'] = $mother;

                    echo "<pre>";
                    print_r($me);
                    echo "</pre>";
                ?>
            </div>
        </div>
        <div>
            <p>Number of hobbies in $mother : <?php echo count($mother['hobbies']); ?></p>
            <p>Number of hobbies in $me : <?php echo count($me['hobbies']); ?></p>
            <p>Total of hobbies :
                <?php
                    $hobbiesMother = count($mother['hobbies']);
                    $hobbiesMe = count($me['hobbies']);
                    echo $hobbiesMother + $hobbiesMe;
                ?>
            </p>
        </div>
    </section>

</body>
</html>