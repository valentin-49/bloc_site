<html>
    <head>
    <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <link rel="stylesheet" type="text/css" href="page.css">
        <link rel="stylesheet" type="text/css" href="fichier_bootstrap/bootstrap-4.5.3-dist/css/bootstrap.css">
    </head>
    <body class="background">
            <div class="header_main">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" id="title" align="center"> 
                        Taxi Bouet
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2" align="center">
                        <button type="submit" class="submit-btn">Acceuil</button>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2" align="center">
                        <button type="submit" class="submit-btn">Nos services</button>  
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2" align="center">
                        <button type="submit" class="submit-btn">Nous contacter</button>   
                    </div>
                </div>  
            </div>  
        <div class="page">
            <div class="bloc">
                <div class="row content">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 " align="center">
                        <img src="img/taxi_bouet.jpg" class="responsive" >
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 " align="center">
                        <p id="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="row content">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 " align="center">
                        <p id="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 " align="center">
                        <div id="mapid" style="width: 800px; height: 500px;float: center;"></div>
                            <script>
                                var mymap = L.map('mapid').setView([47.05, -0.87], 10);

                                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                    maxZoom: 18,
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                    id: 'mapbox/streets-v11',
                                    tileSize: 512,
                                    zoomOffset: -1
                                }).addTo(mymap);

                                L.marker([8.86578, -79.4971]).addTo(mymap);

                                L.circle([8.86578, -79.4971], {
                                    color: 'red',
                                    fillColor: '#f03',
                                    fillOpacity: 0.5,
                                    radius: 500
                                }).addTo(mymap);

                                L.polygon([
                                    [51.509, -0.08],
                                    [51.503, -0.06],
                                    [51.51, -0.047]
                                ]).addTo(mymap);
                            </script>
                    </div>
                </div>
            </div>        
        </div>
    </body>
</html>