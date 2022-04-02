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

        <section id="checkpage">
            <div class="checkpagecontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    예매조회
                </h2>
                <div class="checkbox">
                    <form action="#none" method="post">
                        <fieldset>
                            <legend>예매조회 기본정보</legend>
                            <table>
                                <colgroup>
                                    <col>
                                    <col>
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th><label for="irum">이름</label></th>
                                        <td>
                                        <input type="text" id="irum" name="irum">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="birth">생년월일</label></th>
                                        <td>
                                            <input type="text" id="birth" name="birth" placeholder="생년월일 앞 6자리">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="pwbox">비밀번호</label></th>
                                        <td>
                                            <input type="password" id="pwbox" name="pwbox" placeholder="숫자 4자리">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="hp">휴대전화</label></th>
                                        <td>
                                            <input type="text" id="hp" name="hp" placeholder="'-'없이 입력'">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                        <span>※ 정보 오 입력시 예매 내역 확인/취소 및 티켓 발권이 어려울 수 있으니 다시 한번 확인해주시기 바랍니다.</span>
                    </form>
                    <div class="btn">
                        <button type="submit">확인</button>
                        <button type="reset">취소</button>
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