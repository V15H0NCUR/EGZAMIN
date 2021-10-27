<html>
<head>
<meta charset="utf-8">
<title>Komis samochodowy</title>
<link rel="stylesheet" href="auto.css" type="text/css" />
</head>

<body>
<div id="gora"><h1>SAMOCHODY</h1></div>
<div id="lewo">
<h2>Wykaz samochodów</h2>
<?php raz() ?>
<h2>Zamówienia</h2>
<ul>
      <?php 

      dwa(); 

      ?>
</ul>
</div>
<div id="prawo">
<h2>Pełne dane: Fiat</h2>
      <?php
      trzy();
      ?>
</div>
<div id="dol">
<table id="tabela">
<tr>
      <td id="td"><center><a href="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2016%2F09%2Fscreen-shot-2016-09-07-at-10-19-15-am-2000.jpg">Kwerendy
    </center></td> <td id="td"><center>Autor Maxymilian Raczkowski<center></td> <td id="td"><center><img src="auto.png"></center></td>
   </tr>


</table></div>
</body>
</html>

<?php
function raz()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT id, marka, model FROM samochody";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
        echo"<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
    }
    mysqli_close($conn);
}

function dwa()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT samochody_id, klient FROM zamowienia";
    $res=mysqli_query($conn,$sql);
 
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<li>".$row['samochody_id']." ".$row['klient']."</li>";
    }
    mysqli_close($conn);
}

function trzy()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT id,marka,model,rocznik,kolor,stan FROM samochody WHERE marka='fiat';";
    $res=mysqli_query($conn,$sql);
 
    while($row=mysqli_fetch_assoc($res))
    {
        echo $row['id']." / ".$row['marka']." / ".$row['model']." / ".$row['rocznik']." / ".$row['kolor']." / ".$row['stan']." /<br> ";
    }
    mysqli_close($conn);
}

?>