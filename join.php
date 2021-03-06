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

        <section class="joinpage">
            <div class="joincontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    회원가입
                </h2>
                <div class="outer">
                    <form name="member_form" action="member_insert.php" method="post">
                        <legend>회원가입</legend>
                        <p><label for="id">아이디</label><input type="text" id="id" name="id">
                            <a id="idchk" href="#none" onclick="check_id()">중복체크</a>
                        </p>
                        <p><label for="pw">비밀번호</label><input type="password" id="pw" name="pw"></p>
                        <p><label for="pwok">비밀번호확인</label><input type="password" id="pwok" name="pwok"></p>
                        <p><label for="irum">이름</label><input type="text" id="irum" name="irum"></p>
                        <p><label for="tel">전화번호</label><input type="text" id="tel" name="tel"></p>
                        <p><button type="button" onclick="chk_input()">가입</button><button type="button" onclick="chk_reset()">취소</button></p>
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


    <script src="js/index.js"></script>
    <script>
        function check_id() {

            window.open('member_check_id.php?id='+document.member_form.id.value, '', 'top=100, left=100, width=200, height=200, scrollbars=no, resizable=yes');
            document.querySelector('#idchk').classList.add('on')
            
        }

        function chk_input() {
            if ( !document.querySelector('#idchk').classList.contains('on') ) {
                alert('아이디 중복체크를 해주세요.')
                return false;
            }
            document.member_form.submit();
        }

        function chk_reset() {
            document.member_form.id.value = "";
            document.member_form.pw.value = "";
            document.member_form.pwok.value = "";
            document.member_form.irum.value = "";
            document.member_form.tel.value = "";
            document.member_form.id.focus();
            return false;
        }


    </script>


</body>
</html>