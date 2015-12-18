$(document).foundation();
$( document ).ready(function(){
    //open modals
    $('.open-modal').on('touchstart click', function(){
        var elem = $(this).data('open'); //must be an ID
        $('#'+elem).foundation('open')
    });
});