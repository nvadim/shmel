function suggestView (e) {
    var suggestView1 = new ymaps.SuggestView(e);
}
// TODO: этот скрипт вынести в ту часть где будет использоваться элемент datapicker
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
    });

    $(document).on('click', '.button_map__btn', function (e) {
        e.preventDefault();

        var addressArray = [],
            pointType = 'viaPoint',
            error = true;

        $('.route_item').each(function (index) {
            var element = this;

            if(index === 0 || index === index.length){
                pointType = 'islands'
            }
            if($('.form__element', element).val() === '' || $('.form__element', element).val() === undefined){
                $('.form__element', element).addClass('form__element-error');

                error = true;
            }
            else {
                addressArray.push(
                    {
                        "point": $('.form__element', element).val().toString(),
                        "type": pointType
                    }
                );

                error = false;
            }
        });

        if(!error){
            $.arcticmodal({
                overlay: {
                    css: {
                        backgroundColor: 'rgba(0,0,0,.8)',
                        opacity: 1
                    }
                },
                type: 'ajax',
                url: $(this).data('route-url'),
                afterOpen: function(data, el) {
                    loadingMap(addressArray);
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