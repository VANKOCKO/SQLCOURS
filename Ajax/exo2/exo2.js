
$(document).ready(function(){

    function refreshFruit(){

                /** Recupper le fruit selectionne dans select */
                var fruit = $("#fruit").val();

            // Requte ajax

            $.ajax(
                {
                    method: "GET",
                    url: fruit + ".php"
                }
            ).done(function(response) {
                    $("#fruit-details").html(response);
            })

    }

    // des que le dom est chargeer 
    
    refreshFruit();

    // quand in change le select 

    $("#fruit").change(function() {
        refreshFruit();
    })

});