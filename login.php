<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"   href="stefi.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="pocetna.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="topnavs">
        <a href="http://localhost/stefikris/cenovnik.html"> Ценовник </a>
        <a href="http://localhost/stefikris/zanas.html">За нас</a>
        <a href="http://localhost/stefikris/contact.html">Контакт</a>
        <a class="active" href="http://localhost/stefikris/pocetna.html#about">Почетна</a>

    </div>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<center><hr><h2 style="background-color:#333"> Login </h2> <hr><br>
<p> 
Username: <input type="text" name="user" /> <br> <br>
Password: <input type="password" name="pass" /> <br> <br>
Login: <input type="submit" name="sub" value="Login"/> <br></p>

</form>

<?php
session_start(); // KREIRANJE NA SESIJA
if(isset($_POST['sub'])) // kopce za LOGIN
{
$user = $_POST['user']; // promenlivi za user
$pass = $_POST['pass']; // promenlivi za password

$servername = "localhost";
  $username = "kris";
  $password = "kris";
  $dbname = "stefikris"; // ime na BAZATA kreirana

$salt1 = "gmh*!";
$salt2 = "op@&";
$token = hash('ripemd128',"$salt1$pass$salt2",FALSE); // za SIFRIRAN PW 

$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error()); // Check connection so die se proveruva dali e uspesna KONEKCIJATA ako ne e ke ja prekine 
} 

$sql = "SELECT * FROM registracija WHERE username ='$user'"; // username od tabelata se vensuva od $user

$result = mysqli_query($conn, $sql); 

$red = mysqli_fetch_row($result);// nema while kaj $result bidejki proveruvame za EDEN KORISNIK

if   ($token == $red[4]) //promenlivata $token e za SIFRIRAN PW
{
  $_SESSION['firstname'] = $red[1]; //kreiranje sesii za IME
  $_SESSION['surname'] = $red[2]; // prezime
  $_SESSION['uname'] = $red[3]; // username
  $_SESSION['kiko'] = "наш нов клиент на страницата СТЕФИ-КРИС !";
  header("Location: polog.php"); //otvoranje na sledno.php
}
else
  {
  echo "<h4>Нема таков корисник најавено со такво корисничко име ! </h4>";
  }
  echo"<br>"; echo"<br>"; echo"<br>";
  mysqli_close($conn);//zatvaranje na konekcija
}
?>
<a href="register.php"> Регистрирајте се овде, доколку не сте регистрирани на страницата </a>
<Br> <br> <Br> <br> <br> <br> <br>
</center>
<div class="kontaktirajte">    
        <center>  <h5 style="color:hotpink">
             <b>КОНТАКТИРАЈТЕ НЕ ПОДОЛУ </b></h5>
        </div> </center>
       <div class="row">
          
           <div class="col-sm-4" style="background-color:#333; height: 160px; color:#f2f2f2">
            <hr> <span class="lokacija"> </span>
       <p style="font-size: 14px;" class="lok"><a style="color:hotpink; font-size: 15px;"> </a> Свети Николе, ул.Младинска бр.48 </p> 
               <hr> <span class="broj"></span>
       <p style="font-size: 14px;" class="tel"><a style="color:hotpink;font-size:15px;"> </a>+389 71/381/323 </p>
               <hr> <span class="domasen"></span>
              <p class="tt" style="font-size: 14px;">032/ 441/232</p>
           </div>
   
   
   <div class="col-sm-4" style="background-color:#333; color:#f2f2f2">
       <hr> <span class="rabvreme"></span>
       <p style="font-size: 14px;" class="time">Пон-Петок: 14:00-20:00/Сабота: 10:00-18:00 </p> 
               <hr> <span class="email"></span>
       <p style="font-size: 14px;" class="emailadress">jasminkagosevska@yahoo.com </p>
              </div>
   
   
           <div class="col-sm-4" style="background-color:#333; color:#f2f2f2">
               <a href="https://www.facebook.com/STEFI-KRIS-DOOEL-553964794781041/"> <span class="fb"></span> </a> <br>
               <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fp%2FCSbvjFsMRur%2F%3Futm_medium%3Dcopy_link%26fbclid%3DIwAR0EabqS7MMjubCN2kf3IvHe-4n37aARQ_LGqUUVmpACLCr7zFPUw94U7yA&h=AT3CokWAwjvKNnfpoPmqPvvbGRiz31EfV59An5tVecrPPSY_a3ScnKHoqA_Df3SSPYfIyWCXfflIbIsvUkTEudL1cajUuLMrWn9yrEp0zkrpa-zQNfVlicJuKzKsTThPS-lFUg">
               <span class="instagram"></span> </a>   
           </div>
   
   
       </div>


</body>
</html>