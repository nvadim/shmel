function suggestView (e) {
    var suggestView1 = new ymaps.SuggestView(e);
}

$(function () {
    $('.set_date').datepicker({
        dateFormat: 'dd M yyyy',
        timepicker: false,
        minDate: new Date(),
        startDate: new Date()
    });


    $('.set_time').inputmask("hh:mm", {
        showMaskOnHover: false,
        showMaskOnFocus: false,
        placeholder: "чч:мм",
        jitMasking: true
    });

    ymaps.ready(function () {
        $(document).on('focus', '.route_item__map', function (e) {
            suggestView(e.target);
        });

        $(document).on('blur', '.route_item__map', function (e) {
            if(!Polygon.routeCalc()) {
                loadingMap("intersect_map");
            }
        });

        $(document).on('click', '.button_map__btn', function (e) {
            e.preventDefault();

            if(!Polygon.routeCalc()){
                $.arcticmodal({
                    overlay: {
                        css: {
                            backgroundColor: 'rgba(0,0,0,.8)',
                            opacity: 1
                        }
                    },
                    type: 'ajax',
                    url: $(this).data('route-url') + '?',
                    beforeOpen: function (data, el) {

                    },
                    afterOpen: function(data, el) {
                        loadingMap("route_map");
                    },
                    afterClose: function(data, el) {

                    }
                });
            }
            else {
                alert('Введите корректные адреса.');
            }
        });
    });
});