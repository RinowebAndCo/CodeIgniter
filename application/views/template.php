<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
    <head>
        <title>Ma page</title>
    </head>
    <body>

        <header>Ceci est le header</header>

        <div>
            <!-- La vue s'affichera ici -->
            <?php echo $page; ?>
        </div>

        <footer>Ceci est le footer</footer>
    </body>
</html>