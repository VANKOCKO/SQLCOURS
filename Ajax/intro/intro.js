$(function(){
        $('button').click($.ajax(
                {
                    method: "GET",
                    url: "intro.php"
                }
            ).done(
                function(response){
                    alert(response);
                }))}
)

