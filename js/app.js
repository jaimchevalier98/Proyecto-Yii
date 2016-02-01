$( document ).ready(function() {
    $('#bt_proyecto').click(function(){
        $('#bt_proyecto').attr("disabled", true);
        $('#proyecto').slideDown();
    });
    $('#bt_cancel').click( function(){
         $('#bt_proyecto').attr("disabled", false);
        $('#bt_proyecto').show();
        $('#proyecto').slideUp();
    });
});
