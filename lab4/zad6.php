<?php
print_r($_REQUEST);
print('<br>');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Zebrać wartości z pól formularza
  $email = $_POST['adresMailowy'];
  $offer = $_POST['opcja'];
  $budget = $_POST['budzet'];
  $comm = htmlspecialchars($_POST['Komentarz'], ENT_QUOTES);
  $sql = "";
  // ...

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ai1_lab4";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully. <br>";

    // Przygotować polecenie insert i wstawić rekord do tabeli
    $sql = "INSERT INTO questions (email, offer_type, budget, comment) VALUES (?,?,?,?)";
    $stmt= $conn->prepare($sql);
    // "$stmt -> $conn -> prepare(INSERT INTO questions (email, offer_type, budget, comment) VALUES (?,?,?,?)");
    // $stmt -> bindParam(1, $email)...;
    // $stmt -> execite();
    $stmt->execute([$email, $offer, $budget, $comm]);
    // ...

    echo "New record created successfully. <br>";
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
}

} else {
    echo "Method not supported. <br>";
}
