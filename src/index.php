<?php
    if (isset($_POST['firstname'])) {
        echo '<div id="result">' . $_POST['firstname'] . ' - ' . $_POST['lastname'] . '</div>';
        die;
    }


?>


<html>
    <head></head>
    <title>Focking page de test</title>
    <body>
        <form method="post">
            <label for="firstname">Nom</label>
            <input type="text" name="firstname" id="firstname" />

            <label for="lastname">Prenom</label>
            <input type="text" name="lastname" id="lastname" />

            <input type="submit" value="Envoyer" id="submit" />
        </form>
    </body>
</html>
