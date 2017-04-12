<html><head><meta charset="utf-8"></head>
<body>
<?php
$link = mysqli_connect("localhost", "conexio1_charly", "pL*rpdu;&@gR");
mysqli_select_db($link, "pruebaintecap");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result = mysqli_query($link, "SELECT * FROM cliente");
mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result);
echo "- Id area: ".$extraido['idarea']."<br/>";
echo "- Nombre: ".$extraido['nombrearea']."<br/>";
//echo "- Direcci�n: ".$extraido['Direccion']."<br/>";
//echo "- Tel�fono: ".$extraido['Telefono']."<br/>";
mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>