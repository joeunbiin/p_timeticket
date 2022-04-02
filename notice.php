<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://eunbinzz.dothome.co.kr">
    <meta property="og:image" content="images/logo_profile.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="타임티켓">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="마감임박 문화생활 타임티켓">
    <meta property="og:description" content="오늘 뭐하지? 고민하지 마세요! 합리적인 가격으로 문화생활을 즐기세요!">
    <title>마감임박 문화생활 타임티켓</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="images/logo_144.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>
<body>
    <div id="wrap">
        <?php include 'header.php'; ?>

        <section class="noticepage">
            <div class="noticecontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    공지
                </h2>
              <div class="noticebox">
                   <div id="notice_list">
                        <table class="free_notice">
                            <caption>공지</caption>
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
                                $sql = "select * from mobnotice order by num desc";
                                $result = mysqli_query($con, $sql);
                                $total_record = mysqli_num_rows($result);

                                $sql2 = "select * from mobticket where id='$userid'";
                                $result2 = mysqli_query($con, $sql2);
                                $row2 = mysqli_fetch_array($result2);
                                $level = $row2["level"];

                                if(isset($_GET["page"])) {
                                    $page = $_GET["page"];
                                } else {
                                    $page = 1;    // 초기값 1페이지
                                }
                                $scale = 10;     // 한페이지에 10개씩
    
                                // 전체 페이지수($total_page) 계산
                                if ($total_record % $scale == 0) {             // %는 나머지
                                    $total_page = $total_record / $scale;      // /는 몫
                                } else {
                                    $total_page = floor($total_record / $scale) + 1;
                                }
                                $start = ($page-1)*$scale;    // 0~9(<10), 10~19(<20), 20~29(<30), 30~39(<40) ..
                                $number = $total_record - $start;      // 30~21(1), 20~11(2), 10~1(3)
    
                                                                // 마지막 10개가 안되는것들을 위해서
                                for ($i=$start; $i<$page*$scale && $i<$total_record; $i++) {
                                    mysqli_data_seek($result, $i);         // 가져올 레코드로 위치(포인터) 이동
                                    $row = mysqli_fetch_array($result);    // 하나의 레코드 가져오기
                                    $num = $row["num"];
                                    $subject = $row["subject"];
                                    $irum = $row["irum"];
                                    $regist_day = $row["regist_day"];
                                    $hit = $row["hit"];
    
                                    // $sqlcomm = "select * from mobcomment where onum='$num'";
                                    // $resultcomm = mysqli_query($con, $sqlcomm);
                                    // $resultcomm_record = mysqli_num_rows($resultcomm);
    
                                ?>
                                <tr>
                                    <td><?= $number; ?></td>
                                    <td><a href="notice_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?>
                                        <?php 
                                            if($resultcomm_record) {
                                                echo "({$resultcomm_record})";
                                            }                                
                                        ?>
                                    </a></td>
                                    <td><?= $irum; ?></td>
                                    <td><?= $regist_day; ?></td>
                                    <td><?= $hit; ?></td>
                                </tr>
                            <?php    
                                $number--;
                                }
                                mysqli_close($con);
                            ?>
                            </tbody>
                        </table>
                        <ul id="page_num">
                            <?php 
                                for ($i=1; $i<=$total_page; $i++) {
                                    if ($page==$i) {
                                        echo "<li> <b> [{$i}] </b> </li>";
                                    } else {
                                        echo "<li> <a href='notice_list.php?page=$i'> [{$i}] </a> </li>";
                                    }
                                }
                            ?>
                        </ul>
                        <div class="buttons">
                            <?php 
                                if($userid && $level==1) {
                            ?>
                                <button onclick="location.href='notice_form.php'">글쓰기</button>
                            <?php
                                    }  else {
                            ?>
                                <button onclick="alert('권한이 없습니다.')">글쓰기</button>  <!-- 권한이 없는사람 -->
                            <?php
                                } 
                            ?>    
                           
                        </div>
                   </div>
              </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>
    <div id="onlyMobile">
        <img src="images/logo.png" alt="">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="js/index.js"></script>

</body>
</html>