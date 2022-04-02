<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마감임박 문화생활 타임티켓</title>
</head>
<body>
    
    <!-- 
    create table mobticket (
    num int auto_increment not null,
    id varchar(20) not null,
    pass varchar(20) not null,
    irum varchar(20) not null,
    tel varchar(20) not null,
    level int,
    primary key(num)
    ); 
-->
<?php 
$id = $_POST["id"];
$pw = $_POST["pw"];
$irum = $_POST["irum"];
$tel = $_POST["tel"];

$con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
$sqlid = "select * from mobticket where id='$id'";  // 아이디 중복 조건 검색
$idresult = mysqli_query($con, $sqlid);    // 실행한 결과 담기
$record_num = mysqli_num_rows($idresult);  // 조건에 맞는 레코드 갯수가 몇개인지

if ($record_num) {
    echo "<script> 
        alert('중복된 아이디입니다.'); 
        history.go(-1); 
        </script>";
    exit;
}

$sql = "insert into mobticket (id, pass, irum, tel) values('$id', '$pw', '$irum', '$tel')";

mysqli_query($con, $sql);  // 입력
mysqli_close($con);        // 입력하고 나면 닫기

echo "<script> location.href = 'index.php' </script>";  // 정상적으로 회원가입되면 메인페이지로 돌아가도록

?>


</body>
</html>