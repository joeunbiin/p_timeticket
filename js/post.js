var post = '';
$.ajax({
    type: 'GET',
    url: 'data/post.json',  
    timeOut: 3000,
    beforeSend: function (xhr) {
        if (xhr.overrideMimeType) {
            xhr.overrideMimeType('application/json')
        }
    },
    dataType: 'json',
    success: function (data) {
        post = data
        dataPrint()

    },
    error: function (xhr) {
        alert(xhr.status + '/' + xhr.errorText)
    }
})


function dataPrint() {
    var list = '';
    for (var i in post) {
        list += `<div class="postlist"><img src="${post[i].photo}" alt="">`
        list += `<div class="postlist_text"><div class="text1"><span>${post[i].title}</span>`
        list += `<span>(평점: ${post[i].star})</span></div>`
        list += `<div class="text2"><span>${post[i].id}</span>`
        list += `<span>${post[i].date}</span><span>장소: ${post[i].place}</span></div>`
        list += `<div class="text3"><img src="${post[i].trust}" alt="별점5개">`
        list += `<span>${post[i].text}</span></div></div></div>`
    }
    $('.postcontent').append(`<div class="postbox">${list}</div>`)
}