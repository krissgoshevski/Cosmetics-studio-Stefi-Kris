<!DOCTYPE html>
<html lang="en">
<head>
<style> 
.rg {
  color:aqua;
}

.inputi{
  
}
.sr{

}

.fn{

}

.us{
 
}


.pw{

}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"   href="stefi.css">
<link rel="stylesheet" href="pocetna.css">
    <link rel="stylesheet" href="search.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="topnavs">
        <a href="http://localhost/stefikris/cenovnik.html"> Ценовник </a>
        <a href="http://localhost/stefikris/zanas.html">За нас</a>
        <a href="http://localhost/stefikris/contact.html">Контакт</a>
        <a class="active" href="http://localhost/stefikris/pocetna.html#about">Почетна</a>
</div>

<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<center><hr><h2 style="background-color:#333"> Registration </h2> <hr> <br>
<div class="inputi">
<p style="color:#333"> 
First Name: <input type="text" name="firstname" class="fn"/> <br> <br>
Surname: <input type="text" name="surname" class="sr"/> <br> <br>
Username: <input type="text" name="user" class="us"/> <br> <br>
Password: <input type="password" name="pass" class="pw"/> <br> <br> </div>

<input type="submit" name="sub" value="Register" /></p>
</center>

</form>
<?php

if(isset($_POST['sub']))
{

$firstname = $_POST['firstname'];//promenliva za ime 
$surname = $_POST['surname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$servername = "localhost";
  $username = "kris";
  $password = "kris";
  $dbname = "stefikris";

$salt1 = "gmh*!"; /// sifriran pw 
$salt2 = "op@&";

$token = hash('ripemd128',"$salt1$pass$salt2",FALSE); //sifriran pw 
                                                                      
  $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection

  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error()); //so die se proveruva dali e uspesna KONEKCIJATA ako ne e ke ja prekine 
  } 

  $sql = "INSERT INTO registracija (firstname, surname, username, password) 
  VALUES ('$firstname', '$surname', '$user', '$token')";// ne zabravaj sifriran PW

if (mysqli_query($conn, $sql))  // izvrsuvanje na UPPI
{
  echo "Успешно се регистриравте на нашата страница"; 
} 
else 
{
  echo "Грешка: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); // SE ZATVARA KONEKCIJATA

}
?>
<center><a href="login.php"> После регистрирањето, овде може да се логирате на страницата </a></center>

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