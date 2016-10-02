<?php
    session_start();  
    //jeżeli nie jest zalogowany to wróc do strony logowania
    if (!isset($_SESSION['zalogowany'])) 
    {
        header('Location: logowanie.php');
        exit();//przekierowuje i wstrzymuje reszte kodu
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TYTUŁ</title>

    <link rel="stylesheet" type="text/css" href="css/mapa.css">
    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />

    <script src="libs/leaflet-src.js"></script>
    <link rel="stylesheet" href="libs/leaflet.css" />

    <script src="src/Leaflet.draw.js"></script>
    <link rel="stylesheet" href="dist/leaflet.draw.css" />

    <script src="src/Toolbar.js"></script>
    <script src="src/Tooltip.js"></script>

    <script src="src/ext/GeometryUtil.js"></script>
    <script src="src/ext/LatLngUtil.js"></script>
    <script src="src/ext/LineUtil.Intersect.js"></script>
    <script src="src/ext/Polygon.Intersect.js"></script>
    <script src="src/ext/Polyline.Intersect.js"></script>
    <script src="src/ext/TouchEvents.js"></script>

    <script src="src/draw/DrawToolbar.js"></script>
    <script src="src/draw/handler/Draw.Feature.js"></script>
    <script src="src/draw/handler/Draw.SimpleShape.js"></script>
    <script src="src/draw/handler/Draw.Polyline.js"></script>
    <script src="src/draw/handler/Draw.Circle.js"></script>
    <script src="src/draw/handler/Draw.Marker.js"></script>
    <script src="src/draw/handler/Draw.Polygon.js"></script>
    <script src="src/draw/handler/Draw.Rectangle.js"></script>


    <script src="src/edit/EditToolbar.js"></script>
    <script src="src/edit/handler/EditToolbar.Edit.js"></script>
    <script src="src/edit/handler/EditToolbar.Delete.js"></script>

    <script src="src/Control.Draw.js"></script>

    <script src="src/edit/handler/Edit.Poly.js"></script>
    <script src="src/edit/handler/Edit.SimpleShape.js"></script>
    <script src="src/edit/handler/Edit.Circle.js"></script>
    <script src="src/edit/handler/Edit.Rectangle.js"></script>
    <script src="src/edit/handler/Edit.Marker.js"></script> 
    <script src="src/Leaflet-WFST.src.js"></script>  <!-- biblioteka odpowiedzialna za WFS-T  --> 
</head>
    
<!--<script>  
  var powitanie="Witaj na stronie! Strona autorstwa Mateusza Wuchnickiego. Wszelkie prawa zastrzeżone";
  alert(powitanie);
  naglowek.innerHTML=powitanie;  
</script>-->
    <body>

<?php
    echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
    
?>

        <div class="header">
            <p class="nag">Nazwa Aplikacji</p>
        </div>

        <img class="logo" src="img/logo_1.png" alt="logo"/>

        <div class="container">
           
           <div class="left-sidebar">
            <h2>ETAP DRUGI</h2>
            <p class="question">Proszę zaznaczyć na mapie i nazwać miejsce lub miejsca w których najczęściej przebywasz (można zaznaczyć kilka miejsc).</p>
            <!--             nowe przyciski ostylowane w css
 -->        <button class="button1" onclick="drawPoint()">Dodaj punkt</button>
            <button class="button1" onclick="drawPolygon()">Dodaj poligon</button>
            <br>
            <p class="question">Proszę zaznaczyć na mapie i nazwać najbardziej atrakcyjne turystycznie miejsca w Poznaniu (można zaznaczyć kilka miejsc).</p>
            <!--             nowe przyciski ostylowane w css
 -->        <button class="button1" onclick="drawPoint()">Dodaj punkt</button>
            <button class="button1" onclick="drawPolygon()">Dodaj poligon</button>

            <br><br><br><br>

            <button class="button" onclick="window.location.href='etap1.php' ">Powrót</button>     
            <button class="button" onclick="window.location.href='koniec.php' ">Zakończ</button>
            <!--<div class="nav">
                <div id="layertree">
                <ul>
                    <li class="legenda">
                        <nav id='filters' class='filter-ui'></nav>
                        <a href="javascript:history.back()" id="list">Powrót do listy zadań</a>
                    </li>
                </ul>
                </div>-->
            </div>

            <div class="main">
                <div id="mapka">
                    <div id="map" class="map"></div>
                </div>  
            </div>

        </div> 
        

        </div>  
        
        <div class="footer">
            Prawa autorskie | &copy; 2016
        </div>

<script>     
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
            map = new L.Map('map', {center: new L.LatLng(52.069226, 19.480278), zoom: 6}),
            drawnItems = L.featureGroup().addTo(map);
        L.control.layers({
         'OpenStreetMap':osm.addTo(map),
         "Google Satelite": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google'
            })
        }, {'Dodane warstwy':drawnItems}, { position: 'topright', collapsed: false }).addTo(map);
var wfst = new L.WFST({
    url: 'http://150.254.124.31:8080/geoserver/ows',
    typeNS: "topp",
    typeName: "punkty_wgs84",
    crs: L.CRS.EPSG4326,
    geometryField: "the_geom",
    style: {
      color: 'blue',
      weight: 2
    }
  }).addTo(map)
    .once('load', function () {
      map.fitBounds(wfst);
    });
//dodawaniu popupua do warstwy wfst    
var popup = L.popup();
  wfst.on('click', function (event) {
    popup
      .setLatLng(event.latlng)
      .setContent('Pole nazwa: ' + event.layer.feature.properties.nazwa)
      .openOn(map);
  });
        map.on('draw:created', function(event) {
            var layer = event.layer;
            var formularz = L.popup();//nowy popup jest tworzony niezależnie do obiektu na jego współrzędnych
            var content = '<span><b>Nazwa</b></span><br/><input id="nowyTekst" type="text"/><br/><br/><span><b>Opisz jednym zdaniem co tam robisz.<b/></span><br/><textarea id="innyTekst" cols="25" rows="5"></textarea><br/><br/><input type="button" id="okBtn" value="Zapisz obiekt" onclick="saveData()">       </input><input type="button" id="okBtn" value="Anuluj" onclick="window.history.go()"/>';
            formularz.setContent(content);
            formularz.setLatLng(layer.getLatLng()); //lokalizacja popupa jest brana z utworzonego punktu - inaczej przy poligonach to trzeba będzie rozwiązać
            formularz.openOn(map);
            layer.feature = {properties: {}};//inicjacja  miejsca na wpisanie atrybutów
            layer.feature.properties.nazwa="brak tekstu" //domyślny tekst dopisywany do kolumny nazwa (nazwa jest w tabeli na PostGIS)
            wfst.addLayer(layer);
            //wfst.save();//zapis jest poźniej. żeby to działało nie może być ograniczeń do zapisu dla danego workspace
        });
    
L.control.scale().addTo(map);

//Poniższe funkcje zastępują standardowe przyciski z toolbara Leaflet.draw - można do niech dodać też standardowe opcje - póki co puste
        function drawPoint(){
            var pointDrawer = new L.Draw.Marker(map);     
            pointDrawer.enable();
        }
        function drawPolygon(){
            var polygonDrawer = new L.Draw.Polygon(map);     
            polygonDrawer.enable();
        }
//funkcja zapisu danych - pobiera dane z formularza, dokleja do ostatnio dodanego obiektu (najwyższe id) i zapisuje
        function saveData(){
            var sName = $('#nowyTekst').val(); //jquery bierze wartość z formularza
            var drawings = wfst.getLayers();  //wfst to warstwa z obiektami
            drawings[drawings.length - 1].feature.properties.nazwa = sName; //dopisuje wartość do ostatniego dodanego obiektu
            //tutaj jest miejsce by w identyczny sposób dopisać np. datę i czas lub ID użytkownika
            wfst.save();//zapis dopiero tutaj po wypełnieniu formularza
            map.closePopup();
           
        }
    
</script>


    </body>
</html>
