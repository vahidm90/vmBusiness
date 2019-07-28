$(function ($) {
    var $topItems = $('#top-bar-items');
    $('#toggle-top-bar').click(function () {
        $topItems.toggleClass('active', 500);
    });
    $topItems.on('click', 'button.close', function () {
        $topItems.removeClass('active', 500);
    });
    $topItems.on('click', 'button.expand', function (e) {
        e.stopPropagation();
        e.preventDefault();
        var $target = $(this).parent().next('ul'), $that = $(this);
        if ($target.hasClass('active')) {
            $that.removeClass('expanded', 500);
            $target.removeClass('active', 500)
        } else {
            var depth = $target[0].className.match(/d\-\d+/);
            if (depth[0] && 'string' === typeof (depth[0])) {
                $('ul.' + depth[0], $topItems).removeClass('active', 500).each(function () {
                    $(this).siblings('a').find('button').removeClass('expanded', 500);
                    $(this).find('button').removeClass('expanded', 500);
                    $(this).find('ul').removeClass('active', 500).siblings('a').removeClass('expanded', 500);
                });
            }
            $target.addClass('active', 500);
            $that.addClass('expanded', 500);
        }
    });
});