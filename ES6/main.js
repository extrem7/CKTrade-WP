function menu() {
    $('.toggle-btn').click(function () {
        $('nav').slideToggle();
    });
}

menu();
$('.dropdown-submenu a.sub-open').on("click", function (e) {
    $(this).next('div').toggle();
    e.stopPropagation();
    e.preventDefault();
});
$(".wpcf7").on('wpcf7:mailsent', function () {
    $('.modal').modal('hide');
});