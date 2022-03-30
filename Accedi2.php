<?php
// Inserite qui i dati del vostro database
$servername = "";
$username = "";
$dbpass = "";
$dbname = "";

// Connessione col database
$conn = mysqli_connect($servername, $username, $dbpass,$dbname);

// Verifica la connessione al database
if (!$conn)
    die("Errore di connessione: " . mysqli_connect_error());

echo "Connessione con $dbname stabilita!<br>";

$name = $_REQUEST["username"];
$password = $_REQUEST["password"];

// Preparo la query
$query = "SELECT username, password FROM tabella_dati_accesso WHERE username='$name'";

// Invio la query
$result = mysqli_query($conn,$query); 

// Verifica che non ci siano stati errori
if (!$result)
    die("Errore nella query: " .mysqli_error($conn));

// $num contiene il numero di record in tabella selezionati dalla query
$num = mysqli_num_rows($result); 

// L'utente non è presente nel db
if ($num == 0) 
	die ("Utente di nome $name non presente!"); 

    // $row è un vettore associativo con i risultati della query
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(crypt($password,'iuy1287726')!= $row['password']) {
    echo "Errore password!";
}
else {
    header("Location: accesso.php");
}

// Chiude la connessione al database
mysqli_close($conn);
?>