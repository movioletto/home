<?PHP
    // RECUPERO I PARAMETRI DA PASSARE ALLA FUNZIONE PREDEFINITA PER L'UPLOAD
    $cartella = '../upload/';
    $percorso = $_FILES['miofile']['tmp_name'];
    $nome = $_FILES['miofile']['name'];
    // ESEGUO L'UPLOAD CONTROLLANDO L'ESITO
    if (move_uploaded_file($percorso, $cartella . $nome))
    {
        print "Upload eseguito con successo"; 
    }
    else
    {
        print "Si sono verificati dei problemi durante l'Upload"; 
    }
?>
