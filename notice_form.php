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
                    공지 <i class="fas fa-chevron-right"></i> 글쓰기
                </h2>
            <div class="noticebox">
                <form action="notice_insert.php" name="notice_form" method="post" enctype="multipart/form-data">
                <ul id="notice_form">
                        <li>
                            <span><input type="text" name="subject" id="irum"></span>
                        </li>
                        <li>
                            <span><textarea name="content" id="cont"></textarea></span>
                        </li>
                    </ul>
                    <div class="buttons">
                        <button type="button" onclick="check_input()">전송</button>
                        <button type="button" onclick="location.href='notice_list.php'">목록</button>
                    </div>
                </form>
            </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/index.js"></script>
    <script>
        function check_input(){
            if (!document.notice_form.subject.value) {
                alert("제목을 입력하세요!");
                document.notice_form.subject.focus();
                return false;
            }
            if (!document.notice_form.content.value) {
                alert("내용을 입력하세요!");
                document.notice_form.content.focus();
                return false;
            }
            document.notice_form.submit();
        }
    </script>
</body>
</html>