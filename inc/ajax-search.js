jQuery(function($){

    $('#search-input').bind("change paste keyup", function() {
        var value = $('#search-input').val();
        var data = {
            'action': 'ajax_search_fun',
            's': value,
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                $('#ambassadors-results').html(data);
            }
        });
    });

});
