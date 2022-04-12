<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Unicorn</title>
</head>
<body class="m-5">
    
    <h1 class="fs-2 text fw-light text-uppercase text-primary text-center pyb-10">Ternary operators 2</h1>
    
    <section class="container">

        <div class="row">
            <p class="fw-bold">Human, cat or unicorn ?</p>
            <form action="" method="get">
                <div>
                    <input type="radio" id="human" name="type" value="human">
                    <label for="human">Human</label>
                    <input type="radio" id="cat" name="type" value="cat">
                    <label for="female">Cat</label>
                    <input type="radio" id="unicorn" name="type" value="unicorn">
                    <label for="unicorn">Unicorn</label>
                </div>
                <input type="submit" name="submit" value="Show me">
            </form>
        </div>
        <div class="row" >
            <?php

                $human = "<iframe src=\"https://giphy.com/embed/6ubSLhnIY5bTG\" width=\"380\" height=\"480\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/excited-yes-kids-6ubSLhnIY5bTG\">via GIPHY</a></p>";
                $cat = "<iframe src=\"https://giphy.com/embed/MDJ9IbxxvDUQM\" width=\"480\" height=\"270\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/cat-kisses-hugs-MDJ9IbxxvDUQM\">via GIPHY</a></p>";
                $unicorn = "<iframe src=\"https://giphy.com/embed/HULqwwF5tWKznstIEE\" width=\"480\" height=\"270\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/storyful-national-unicorn-day-HULqwwF5tWKznstIEE\">via GIPHY</a></p>";

                echo ($_GET['type'] == "human" ? $human : ($_GET['type'] == "cat" ? $cat : $unicorn))

            ?>
        </div>
       
    </section>

</body>
</html>