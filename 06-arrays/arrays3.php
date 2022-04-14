<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Arrays 3</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-5">Arrays 3</h1>

    <section class="my-4">

        <?php

            $web_development = array(
                'frontend' => array(),
                'backend' => array()
            );

            $web_development['frontend'][] = 'xhtml';
            $web_development['backend'][] = 'Ruby on Rails';
            $web_development['frontend'][] = 'CSS';
            $web_development['frontend'][] = 'Flash';
            $web_development['frontend'][] = 'JavaScript';
            $web_development['frontend'][0] = 'html';
            array_shift($web_development['backend']);

            echo "<pre>";
            print_r($web_development);
            echo "</pre>";

        ?>

    </section>

</body>
</html>