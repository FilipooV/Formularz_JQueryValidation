<?php
$serwer = 'localhost';
$db = 'formularz';
$user = 'root';
$password = '';

$polaczenie = mysqli_connect($serwer, $user, $password, $db);
if (!$polaczenie) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

echo "Połączenie udane!";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = $_POST['InputImie'];
    $nazwisko = $_POST['InputNazwisko'];
    $data_uro = $_POST['InputDate'];
    $email = $_POST['InputEmail'];
    $telefon = $_POST['phInputNumerTelefonuone'];
    $wojewodztwo = $_POST['InputWojewodztwo'];
    $plec = $_POST['Plec'];
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    $query = "INSERT INTO tabela (imie, nazwisko, data_uro, email, telefon, wojewodztwo, plec, newsletter) VALUES ('$imie', '$nazwisko', '$data_uro, '$email', '$telefon', '$wojewodztwo', '$plec', '$newsletter')";

    if (mysqli_query($polaczenie, $query)) {
    echo "Dane zostały pomyślnie zapisane do bazy danych.";
    } 
    else {
    echo "Błąd: " . mysqli_error($polaczenie);
    }
    
}
    mysqli_close($polaczenie);
?>