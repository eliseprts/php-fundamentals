<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loops 2</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Loops 1</h1>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">1. Print numbers with while and for</h2>
        <div class="row">
            <!-- While -->
            <div class="col">
                <h3 class="fs-5 text-secondary fw-light text-uppercase">While</h3>
                <?php
                    $n = 1;

                    while ($n <= 120) {
                        echo $n . "<br>";
                        $n ++;
                    };
                ?>
            </div>
            <!-- For -->
            <div class="col">
                <h3 class="fs-5 text-secondary fw-light text-uppercase">For</h3>
                <?php
                    for ($nb = 1; $nb <= 120; $nb++) {
                        echo $nb . "<br>";
                    };

                ?>
            </div>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">4. Startup</h2>
        <div>
            <?php
                $startup_members = array('Pierre', 'Paul', 'Jean', 'Jacques', 'Bernadette', 'Jeannine', 'Georgette', 'Alphonse', 'Mariette');
                foreach ($startup_members as $startup_member) {
                    echo $startup_member . "<br>";
                }
            ?>
        </div>
    </section>

    <section class="my-4">
        <h2 class="fs-4 text fw-light">4. Country</h2>
        <div>
            <?php
                $EU_countries = array(
                    'DE' => 'Allemagne', 
                    'AT' => 'Autriche', 
                    'BE' => 'Belgique',
                    'BG' => 'Bulgarie', 
                    'CY' => 'Chypre', 
                    'HR' => 'Croatie', 
                    'DK' => 'Danemark', 
                    'ES' => 'Espagne', 
                    'EE' => 'Estonie', 
                    'FI' => 'Finlande', 
                    'FR' => 'France', 
                    'GR' => 'Grèce', 
                    'HU' => 'Hongrie', 
                    'IE' => 'Irlande', 
                    'IT' => 'Italie', 
                    'LV' => 'Lettonie', 
                    'LT' => 'Lituanie', 
                    'LU' => 'Luxembourg', 
                    'MT' => 'Malte', 
                    'NL' => 'Pays-Bas', 
                    'PL' => 'Pologne',  
                    'RO' => 'Roumanie', 
                    'SK' => 'Slovaquie', 
                    'SE' => 'Suède',
                    'CZ' => 'Tchéquie');
            ?>
            <form action="" method="get">
                <label for="countries">Choose a country</label>
                <select class="form-select-sm" name="countries" id="countries">
                    <?php
                    foreach ($EU_countries as $key => $value) {
                        echo "<option value=\"" . $key ."\">" . $value . "<option>";
                    }
                    ?>
                </select>
            </form>
        </div>
    </section>

</body>
</html>