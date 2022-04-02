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

        <section id="askpage">
            <div class="askcontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    제휴문의
                </h2>
                <div class="askapp">
                    <p>간단한 절차, 빠른 진행, 정확한 정산</p>
                    <p>타임티켓과 함께하세요!</p>
                </div>
                <div class="askbox">
                    <div class="ask1">
                        <p class="sub_title">티켓판매 프로세스</p>
                        <img src="images/ask_1.png" alt="티켓판매 프로세스">
                        <div class="sub_text">
                            <p>01. 판매신청</p>
                            <span>이메일(<span>help@timeticket.co.kr</span>) 또는 하단 버튼을 클릭하여 간단한 소개와 함께 판매신청을 해 주세요.<br>
                            메일을 보내주시면 담당자가 업무일 기준 24시간 내로 회신을 드립니다.</span>
                            <p>02. 계약체결</p>
                            <span>담당자가 보내드린 계약서의 내용 확인 후 판매 계약이 진행됩니다.</span>
                            <p>03. 티켓등록</p>
                            <span>계약 체결 및 공연자료 송부 후 2~3일 내로 티켓 등록이 완료됩니다.</span>
                            <p>04. 티켓판매</p>
                            <span>티켓판매가 진행되면 관리자 페이지를 통해 판매 현황 확인 및 수량 변경이 가능합니다.</span>
                            <p>05. 정산완료</p>
                            <span>월 정산 또는 공연 종료 후 정산을 진행하며, 10일 이내로 정산이 완료됩니다.</span>
                        </div>
                    </div>
                    <div class="ask2">
                        <p class="sub_title">제휴 프로모션</p>
                            <div class="sub_text">
                                <p>타임티켓은 웹/모바일은 물론 자사의 SNS 채널과 다양한 경로로 고객들과 활발한 커뮤니케이션을 진행하고 있습니다.<br>
                                    제휴를 통해 귀사의 공연을 보다 많은 사람들에게 알려보세요!
                            </div>
                            <img src="images/ask_2.png" alt="제휴 프로모션">
                    </div>
                    <p><button type="button">문의하기</button>
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