<!--<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=delhi&output=embed"></iframe>-->

<?php
$address="KVR SCO-5";
$address=str_replace(" ","+",$address);
?>

<div style="width:500px;max-width:100%;overflow:hidden;height:500px;color:red;"><div id="gmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $address;?>&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div>