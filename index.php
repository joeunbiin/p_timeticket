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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
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

        <section id="container">
            <div id="content" class="maincontent">
                <div class="notify">
                    <a href="#">[공지] 코로나19 재확산으로 인한 환불 공제금 면제 안내</a>
                    <a href="#">[당첨자발표] 연극 러브액츄얼리 초대이벤트 (5.10~5.12)</a>
                    <a href="#">[OPEN] 인기웹툰 원작 공연 '안나라수마나라' in 대구</a>
                    <a href="#">[공지] 타임티켓 블로그 리포터 6기를 모집합니다! (~6.23)</a>
                    <a href="#">[소식] 작업의 정석(강남) 이번 주 스페셜가 - 천.원!</a>
                </div>
                <div class="slide_group">
                    <div class="slide slide1"><img src="images/banner1.jpg" alt=""></div>
                    <div class="slide slide1"><img src="images/banner2.jpg" alt=""></div>
                    <div class="slide slide1"><img src="images/banner3.jpg" alt=""></div>
                    <div class="slide slide1"><img src="images/banner4.jpg" alt=""></div>
                    <div class="slide slide1"><img src="images/banner5.jpg" alt=""></div>
                    <div class="slide slide1"><img src="images/banner6.jpg" alt=""></div>
                </div>
                <div class="main_area">
                    <div class="mwrap">
                        <div class="set">
                            <div class="info">
                                <a href="info.php"><i class="fas fa-ticket-alt"></i> &nbsp;티켓예매</a>
                            </div>
                            <div class="rwrap">
                                <div class="sale">
                                    <a href="sale.php"><i class="fas fa-percentage"></i> &nbsp;Time Sale</a>
                                </div>
                                <div class="post">
                                    <a href="post.php"><i class="far fa-comments"></i> &nbsp;생생한 후기</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="mwrap">
                        <div class="set">
                            <div class="lwrap">
                                <div class="notice">
                                    <a href="notice.php"><i class="fas fa-bullhorn"></i> &nbsp;공지</a>
                                </div>
                                <div class="event">
                                    <a href="event.php"><i class="far fa-grin-stars"></i> &nbsp;이벤트</a>
                                </div>
                            </div>
                            <div class="check">
                                <a href="check.php"><i class="far fa-calendar-check"></i> &nbsp;예매조회</a>
                            </div>
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