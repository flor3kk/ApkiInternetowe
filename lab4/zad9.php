<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai1_lab4";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['mail'])) { //czy jest uzupelniony mail
        $emailFilter = $_GET['mail'];
        $sth = $conn->prepare("SELECT id, email, offer_type, budget, comment FROM questions WHERE email = ?");
        $sth->execute([$emailFilter]);
    } else {
        $sth = $conn->prepare("SELECT id, email, offer_type, budget, comment FROM questions");
        $sth->execute();
    }
    $result = $sth->fetchAll();

} catch (PDOException $e) {
    echo "Fail: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="pl" data-bs-theme="">
  <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zad9</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div id="inne" class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Zapytania o ofertę</h2>
                <!-- formularz do wykonaniai zadadnia! -->
                <form method="GET" action=""> 
                        <label for="email" >Adres email</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="name@example.com" name="mail">
                            <input type="submit" class="btn btn-primary" value="Filtruj">
                </form>
                <!-- Wygenerować tabelkę HTML zawierającą wcześniej pobrane dane -->
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">email</th>
                            <th scope="col">typ oferty</th>
                            <th scope="col">budzet</th>
                            <th scope="col">Komentarz</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $elem) {?>
                            <tr>
                            <td scope="row"><?php echo $elem['id'] ?></td>
                            <td scope="row"><?php echo $elem['email'] ?></td>
                            <td scope="row"><?php echo $elem['offer_type'] ?></td>
                            <td scope="row"><?php echo $elem['budget'] ?></td>
                            <td scope="row"><?php echo $elem['comment'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

