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

        <section id="postpage">
            <div class="postcontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    생생한 후기
                </h2>
                <!-- <div class="postbox">
                    <div class="postlist">
                        <img src="images/post_1.jpg" alt="이벤트1">
                        <div class="postlist_text">
                            <div class="text1">
                                <span>옥탑방 고양이</span>
                                <span>(평점 : 4.9)</span>
                            </div>
                            <div class="text2">
                                <span>jakw***</span>
                                <span>2021-04-12</span>
                                <span>장소: 해피씨어터</span>
                            </div>
                            <div class="text3">
                                <img src="images/trust_5.png" alt="별점5개">
                                <span>매년 한번씩은 꾸준히 보는거지만 그때마다 느껴지는 감정도 다르고 참 색다로운의미로 보고있어요 !</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>
    <div id="onlyMobile">
        <img src="images/logo.png" alt="">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="js/index.js"></script>
    <script src="js/post.js"></script>

</body>
</html>