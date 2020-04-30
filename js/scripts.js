$(document).on('click', '.btn-search', function (e) {
    e.preventDefault();
    if ($('.form-search').valid()) {
        var region = $('#region option:selected').val();
        var keyword = $('input[name="keyword"]').val();
        $.ajax({
            url: 'ajax/treatSearch',
            type: 'POST',
            data: {
                keyword: keyword,
                region: region
            },
            dataType: 'JSON',
            success: function (data) {
                location.href = 'invocador/' + data;
            },
            error: function (data) {

            }
        });
    }
})

$(document).on('click', '.load-more', function (e) {
    var inicialIndex = $('.profile-match').length
    var finalIndex = inicialIndex + 5;
    $.ajax({
        type: "GET",
        url: "https://br1.api.riotgames.com/lol/match/v4/matchlists/by-account/v8-SBdvKdbrFYc5q8fP9qq2v_Bvk8EW7UEJVisioIfE?api_key=RGAPI-b0acf83c-7b3c-4faf-878b-27d1f6a66076&?champion=30&endIndex="+finalIndex+"&beginIndex="+inicialIndex,
        dataType: "json",
        beforeSend: function(){
         $(".load-more").html("<div class='div-load-more'><img style='margin-top:-16px' width='70px' heigth='70px' src='http://localhost/riot-lol-api/images/loading.gif'></div>");
        },
        success: function (result, status, xhr) {
          getGame(result);
          $(".load-more").html("<div class='div-load-more'>Carregar mais</div>");
        },
        error: function (xhr, status, error) {
            alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
        }
    });
});

function getGame(result) {
    var i;
    for ($i = 0; $i < result['matches'].length; $i++) {
        $.ajax({
            type: "GET",
            url: "https://br1.api.riotgames.com/lol/match/v4/matches/" + result['matches'][$i]['gameId'] + "?api_key=RGAPI-b0acf83c-7b3c-4faf-878b-27d1f6a66076&",
            dataType: "json",
            beforeSend: function () {
                $(".load-more").html("<div class='div-load-more'><img style='margin-top:-16px' width='70px' heigth='70px' src='http://localhost/riot-lol-api/images/loading.gif'></div>");
            },
            success: function (result, status, xhr) {
                console.log(result);
                $(".load-more").html("<div class='div-load-more'>Carregar mais</div>");
            },
            error: function (xhr, status, error) {
                alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
            }
        });
    }
}