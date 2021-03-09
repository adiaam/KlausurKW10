<?php
$frameworks = array("CakePhp", "Symfony", "ZendFramework", "CodeIgniter", "Laravel");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aufgabe 22</h1>
    <ol>
    <?php
    foreach($frameworks as $framework) {
        echo '<li>'.$framework.'</li>';
    }
    ?>
    </ol>
<?php

    //Aufgabe 24
    $books=["Java"=>"Learn Java in 10 Days","Python"=>"Learn Python while sleeping","ASP.Net"=>"Don't waist your time"];
?>
<h2>Aufgabe 25</h2>
<ul>
<?php
foreach($books as $key=>$book)
    echo '<li><strong>'.$key.'</strong> '.$book.'</li>';
?>
</ul>

</body>
</html>