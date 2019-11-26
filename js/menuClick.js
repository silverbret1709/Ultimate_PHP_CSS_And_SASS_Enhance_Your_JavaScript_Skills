$('.submenu').on('click', function () {
   $(this)
       .children('ul')
       .slideToggle();
});

$('ul').click(function (e) {
    e.stopPropagation();
})