<?php 

    $badword = $_GET["bad"];
    $stringa = 'Nessuno usa mai Do While, e che cazzo';
    $len_stringa = strlen($stringa);
    
    $ex_stringa = explode(' ', $stringa);
    
    if( in_array ($badword, $ex_stringa)){
        $nuova_stringa = str_replace( $badword, '***', $stringa);
    }
    else{
        $nuova_stringa = 'non ci sono badwords';
    }

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
        <h1> <?php echo $nuova_stringa; ?> </h1>
        <p> <?php echo $stringa; echo ' '.$len_stringa; ?> </p>
    </body>
</html>