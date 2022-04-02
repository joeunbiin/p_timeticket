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
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="images/logo_144.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include 'header.php'; ?>

        <section id="section" class="loginpage">
            <div class="logincontent row">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    로그인
                </h2>
                <div class="outer">
                    <form action="login_ok.php" method="post" name="login">
                        <legend>로그인</legend>
                        <div>
                            <p>
                                <label for="id">아이디</label>
                                <input type="text" id="id" name="id">
                            </p>
                            <p>
                                <label for="pw">비밀번호</label>
                                <input type="password" id="pw" name="pw">
                            </p>
                        </div>  
                        <button type="button" onclick="chk_input()">로그인</button>
                    </form>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>
    <div id="onlyMobile">
        <img src="images/logo.png" alt="">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/index.js"></script>
    <script>
        function chk_input() {
            if ( !document.login.id.value ) {
                alert("아이디를 입력하세요.");
                document.login.id.focus();
                return false;
            }
            if ( !document.login.pw.value ) {
                alert("비밀번호를 입력하세요.");
                document.login.pw.focus();
                return false;
            }
            document.login.submit();
        }
    </script>


</body>
</html>