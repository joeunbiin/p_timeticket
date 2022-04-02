<?php 
    session_start();
    if ( isset($_SESSION["userid"]) ) {
        $userid = $_SESSION["userid"];
    } else {
        $userid = "";
    }

    if ( isset($_SESSION["username"]) ) {
        $username = $_SESSION["username"];
    } else {
        $username = "";
    }

?>

<header id="header">
    <div class="inner">
        <div class="menu">
           <img src="images/menu.png" alt="메뉴열기">
        </div>
        <div id="navWrap">
            <nav id="menu_open">
            <div class="member">
                <div class="loginbox">
                    <?php
                        if (!$userid) {
                    ?>  
                        <div class="icon"><i class="far fa-heart"></i></div>
                        <div class="user">
                            <div class="inbtn loginbtn fst"><a href="login.php">로그인</a>이 필요합니다.</div>
                            <div class="inbtn joinbtn"><a href="join.php" class="ubtn"><i class="fas fa-chevron-right"></i> 회원가입</a></div>
                        </div>
                    <?php
                        } else {
                            $logged = $username."(".$userid.")님 환영합니다.";
                    ?> 
                        <div class="icon"><i class="fas fa-heart"></i></div>
                        <div class="user">
                            <div class="inbtn loginbtn"><?=$logged?><br><a href="logout.php" class="ubtn"><i class="fas fa-chevron-right"></i> 로그아웃</a></div>
                            <div class="inbtn joinbtn"><a href="join_modify.php" class="ubtn"><i class="fas fa-chevron-right"></i> 정보수정</a></div>
                        </div>
                    <?php
                        }
                    ?>  
                </div>
            </div>
                <div class="menubox">
                    <ul class="mb_1">
                        <li><a href="info_sub1.php">연극</a></li>
                        <li><a href="info_sub2.php">뮤지컬</a></li>
                        <li><a href="info_sub3.php">콘서트</a></li>
                        <li><a href="info_sub4.php">가족·아동</a></li>
                        <li><a href="info_sub5.php">전시회</a></li>
                        <li><a href="info_sub6.php">체험·여가</a></li>
                    </ul>
                    <ul class="mb_2">
                        <li><a href="notice.php">공지</a></li>
                        <li><a href="event.php">이벤트</a></li>
                        <li><a href="sale.php">Time Sale</a></li>
                        <li><a href="post.php">생생한 후기</a></li>
                        <li><a href="check.php">예매조회</a></li>
                    </ul>
                </div>
                <div class="run">
                    <span><p>월-금</p> : 10:00 ~ 18:00</span>
                    <span><p>점심시간</p> : 12:30 ~ 13:30</span>
                    <span>주말·공휴일 <p>휴무</p></span>
                </div>
                <div class="tel">
                    <a href="tel:1599-3089"><i class="fas fa-phone-alt"></i> 1599-3089</a>
                </div>
                <div id="menu_close" class="menu_close">
                    <img src="images/close.png" alt="메뉴닫기">
                </div>
            </nav>
        </div>

        <h1 class="logo">
            <a href="index.php"><img src="images/logo.png" alt="타임티켓"></a>
        </h1>

        <div class="search">
            <img src="images/search.png" alt="검색">
        </div>
        <div class="search_open">
            <div class="searchbox">
                <div class="cf">
                    <input type="text" id="searchct" placeholder="검색어를 입력하세요.">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <button class="close"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
</header>