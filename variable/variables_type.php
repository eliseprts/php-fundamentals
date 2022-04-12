<html>

    <head><title>Variables</title></head>

    <body>
        
    <section>
        <?php
            $name = "Elise";
            $age = 29;
            $eyes_color = "brown";
            $family = array(
                0 => "Hervé",
                1 => "Marie-Anne",
                2 => "Elise",
                3 => "Mathilde"
            );
            $hungry = true;
        ?>
        <p>Hi! My name is <?php echo $name; ?>.</p>
        <p>I am <?php echo $age; ?>.</p>
        <p>My eyes are <?php echo $eyes_color; ?>.</p>
        <p>The first person in my family is <?php echo $family[0]; ?>.</p>
    </section>

    </body>

</html>