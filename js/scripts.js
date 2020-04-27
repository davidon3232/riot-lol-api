$(document).on('click', '.btn-search', function (e) {
    e.preventDefault();
    if ($('.form-search').valid()) {
        var region = $('#region option:selected').val();
        var keyword = $('input[name="keyword"]').val();
        $.ajax({
            url: 'ajax/treatSearch',
            type: 'POST',
            data: {
                keyword : keyword,
                region : region
            },
            dataType: 'JSON',
            success: function(data) {
                location.href = 'invocador/' + data;
            },
            error: function(data){

            }
        });
    }
})