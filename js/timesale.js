var timesale = '';
$.ajax({
    type: 'GET',
    url: 'data/timesale.json',  
    timeOut: 3000,
    beforeSend: function (xhr) {
        if (xhr.overrideMimeType) {
            xhr.overrideMimeType('application/json')
        }
    },
    dataType: 'json',
    success: function (data) {
        timesale = data
        dataPrint()

    },
    error: function (xhr) {
        alert(xhr.status + '/' + xhr.errorText)
    }
})


function dataPrint() {
    var list = '';
    for (var i in timesale) {
        var price = timesale[i].price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
        list += `<div class="salelist"><img src="${timesale[i].photo}" alt="">`
        list += `<div class="salelist_text"><p>${timesale[i].condition}</p>`
        list += `<h4>${timesale[i].title}</h4>`
        list += `<p>${timesale[i].sale}</p>`
        list += `<p>${price}원</p></div></div>`
    }
    $('.salecontent').append(`<div class="salebox">${list}</div>`)
}