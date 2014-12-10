$(document).ready(function() {
    /* Toggle text */
    $('.glyphicon').on('click', function() {
        //Hide the plus sign and show the minus sign
        $(this).closest('div').find('.hidden').removeClass('hidden');
        $(this).addClass('hidden');
        
        //Toggle the information
        $(this).closest('div').find('#book-connections-content').slideToggle();
    });
});
