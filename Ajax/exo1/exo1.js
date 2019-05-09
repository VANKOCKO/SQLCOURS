$('#get-content').click(
    function(){
         $.ajax(
              {
                  method: "GET",
                  url:"section.php"
              }
         ).done(
             function (result) {
                //console.log(result);
                 $("#content").html(result);
             }
         )
    }
)
