<?php
require("db.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <ul>
            <?php
            $pages = array("Nieuws", "Sport");
            $subpaginas = array(
                array("Voorpagina", "Laatste Nieuws", "Video's", "Binnenland"),
                array("Voorpagina", "Video's", "Voetbal")
            );
            for ($i = 0; $i < count($pages); $i++) {
                echo "<li>";
                echo "<div class=\"dropdown\">";
                echo "<a href=\"\">" . $pages[$i] . "";
                echo "<i class=\"bi bi-chevron-down\" style=\"font-size: 0.5em; margin-left: 4px;\"></i>";
                echo "</a>";
                echo "<div class=\"dropdown-content\">"; 
                echo "<ol>";
                for ($a=0; $a < count($subpaginas[$i]); $a++) {
                    echo "<li><a href=\"\">" . $subpaginas[$i][$a] . "</a></li>";  
                }  
                echo "</ol>";
                echo "</div>";
                echo "</li>";
            }
            ?>
        </ul>
    </nav>
</body>

</html>
