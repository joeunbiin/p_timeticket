<?php 

$page = $_GET["page"];
$num = $_GET["num"];

$con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
$sql = "delete from mobnotice where num='$num'";
mysqli_query($con, $sql);
mysqli_close($con);



echo "
    <script>
        location.href='notice_list.php?page=$page';
    </script>
";





?>