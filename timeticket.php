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

        <section id="timeticketpage">
            <div class="timeticketpagecontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    Time Ticket?
                </h2>
                <div class="installapp">
                    <img src="images/timeticket.png" alt="타임티켓 어플 안내">
                </div>
                <div class="timeticketbox">
                    <div class="howto">
                        <p>문화생활을 즐기는 가장 합리적인 방법</p>
                        <p>미리 고민하지 마세요. 오늘을 즐겨요!</p>
                    </div>
                    <div class="howtobox">
                        <p class="sub_title">
                            문화생활의 혁신, 타임커머스!
                        </p>
                        <p class="sub_text">
                            매일 매일 수 많은 공연이 열리지만, 모든 티켓이 매진이 되는 건 아니잖아요.<br>
                            판매되지 않은 티켓들은 관람 시간이 지나면 결국 종이조각에 불과할 뿐이에요.<br>
                            이렇게 오늘, 내일 시간이 임박한 티켓을 타임티켓은 보다 저렴한 가격에 제공해드리고 있어요 :)
                        </p>
                        <p class="sub_title">
                            마감임박 할인 - 오늘티켓, 내일티켓
                        </p>
                        <p class="sub_text">
                            오늘 뭐하지? 내일 뭐할까? 매일 똑같이 밥-커피-영화로 이어지는 데이트는 이제 그만!<br>
                            따로 찾아보지 않아도 당장 즐길 수 있는 다양한 공연을 확인할 수 있도록 모아두었답니다.<br>
                            오늘티켓 메뉴를 클릭하는 것 만으로도 지금 당장 풍요로운 문화생활을 즐길 수 있어요!
                        </p>
                        <p class="sub_title">
                            예매 할인도 물론, 다양한 정보와 이벤트까지
                        </p>
                        <p class="sub_text">
                            미리 예매하는 티켓은 비싸게 구해야 하나요? 그렇지 않아요. 타임티켓은 예매티켓도 할인가로 제공합니다.<br>
                            또한 쉽게 접하기 힘든 고객분들의 평점, 리뷰는 물론 문화이벤트도 쉽게 접하실 수 있어요!
                        </p>
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