<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stefi.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="topnavs">
<a href="http://localhost/stefikris/cenovnik.html "> Ценовник </a>
<a href="http://localhost/stefikris/zanas.html">За нас</a>
<a href="http://localhost/stefikris/contact.html ">Контакт</a>
<a class="active " href="http://localhost/stefikris/pocetna.html#about ">Почетна</a>
</div>

        <div style="width:100%; height:300px; background:aqua;">
           <center> <h2>Внесените податоци за корисникот се следниве:</h2> </center>
            <div style="text-align:center;">
            <hr>
            <?php
$servername = "localhost";
$username = "kris";
$password = "kris";
$dbname = "stefikris";
                                                                    
$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {
	die("greshka:" . $conn->connect_error);
  }  

           if(isset($_POST['submit']))
           {

               
           $firstname = $_POST['firstname'];
           echo "1. Вашето име е " . $firstname;
           echo "<br>";
   
           $lastname = $_POST['lastname'];
           echo "2. Вашето презиме е " . $lastname;
           echo "<br>";
           
          $country = $_POST['country'];


           if($_POST['country']=="sk")
           {
               echo "3. Вие сте од градот Скопје " ;
           }
   
           if($_POST['country']=="svn")
           {
           echo "3. Вие сте од градот Свети Николе " ;}
   
           if($_POST['country']=="berovo"){
           echo "3. Вие сте од градот Берово " ; }
   
           if($_POST['country']=="stip") {
           echo "3. Вие сте од градот Штип " ;}
           echo"<br>";
           
           $tekst = $_POST['subject'];
           {
           echo "4. Внесениот текст е: " . $tekst;
           }
           
    $sql = "INSERT INTO kont (ime, prezime, grad, tekst) /* za tabelata ime */
    VALUES ('$firstname', '$lastname', '$country', '$tekst')";


if ($conn->query($sql) === TRUE) {
  //echo "Успешно";
  echo '<script>alert("Успешнo")</script>';
} 
else 
{
  echo "Грешка: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT * FROM kont";
if ($result = mysqli_query($conn, $sql)) // ima if bidejki ima poveke atributi /// za da gi pecati na ekran podatocite 
{
         echo " <table border='1px'>"   ;
         echo " <th> ID </th> ";
         echo " <th> IME  </th>  ";
         echo " <th> PREZIME </th> " ;
         echo " <th> GRAD </th> " ;
         echo " <th> TEKST </th> " ;
         echo " </tr>" ;

 while ($row = mysqli_fetch_row($result)) // ima WHILE bidejki proveruvame za poveke atributi i KORISNICI
 { 
   echo " <tr bgcolor='yellow'> " ;
   echo " <td> $row[0] </td> ";
   echo " <td> $row[1] </td> " ;
   echo " <td> $row[2] </td>";
   echo " <td> $row[3]</td> ";
   echo " <td> $row[4] </td> ";
   echo " </tr> ";
 
 }
        echo " </table>";
   mysqli_free_result($result); //  NE ZABRAVAJ //////////////////////////////////////////////
}

mysqli_close($conn); //  zataranje na konekcija 

}
            ?>


        <hr>
        </div>
        </div>
    </body>
</html>