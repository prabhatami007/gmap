<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxBeC6PlMm6nBgftHPjUsccfEAzJ_kXTY"></script>
<script type="text/javascript" src="jquery.googlemap.js"></script>
<?php
function getLatLong($address){
    if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 

        $output = json_decode($geocodeFromAddr,true);

        //Get latitude and longitute from json data
        $data['lat']  = $output['results'][0]['geometry']['location']['lat']; 
        $data['lng'] = $output['results'][0]['geometry']['location']['lng'];

        //Return latitude and longitude of the given address
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
		
		
    }else{
        return false;   
    }
}

$latlng=getLatLong("1004 S. Santa Fe Ave, Vista, CA 92084");

?>

<div id="map" style="width: 650px; height: 600px;"></div>
<script type="text/javascript">
  $(function() {
    $("#map").googleMap();
    $("#map").addMarker({
      coords: [<?php echo $latlng['lat'] ?>, <?php echo $latlng['lng'] ?>], // GPS coords
      title: 'Marker n°1', // Title
      text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
  })
</script>