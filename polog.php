<?php
session_start(); //kreiranje na sesija 
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet"   href="stefi.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<div class="topnavs">
        <a href="http://localhost/stefikris/cenovnik.html"> Ценовник </a>
        <a href="http://localhost/stefikris/zanas.html">За нас</a>
        <a href="http://localhost/stefikris/contact.html">Контакт</a>
        <a class="active" href="http://localhost/stefikris/pocetna.html#about">Почетна</a>
</div>
<?php
echo"<center> ";echo "<br>";
echo "<h3>Здраво господине/госпоѓо" . " " . $_SESSION['firstname'] . " " . $_SESSION['surname'] . "<br>" . "<br> </h3>";
echo "<h3> Вие сте логирани како " . $_SESSION['kiko'] . "</h3>";
echo "<br>";
echo"</center>";
?>

</body>
</html>