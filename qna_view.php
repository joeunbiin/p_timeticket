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

         <section class="qnapage">
            <div class="qnacontent">
                <h2 class="pagetitle">
                    <a href="#none" onclick="goprev()">
                        <img src="images/prev.png" alt="이전페이지">
                    </a>
                    1:1 문의 <i class="fas fa-chevron-right"></i> 상세보기
                </h2>
                    <?php 
                        $num = $_GET["num"];
                        $page = $_GET["page"];

                        $con = mysqli_connect("localhost", "eunbinzz", "rladid22!", "eunbinzz");
                        $sql = "select * from mobqna where num='$num'";
                        $result = mysqli_query($con, $sql);

                        $row = mysqli_fetch_array($result);
                        $subject = $row["subject"];
                        $irum = $row["irum"];
                        $regist_day = $row["regist_day"];
                        $content = $row["content"];
                        $id = $row["id"];
                        $nnum = $row["num"];
                        $file_name = $row["file_name"];
                        $file_copied = $row["file_copied"];
                        $file_type = $row["file_type"];
                        
                        $content = str_replace(" ", "&nbsp;", $content);
                        $content = str_replace("\n", "<br>", $content);

                        $hit = $row["hit"];
                        $new_hit = $hit + 1;
                        $sql = "update mobqna set hit='$new_hit' where num='$num'";
                        mysqli_query($con, $sql);

                        $sqlcomm = "select * from mobcomment where onum='$num' order by regist_day";
                        $resultcomm = mysqli_query($con, $sqlcomm);
                        $total_record = mysqli_num_rows($resultcomm);
                        mysqli_close($con);

                    ?>
                    <div class="qnabox">
                        <ul id="view_content">
                            <li>
                                <span><?=$subject?> </span>
                            </li>   
                            <li>
                                <span><?=$content?></span> 
                            </li>
                            <li>
                                <span><?=$irum?></span>
                                <span><?=$regist_day?></span>
                            </li>
                            <li>
                                <p>
                                    <?php 
                                        if ($file_name) {
                                            $file_path = "./data/".$file_copied;
                                            $file_size = filesize($file_path);
                                            echo "첨부파일 : $file_name ({$file_size} Byte)  &nbsp;&nbsp;&nbsp;
                                                    <a href='qna_download.php?file_name=$file_name&file_path=$file_path'>[다운로드]</a>
                                            ";
                                        } else {
                                            $file_path ="";
                                        }
                                    ?>
                                </p>
                            </li>
                            
                        </ul>
                    </div>
                <div class="buttons">
                    <button type="button" onclick="location.href='qna_list.php?page=<?=$page?>'">목록</button>
                    
                    <?php 
                        if($userid) {   // (로그인 했을 경우)
                            if($userid==$id){    // 글쓴사람의 아이디와 로그인한 사람의 아이디가 같으면 -> 수정 삭제 버튼 노출
                    ?> 
                                <button type="button" onclick="location.href='qna_modify_form.php?num=<?=$nnum?>&page=<?=$page?>'">수정</button>
                                <button type="button" onclick="location.href='qna_delete.php?num=<?=$nnum?>&page=<?=$page?>&file_path=<?=$file_path?>'">삭제</button>
                                <!-- <button type="button" onclick="location.href='qna_form.php'">글쓰기</button> -->
                    <?php      
                            }  // 글쓴사람의 아이디와 로그인한 사람의 아이디가 다르면 -> 수정 삭제 버튼 노출X (글쓰기만 노출)
                    ?>
                                <button type="button" onclick="location.href='qna_form.php'">글쓰기</button>
                    <?php
                        } else {   // (로그인을 하지않았을 경우), 글쓰기 버튼 클릭하면 경고창 띄우기
                    ?>
                                <button type="button" onclick="alert('로그인 후 이용해주세요!')">글쓰기</button>
                    <?php
                        }
                    ?>
                </div>
                    
                
                     <!-- 댓글등록 -->
                <div class="commentbox">
                    <h3>댓글</h3>
                    <div class="comment">
                        <form name="comment_form" action="comment_insert.php?userid=<?=$userid?>&username=<?=$username?>&onum=<?=$num?>&page=<?=$page?>" method="post">
                            <?php
                                for($i=0; $i<$total_record; $i++) {
                                    mysqli_data_seek($resultcomm, $i);
                                    $rowcomm = mysqli_fetch_array($resultcomm);
                                    $id_comm = $rowcomm["id"];
                                    $irum_comm = $rowcomm["irum"];
                                    $content_comm = $rowcomm["content"];

                                    $content_comm = str_replace("\n", "<br>", $content_comm);
                                    $content_comm = str_replace(" ", "&nbsp;", $content_comm);

                                    $regist_day_comm = $rowcomm["regist_day"];
                                    $cnum_comm = $rowcomm["cnum"];
                            ?>
                                <div class="comment_list">
                                    <span><?=$irum_comm?></span>
                                    <span><?=$content_comm?></span>
                                    <span><?=$regist_day_comm?></span>
                                    <?php 
                                        if($userid==$id_comm){  
                                    ?>
                                        <span>
                                            <button type="button" onclick="window.open('comment_modify.php?cnum=<?=$cnum_comm?>&content=<?=$content_comm?>&num=<?=$num?>&page=<?=$page?>', '', 'top=100, left=100, width=500, height=300')">수정</button>
                                            <button type="button" onclick="location.href='comment_delete.php?cnum=<?=$cnum_comm?>&num=<?=$num?>&page=<?=$page?>'">삭제</button>
                                        </span>
                                    <?php 
                                        }
                                    ?> 
                                </div>
                                <?php 
                                        }
                                    ?> 
                            <?php
                                if($userid){
                            ?>
                                <div class="comment_insert">
                                    <span style="vertical-align:middle; padding-right: 20px;"><?=$username?></span> 
                                    <textarea name="content" id="" style="width: 50%; height: 40px; vertical-align: middle;"></textarea>
                                    <button type="button" onclick="comm_check()" style="vertical-align: middle; margin-left: 10px">등록</button>
                                </div>
                            <?php
                                }
                            ?>
                        </form>
                    </div>
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
        function comm_check(){
            if (!document.comment_form.content.value){
                alert("댓글을 입력해주세요.")
                document.comment_form.content.focus()
                return false
            }
            document.comment_form.submit()  // 내용을 action에 전송
        }
    </script>
</body>
</html>