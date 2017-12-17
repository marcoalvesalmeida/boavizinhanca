<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Google Maps API v3: Busca de endereço e Autocomplete - Demo</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
    <link href='<?php echo base_url("bootstrap/css/mapa.css")?>' type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDKHslmsBHG61bJEvzFFrgY4BY3rv-aOW0"></script>
    <script type="text/javascript" src='<?php echo base_url("bootstrap/js/jquery.min.js")?>'></script>
    <!--<script type="text/javascript" src='<?php echo base_url("bootstrap/js/mapa.js")?>'></script>-->
    <script type="text/javascript" src='<?php echo base_url("bootstrap/js/jquery-ui.custom.min.js")?>'></script>
    <script>
        var geocoder;
        var map;
        var marker;

        function initialize() {
            var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
            var options = {
                zoom: 5,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("mapa"), options);

            geocoder = new google.maps.Geocoder();

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
            });

            marker.setPosition(latlng);
        }

        $(document).ready(function () {

            initialize();

            function carregarNoMapa(endereco) {
                geocoder.geocode({ 'address': endereco + ', Brasil', 'region': 'BR' }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var latitude = results[0].geometry.location.lat();
                            var longitude = results[0].geometry.location.lng();

                            $('#txtEndereco').val(results[0].formatted_address);
                            $('#txtLatitude').val(latitude);
                            $('#txtLongitude').val(longitude);

                            var location = new google.maps.LatLng(latitude, longitude);
                            marker.setPosition(location);
                            map.setCenter(location);
                            map.setZoom(16);
                        }
                    }
                });
            }

            $("#btnEndereco").click(function() {
                if($(this).val() != "")
                    carregarNoMapa($("#txtEndereco").val());
            })

            $("#txtEndereco").blur(function() {
                if($(this).val() != "")
                    carregarNoMapa($(this).val());
            })

            google.maps.event.addListener(marker, 'drag', function () {
                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {  
                            $('#txtEndereco').val(results[0].formatted_address);
                            $('#txtLatitude').val(marker.getPosition().lat());
                            $('#txtLongitude').val(marker.getPosition().lng());
                        }
                    }
                });
            });

            $("#txtEndereco").autocomplete({
                source: function (request, response) {
                    geocoder.geocode({ 'address': request.term + ', Brasil', 'region': 'BR' }, function (results, status) {
                        response($.map(results, function (item) {
                            return {
                                label: item.formatted_address,
                                value: item.formatted_address,
                                latitude: item.geometry.location.lat(),
                                longitude: item.geometry.location.lng()
                            }
                        }));
                    })
                },
                select: function (event, ui) {
                    $("#txtLatitude").val(ui.item.latitude);
                    $("#txtLongitude").val(ui.item.longitude);
                    var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
                    marker.setPosition(location);
                    map.setCenter(location);
                    map.setZoom(16);
                }
            });

            $("form").submit(function(event) {
                event.preventDefault();

                var endereco = $("#txtEndereco").val();
                var latitude = $("#txtLatitude").val();
                var longitude = $("#txtLongitude").val();

                alert("Endereço: " + endereco + "\nLatitude: " + latitude + "\nLongitude: " + longitude);
            });

        });
    select: function (event, ui) {
        $("#txtLatitude").val(ui.item.latitude);
        $("#txtLongitude").val(ui.item.longitude);
        var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
        marker.setPosition(location);
        map.setCenter(location);
        map.setZoom(16);
    }
});
</script>
</head>

<body>

    <div id="apresentacao">

        <h1>Google Maps API v3: Busca de endereço e Autocomplete - Demo</h1>

        <form method="post" action="index.html">    
            <fieldset>

                <legend>Google Maps API v3: Busca de endereço e Autocomplete - Demo</legend>    

                <div class="campos">
                    <label for="txtEndereco">Endereço:</label>
                    <input type="text" id="txtEndereco" name="txtEndereco" />
                    <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                </div>

                <div id="mapa"></div>

                <input type="submit" value="Enviar" name="btnEnviar" />

                <input type="hidden" id="txtLatitude" name="txtLatitude" />
                <input type="hidden" id="txtLongitude" name="txtLongitude" />

            </fieldset>
        </form>


        <?php
        $this->load->view('refactory/footer');
        ?>