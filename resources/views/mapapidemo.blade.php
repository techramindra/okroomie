<html>
<head>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAOvF8ud8JKn9fbI7I36Y_zzxGOTNc3ai4"></script>
<script language="javascript" type="text/javascript">

    var map;
    var geocoder;
    function InitializeMap() {

        var latlng = new google.maps.LatLng(-36.1404431, 144.7511231);
        var myOptions =
        {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
    }

    function FindLocaiton() {
        geocoder = new google.maps.Geocoder();
        InitializeMap();

        var address = document.getElementById("addressinput").value;
        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });

            }
            else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });

    }


    function Button1_onclick() {
        FindLocaiton();
    }

    window.onload = InitializeMap;

</script>
</head>
<body>
<h2>Gecoding Demo JavaScript: </h2>
<table>
<tr>
<td>
    <input id="addressinput" type="text" style="width: 447px" />   
</td>
<td>
    <input id="Button1" type="button" value="Find" onclick="return Button1_onclick()" /></td>
</tr>
<tr>
<td colspan ="2">
<div id ="map" style="height: 253px" >
</div>
</td>
</tr>
</table>
</body>
</html>