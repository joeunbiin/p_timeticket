<?php
    $cnum = $_GET["cnum"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
    $sql = "delete from mobcomment where cnum='$cnum'";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
    <script>
        location.href='qna_view.php?num=$num&page=$page';
    </script>
    "





?>