$( document ).ready(function() {
    $('#bt_proyecto').click(function(){
        //alert("clip");
        $('#bt_proyecto').hide();
        $('#proyecto').slideDown();
    });
    $('#bt_cancel').click( function(){
        alert('sds');
        $('#bt_proyecto').show();
        $('#proyecto').slideUp();
    });
});
