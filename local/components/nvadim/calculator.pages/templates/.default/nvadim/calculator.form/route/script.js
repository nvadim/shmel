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

/*
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("route_map", {
                center: [55.73, 37.75],
                zoom: 9,
                controls: [
                    "zoomControl",
                    "fullscreenControl"
                ]
            }, {
                searchControlProvider: 'yandex#search'
            }),
            moscowPolygon;

        function onPolygonLoad(json) {
            moscowPolygon = new ymaps.Polygon(json.coordinates);
            // Если мы не хотим, чтобы контур был виден, зададим соответствующую опцию.
            moscowPolygon.options.set('visible', true);
            // Чтобы корректно осуществлялись геометрические операции
            // над спроецированным многоугольником, его нужно добавить на карту.
            myMap.geoObjects.add(moscowPolygon);

            ymaps.route([[55.654884, 37.527034], [55.767305, 37.976100]]).then(
                function (res) {
                    // Объединим в выборку все сегменты маршрута.
                    var pathsObjects = ymaps.geoQuery(res.getPaths()),
                        edges = [];

                    // Переберем все сегменты и разобьем их на отрезки.
                    pathsObjects.each(function (path) {
                        var coordinates = path.geometry.getCoordinates();
                        for (var i = 1, l = coordinates.length; i < l; i++) {
                            edges.push({
                                type: 'LineString',
                                coordinates: [coordinates[i], coordinates[i - 1]]
                            });
                        }
                    });

                    // Создадим новую выборку, содержащую:
                    // - отрезки, описываюшие маршрут;
                    // - начальную и конечную точки;
                    // - промежуточные точки.
                    var routeObjects = ymaps.geoQuery(edges)
                            .add(res.getWayPoints())
                            .add(res.getViaPoints())
                            .setOptions('strokeWidth', 3)
                            .addToMap(myMap),
                        // Найдем все объекты, попадающие внутрь МКАД.
                        objectsInMoscow = routeObjects.searchInside(moscowPolygon),
                        // Найдем объекты, пересекающие МКАД.
                        boundaryObjects = routeObjects.searchIntersect(moscowPolygon);
                    // Раскрасим в разные цвета объекты внутри, снаружи и пересекающие МКАД.
                    boundaryObjects.setOptions({
                        strokeColor: '#06ff00',
                        preset: 'islands#greenIcon'
                    });
                    objectsInMoscow.setOptions({
                        strokeColor: '#ff0005',
                        preset: 'islands#redIcon'
                    });
                    // Объекты за пределами МКАД получим исключением полученных выборок из
                    // исходной.
                    routeObjects.remove(objectsInMoscow).remove(boundaryObjects).setOptions({
                        strokeColor: '#0010ff',
                        preset: 'islands#blueIcon'
                    });
                }
            );
        }

        $.ajax({
            url: '/local/components/nvadim/calculator.pages/templates/.default/nvadim/calculator.form/route/moscow.json',
            dataType: 'json',
            success: onPolygonLoad
        });
    }
*/

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