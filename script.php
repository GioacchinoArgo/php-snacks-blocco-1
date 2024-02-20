<?php

//TODO COSE DA FARE - SCALETTA
//~ 1. Raccogliere gli elementi con il metodo GET
//~ 2. Validare l'età assicurandosi che sia maggiore di zero e che venga effetivamente passata come un numero e non come una stringa tramite la funzione is_numeric.
//~ 3. Validare il nome assicurandosi che sia più lungo di 3 caratteri, verificando anche la lunghezza tramite mb_strlen, nel caso vengano inseriti caratteri diversi -
//~ - che occupano più byte, e il trim per evitare che eventuali spazi influiscano nella conta dei caratteri.
//~ 4. Validare la mail assicurandosi che contenga un '.' e una '@' tramite la funzione str_contains.
//~ 5. Creare una variabile per confermare se tutti e tre i campi richiesti sono stati riempiti.
//~ 6. Stampare il messaggio di 'Accesso Riuscito' in caso di successo oppure 'Accesso Negato' in caso di fallimento.

    // ------------------------------------------ //

//# RACCOLGO GLI ELEMENTI

//* - 1

$age = $_GET['age'];
$name = $_GET['name'];
$email = $_GET['email'];

//# EFFETIVO SVOLGIMENTO

//* - 2 / - 3 / - 4

$is_age_valid = is_numeric($age) && $age > 0;
$is_name_valid = mb_strlen(trim($name)) > 3;
$is_email_valid = str_contains($email, '@') && str_contains($email, '.');


$is_form_invalid = !$is_age_valid || !$is_name_valid || !$is_email_valid;

$message = $is_form_invalid ? 'Accesso Negato' : 'Accesso Riuscito';

echo $message;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>