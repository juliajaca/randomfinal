<!-- PHP 7-->
<?php 
    require_once 'php/models/Lista.php';       

$lista= new Lista('localhost' , 'root', '', 'random');


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Randomizer</title>

    <!-- LINKS EXTERNOS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome -->
</head>
<body>
    
<!-- HEADER -->

    <header class="container">
        <h1>El randomizer 3000.1</h1>
    </header>



<!-- Main -->
<main>
<div class="container lists">
            <ul>
                <?php 
                    $lista->drawRandomList($lista->arrayGente);
                ?>
            </ul>
    </div>
</main>

</body>
</html>