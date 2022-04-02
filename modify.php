<?php 
$id = $_POST["id"];
$pw = $_POST["pw"];
$irum = $_POST["irum"];
$tel = $_POST["tel"];
$num = $_GET["num"];

$con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
$sql = "update mobticket set id='$id', pass='$pw', irum='$irum', tel='$tel' where num='$num'";
mysqli_query($con, $sql);
mysqli_close($con);

session_start();
$_SESSION["userid"] = $id;
$_SESSION["username"] = $irum;

echo "<script> location.href = 'index.php' </script>";

?>


