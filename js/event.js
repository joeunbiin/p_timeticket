var event = '';
$.ajax({
    type: 'GET',
    url: 'data/event.json',  
    timeOut: 3000,
    beforeSend: function (xhr) {
        if (xhr.overrideMimeType) {
            xhr.overrideMimeType('application/json')
        }
    },
    dataType: 'json',
    success: function (data) {
        event = data
        dataPrint()

    },
    error: function (xhr) {
        alert(xhr.status + '/' + xhr.errorText)
    }
})


function dataPrint() {
    var list = '';
    for (var i in event) {
        list += `<div class="eventlist"><img src="${event[i].photo}" alt="">`
        list += `<div class="eventlist_text"><p>[이벤트]</p>`
        list += `<h4>${event[i].title}</h4>`
        list += `<p>${event[i].about}</p>`
        list += `<p>기간 : ${event[i].date}</p>`
        list += `<button>자세히 <i class="fas fa-angle-double-right"></i></button></div></div>`
    }
    $('.eventcontent').append(`<div class="eventbox">${list}</div>`)
}