var usedata;
$.ajax({
    type: "GET",
    url: "js/team_sub.json",
    beforeSend: function (xhr) {
        if (xhr.overrideMimeType) {
            xhr.overrideMimeType("application/json");
        }
    },
    success: function (data) {
        usedata = data;
        console.log(usedata)
        team_sub();
    },
    error: function (abc) {
        alert(abc.status + "오류발생");
    },
})

function team_sub() {
    var team_subList = "";
    for (let i in usedata.team_sub1) {
        team_subList += `<li><div><img src="${usedata.team_sub1[i].Photo}" alt=""></div>`
        team_subList += `<div class="player_box"><div class="mwrap"><div class="info"><div class="lwrap"><div class="name"><p>${usedata.team_sub1[i].Name}</p></div>`
        team_subList += `<div class="nation"><p>${usedata.team_sub1[i].Nation}</p></div></div>`
        team_subList += `<div class="number"><p>${usedata.team_sub1[i].Number}</p></div></div></div></div></li>`
    }
    $('#team_sub1').append(`<ul>${team_subList}</ul>`)

    var team_subList2 = "";
    for (let i in usedata.team_sub2) {
        team_subList2 += `<li><div><img src="${usedata.team_sub2[i].Photo}" alt=""></div>`
        team_subList2 += `<div class="player_box"><div class="mwrap"><div class="info"><div class="lwrap"><div class="name"><p>${usedata.team_sub2[i].Name}</p></div>`
        team_subList2 += `<div class="nation"><p>${usedata.team_sub2[i].Nation}</p></div></div>`
        team_subList2 += `<div class="number"><p>${usedata.team_sub2[i].Number}</p></div></div></div></div></li>`
    }
    $('#team_sub2').append(`<ul>${team_subList2}</ul>`)
}