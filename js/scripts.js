$(document).on('click', '.btn-search', function (e) {
    e.preventDefault();
    if ($('#form-search').valid()) {
        var formData;
        var region = $('input[name="region"]').val();
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
                location.href = 'invocador/' + keyword;
            },
            error: function(data){

            }
        });
    }
})