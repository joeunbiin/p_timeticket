<meta charset="utf-8">
<!-- 
    create table mobnotice (
        num int not null auto_increment,
        id char(20) not null,
        irum char(20) not null,
        subject char(200) not null,
        content text not null,
        regist_day char(20) not null,    
        hit int not null,                 
        primary key(num)
    );
-->
<?php 

session_start();
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];
} else {     // 값이 없다면
    $userid = "";
}
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {     // 값이 없다면
    $username = "";
}

$subject = $_POST["subject"];
$content = $_POST["content"];

$subject = htmlspecialchars($subject, ENT_QUOTES);       // 포함된 특수문자들이 엔티틱코드로 바뀜
$content = htmlspecialchars($content, ENT_QUOTES);

$regist_day = date("Y-m-d (H:i)");
$upload_dir = './data/';


$con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
$sql = "insert into mobnotice(id, irum, subject, content, regist_day, hit) ";
$sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0)";
mysqli_query($con, $sql);   // 실제로 실행하는
mysqli_close($con);

echo "<script>
    location.href='notice_list.php'
</script>";



?>