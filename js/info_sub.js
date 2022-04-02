var usedata;
$.ajax({
    type: "GET",
    url: "data/info_sub.json",
    beforeSend: function (xhr) {
        if (xhr.overrideMimeType) {
            xhr.overrideMimeType("application/json");
        }
    },
    success: function (data) {
        usedata = data;
        info_sub();
    },
    error: function (abc) {
        alert(abc.status + "오류발생");
    },
})

function info_sub() {
    var info_subList = "";
    var info_sub = $('.pagetitle').next().attr('id')
    for (let i in usedata[info_sub]) {
        var price = usedata[info_sub][i].price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
            if (price!=="무료"){
                price=price+"원"
            }
        info_subList += `<div class="info_sublist"><img src="${usedata[info_sub][i].photo}" alt="">`
        info_subList += `<div class="info_sublist_text"><p>${usedata[info_sub][i].condition}</p>`
        info_subList += `<h4>${usedata[info_sub][i].title}</h4>`
        info_subList += `<p>${usedata[info_sub][i].sale}</p>`
        info_subList += `<p>${price}</p></div></div>`
    }
    $('.info_subcontent').append(`<div class="info_subbox">${info_subList}</div>`)
}