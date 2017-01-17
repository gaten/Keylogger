<?php 
/*
  creazione di un database con MySQLi.
  La prima operazione richiesta sarà quella relativa alla definizione
  del blocco dei parametri per la connessione
*/
// nome di host
$host = "localhost";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "";
// nome database
$db = "DATABASE_NAME";

// stringa di connessione al DBMS
// istanza dell'oggetto della classe MySQLi
$connessione = new mysqli($host, $user, $password, $db);

// verifica su eventuali errori di connessione
if ($connessione->connect_errno) {
    echo "Connessione fallita: ". $connessione->connect_error . ".";
    exit();
}

// recupero il dato inviato in POST
$info = $_POST['datainput'];

$sql = "INSERT INTO streaminfo(text) VALUES('".$info."')";
if ($connessione->query($sql) === TRUE) {
	echo "Query eseguita correttamente";
} else {
	echo "Errore";
}

$connessione->close();
?>