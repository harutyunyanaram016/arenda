jQuery(document).ready(function($) {
    $(".ser-delete").click(function () {
        var tr = $(this).parent().parent();
        var id = $(this).parent().parent().children().eq(0).text();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "DELETE",
            url: 'services/edit/' + id,
            data: {_method: 'delete', _token :CSRF_TOKEN},
            success: function (data) {
                if(data){
                    tr.remove()
                }
            },

        });
    });
    $(".cat-delete").click(function () {
        var tr = $(this).parent().parent();
        var id = $(this).parent().parent().children().eq(0).text();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "DELETE",
            url: 'categories/edit/' + id,
            data: {_method: 'delete', _token :CSRF_TOKEN},
            success: function (data) {
                if(data){
                    tr.remove()
                }
            },

        });
    });

    $(".popup_form form").submit(function(){
        var res = true;

        setTimeout(function(){
            $('#phone').removeClass('error');
        }, 3000);

        if($('#phone').val() === ''){
            res = false
            $('#phone').addClass('error');
        }

        var data = $(this).serialize() + '&action=siteWideMessage';
        if(res){
            yaCounter45440928.reachGoal('zakaz');
            $.post('/contact', data, function(data){
                setTimeout(function(){
                    $('.close').click();
                    $(".popup_form form").trigger('reset');
                    $(".popup_form form .usl").val('');
                }, 1500);
            });
        }

        return false;
    });

})