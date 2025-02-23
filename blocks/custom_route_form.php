<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $route_name = htmlspecialchars($_POST["route_name"]);
    $route_points = $_POST["route_points"];
    
    file_put_contents("routes.txt", "$route_name: $route_points\n", FILE_APPEND);
}
?>

<form method="post" id="route-form">
    <label for="route_name">Название маршрута:</label>
    <input type="text" id="route_name" name="route_name" required>
    
    <input type="hidden" id="route_points" name="route_points">
    <button type="submit">Сохранить маршрут</button>
</form>

<div id="map" style="width: 100%; height: 400px;"></div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);
    
    var routeCoordinates = [];
    function init() {
        var myMap = new ymaps.Map("map", {
            center: [44.6085, 33.5216], // Координаты Херсонеса Таврического
            zoom: 16
        });

        var routePolyline = new ymaps.Polyline([], {}, {
            strokeColor: "#0000FF",
            strokeWidth: 4
        });
        myMap.geoObjects.add(routePolyline);

        myMap.events.add('click', function (e) {
            var coords = e.get("coords");
            routeCoordinates.push(coords);
            routePolyline.geometry.setCoordinates(routeCoordinates);
        });
    }

    document.getElementById("route-form").addEventListener("submit", function (event) {
        event.preventDefault();
        document.getElementById("route_points").value = JSON.stringify(routeCoordinates);
        this.submit();
    });
</script>
