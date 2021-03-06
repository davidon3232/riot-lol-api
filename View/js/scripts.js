$(document).on('click', '.btn', function (e) {
    e.preventDefault();
    if ($('.form-search').valid()) {
        var region = $('#region option:selected').val();
        var keyword = $('input[name="keyword"]').val();
        $.ajax({
            url: 'treatSearch',
            type: 'POST',
            data: {
                keyword: keyword,
                region: region
            },
            dataType: 'JSON',
            success: function (data) {
                
            },
            error: function (data) {

            }
        });
    }
});

$(document).on('click', '.load-more', function (e) {
    var inicialIndex = $('.profile-match').length + 1;
    var finalIndex = inicialIndex + 10;
    $.ajax({
        url: "ajax/getMoreMatchs",
        type: "POST",
        data: {
            beginIndex : inicialIndex,
            finalIndex : finalIndex
        },
        dataType: "JSON",
        beforeSend: function(){
         $(".load-more").html("<div class='div-load-more-loading'><img style='margin-top:-16px' width='70px' heigth='70px' src='http://localhost/riot-lol-api/images/loading.gif'></div>");
        },
        success: function (data) {
            console.log(data);
          $("#match-history").append(data);
          $(".load-more").html("<div class='div-load-more'>Carregar mais</div>");
        },
        error: function (xhr, status, error) {
            console.log("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
        }
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip({
      html: true
  });
});

$(document).on('click', ".rune", function(e) {
    e.stopPropagation();
    e.preventDefault();
});

$(function () {
    $('[data-toggle="popover"]').popover({})
});