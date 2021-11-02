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
            for ($i = 0; $i < count($pages); $i++) {
                echo "<li>
                        <div class=\"dropdown\">
                        <a href=\" \">" . $pages[$i] . "
                            <i class=\"bi bi-chevron-down\" style=\"font-size: 0.5em; margin-left: 4px;\"></i>
                        </a>
                        <div class=\"dropdown-content\">
                            <div class=\"dropdown-item\">
                                <a>hello</a>
                                <a>test</a>
                            </div>
                        </div>
                        </div>
                    </li>";
            }
            ?>
        </ul>
    </nav>
</body>

</html>