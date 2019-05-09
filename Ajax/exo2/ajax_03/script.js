$(document).ready(function(){

    function refreshFruit() {
        // Récupérer le fruit dans le <select>
        var fruit = $('#fruit').val();

        // Requête AJAX
        $.ajax({
            method: "GET",
            url: fruit + ".php"
        }).done(function(response){
            $('#fruit-details').html(response);
        });
    }

    // Dès que le DOM est chargé
    refreshFruit();

    // Quand on change le <select>
    $('#fruit').change(function(){
        refreshFruit();
    });

});