jQuery(function($){
    
    $('#loadmore-news').click(function(){
        $(this).text('Загрузка...');
        var data = {
            'action': 'loadmore_news',
            'query': posts_vars,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if(data) {
                    $('#loadmore-news').text('Показать ещё');
                    $('#articles-posts').append(data);
                    const container = document.querySelector('#articles-posts');
                    window.revealInit(container);
                    current_page++;
                    if (current_page == max_pages) $("#loadmore-news").remove();
                } else {
                    $('#loadmore-news').remove();
                }
            }
        });
    });

});