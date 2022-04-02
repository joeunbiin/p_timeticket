// nav
$('#header .menu').on('click', function(){
    $('#header').addClass('on')
    $('#menu_open').animate({
        left:'0px'
    }, 500)
})

$('#header .menu_close').on('click', function(){
    $('#menu_open').animate({
        left:'-300px'
    }, 500, function(){
        $('#header').removeClass('on')
    })
})

// searchbox
$('#header .search').on('click', function (e) {
    e.preventDefault()
    $('.search_open').addClass('on')
})
$('#header .close').on('click', function(e){
    e.preventDefault()
    $('.search_open').removeClass('on')
})

// 알림 배너
setInterval(function(){
    $('.maincontent .notify a:first-child').animate({
        marginTop:'-40px'
    }, 500, function(){
        $(this).appendTo('.maincontent .notify').css({
            marginTop:'0px'
        })
    })
}, 3000)


// 이전 페이지로
function goprev() {
    history.go(-1)
}


// 슬라이드
$(".slide_group").slick({
    autoplay: true, // 자동재생
    autoplaySpeed: 3500, // 간격시간
    dots: true, // 동그라미버튼
    speed: 500, // 바뀌는시간(생략가능)
    slidesToShow: 1, // 보여질슬라이드수(생략가능)
    slidesToScroll: 1, // 이동슬라이드수(생략가능)
    pauseOnHover: true, // 마우스오버시 멈춤여부(생략가능)
    pauseOnDotsHover: true, // 동그라미번호버튼에 호버시 멈춤여부(생략가능)
    pauseOnFocus: false, // 동그라미번호버튼 클릭시 자동실행 멈춤여부
    cssEase: 'linear', // 속도함수(생략가능)
    draggable: true, // 마우스드래그시 슬라이드 교체가능여부(생략가능)
    fade: true,
    arrows: false, // 좌우화살표 사용여부(생략가능)
})

//예매조회 유효성 체크
// $('.checkbox > form').on('submit', function(){
//     // 생년월일 숫자6자리
//     var check = /^[0-9]{6}$/
//     var birth = $('#birth').val()
//         if ( !check.test(pwbox) ) {
//             alert('숫자 6자리만 입력해주세요!')
//             $('#birth').css({
//                 borderBottom:'1px solid #f00'
//             }).focus().select()
//             return false
//         }
//     // 비밀번호 숫자4자리
//     var check2 = /^[0-9]{4}$/
//     var pwbox = $('#pwbox').val()
//         if ( !check2.test(pwbox) ) {
//             alert('숫자 4자리만 입력해주세요!')
//             $('#pwbox').css({
//                 borderBottom:'1px solid #f00'
//             }).focus().select()
//             return false
//         }
//     return false
// })

