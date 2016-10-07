<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxBeC6PlMm6nBgftHPjUsccfEAzJ_kXTY&sensor=false"></script>
<script>
jQuery(document).ready(function() {
    jQuery(document).on("click", ".button", function(e) {
        e.preventDefault();
        var latLng = jQuery(this).attr("data-latLng");			
        initialize(latLng);
    });
    
    function initialize(latLng) {
        latLng = latLng.split(",")
        var mapOptions = {
            center: new google.maps.LatLng(latLng[0],latLng[1]),
            zoom: 8
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }
});	
</script>
<style>
html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
#map-canvas { height: 200px; }
</style>
<a href="#" class="button" data-latLng="53.488188,-2.373019">Button</a>
<a href="#" class="button" data-latLng="-34.397, 150.644">Button 2</a>
<div id="map-canvas"></div>
