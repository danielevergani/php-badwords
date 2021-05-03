<?php 

    $badword = $_GET["bad"];
    $stringa = 'Nessuno usa mai Do Wile, e che cazzo';
    $len_stringa = strlen($stringa);
    
    $ex_stringa = explode(' ', $stringa);
    
    if( in_array ($badword, $ex_stringa)){
        $nuova_stringa = str_replace( $badword, '***', $stringa);
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
        <h1> <?php echo $nuova_stringa; echo ' '.$len_stringa; ?> </h1>
    </body>
</html>