
$('.dropdownMain').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdownMain-menu').slideToggle(300);
});
$('.dropdownMain').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdownMain-menu').slideUp(300);
});
$('.dropdownMain .dropdownMain-menu li').click(function () {
    $(this).parents('.dropdownMain').find('span').text($(this).text());
    $(this).parents('.dropdownMain').find('input').attr('value', $(this).attr('id'));
}); 