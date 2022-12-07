<?php
    $title = "I`m GROOD";

    $content = file_get_contents("lesson1star_html.html");

    $content = str_replace("{{title}}", $title, $content);

    echo($content);

?>


