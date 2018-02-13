$(function () {
    var $transport = $('.j-transport_list .choice_item__btn');
    if ($transport.length > 0) {
        $transport.each(function () {
            var $item = $(this);
            new CarCategorie($item);
        });
    }
});

function CarCategorie(container) {
    this.control = $(container);
    this.init();
}

CarCategorie.prototype.init = function () {
    var o = this;

    o.control.click(function (event) {
        event.preventDefault();

        o.add($(this).data('catId'));
    });
};

CarCategorie.prototype.add = function (cid) {
    console.log('added: ' + cid);

    $.ajax({
        type: 'POST',
        url: '/ajax/add_category.php',
        data: {
            id: cid
        },
        dataType: 'html',
        success: function( response ){
            if ( response ){
                $('.choice_transport').before(response);
            }
        }
    });
};