<!DOCTYPE html>
<html lang="en">
  
<?php include 'sbar.php';?>

<head>
    <Style>
        .poz {
            background-image: url('go.jpg');
            width: 100%;
            height: 100%;
        }
     
        
        .btn {
            border-radius: 50%;
            width: 140px;
            padding: 5px;
        }
        
        .card-body {
            position: absolute;
            bottom: 20px;
            /* go buta nagore */
            background-color: black;
            color: #f2f2f2;
            padding-left: 5px;
            padding-right: 5px;
            float: right;
            margin: 30px;
            left: 1050px !important;
            /* da go buta na desno kolku PX SAKAS */
        }
        
        .reg {
            position: absolute;
            bottom: 540px;
            /* go buta nagore */
            background-color: #f2f2f2;
            color: #333;
            float: left;
            margin: 20px;
            right: 1225px !important;
        }
        
        .lg {
            position: absolute;
            bottom: 540px;
            /* go buta nagore */
            background-color: #f2f2f2;
            color: #333;
            float: left;
            margin: 20px;
            right: 1155px !important;
        }

        .prva{
	display:inline-block;	
		vertical-align:1px;
}

form.searcho {
    display: inline-block;
}
form.searcho label{
    color:white;
}

    </Style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"   href="stefi.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Почетна страница STEFI-KRIS</title>
</head>

<body>
   

    <div class="topnavs">

       
    <a>  <form class="searcho" method="post">
            <label>Search</label>
            <input type="text" name="search">
            <input type="submit" name="submit">
                
            </form> </a>
        <a href="http://localhost/stefikris/cenovnik.html"> Ценовник </a>
        <a href="http://localhost/stefikris/zanas.html">За нас</a>
        <a href="http://localhost/stefikris/contact.html">Контакт</a>
        <a class="active" href="http://localhost/stefikris/pocetna.html#about">Почетна</a>
        
       

    </div>



    <div class="containers">
        <img src="cetkanew.jpg " alt="Norway " style="width:100%; height:520px;">
        <div class="reg">
            <a href="http://localhost/stefikris/register.php">
                <button type="button">Register</button>
            </a>
        </div>
        <div class="lg">
            <a href="Login.php">
                <button type="button">Login</button>
            </a>
        </div>

        <div class="card" style="width: 600px;">
            <!-- za levo desno nad slikata 80 rem-->
            <div class="card-body">
                <h5 class="card-title">KOНТАКТИРАЈТЕ НЕ</h5>
                <p class="card-text"> Доколку сакате да дознаете подетални информации за нас кликнете на копчето "Дознај повеќе"</p>
                <a href="http://localhost/stefikris/contact.html"> <input type="submit" name="submit" value="Дознај повеќе" class="btn btn-primary"></a>

            </div>
        </div>

        <div class="top-lefts ">
            <hr class="linija ">
            <h3>
                Фризерско козметичко студио STEFI-KRIS
            </h3>
            <hr class="linija ">
        </div>

        <table style="background-color:#333;" width="100%">
            <tr>
                <td>
                    <a style="color:#f2f2f2" href="http://localhost/stefikris/frizuri.html">
                        <kbd> Овде погледнете ги нашите слики од фризури </kbd>
                    </a>
                </td>

                <td>
                    <a style="color:#f2f2f2;" href="http://localhost/stefikris/nokti.html "><kbd>Овде погледнете ги нашите слики од нокти</kbd> </a>
                </td>
            </tr>
        </table>
    </div>
    <marquee style="background-color:#333; ">
        <h5 style="color:hotpink ">Дозволете да се погрижиме за вашиот изглед !</h5>
    </marquee>






</body>

</html>

</html>