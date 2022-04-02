<?php 

$page = $_GET["page"];
$num = $_GET["num"];

$subject = $_POST["subject"];
$content = $_POST["content"];

$con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
$sql = "update mobnotice set subject='$subject' , content='$content' where num='$num'";
mysqli_query($con, $sql);
mysqli_close($con);

echo "
    <script>
        location.href='notice_list.php?page=$page';
    </script>
";





?>