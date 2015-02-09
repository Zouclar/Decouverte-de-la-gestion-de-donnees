<?php
define('FICHIER', 'hotel.csv');
 
if (!isset($_POST['valider'])) {
?>

<form method="POST">
<center>   
 Entrez le nom de la ville, code postal, rue ou coordonnées de l'hôtel: <input type="text" name="mot" value=""/><br/>
   <input type="submit" value="Rechercher" name="valider"/>
</center>
</form>
 
<?php
} else {
    $resultats =array();
    @ $fp = fopen(FICHIER, 'r') or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
    while (!feof($fp)) {
        $ligne = fgets($fp, 1024);
        if (preg_match('|\b' . preg_quote($_POST['mot']) . '\b|i', $ligne)) {
            $resultats[] = $ligne;
        }
    }
    fclose($fp);
    $nb = count($resultats);
    if ($nb > 0) {
        echo " $nb hôtels trouvés :";
        echo '<ul>';
        foreach ($resultats as $v) {
          $recupadd = explode(";", $v);
                    echo "<li class=\"resultat_recherche\" >$recupadd[5]</li>"; 
                    echo "<a href=\"$recupadd[10]\">$recupadd[4]</a>";
                    echo "<li class=\"resultat_recherche\" >$recupadd[8]</li>";
        }
        echo '</ul>';
    } else {
        die("Ce nom n'est pas présent !");
    }
}
?>
<center>
<div id="map-canvas" style="width: 480px; height: 480px;"></div> <!-- MAP -->
</center>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTiXwumKDxQssmTTC8lLI2Q5Y6aXHRj2U">
    </script>
    <script type="text/javascript">    
var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(48.853410, 2.34880000);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function codeAddress() {
    var ret = $('.resultat_recherche').each(function(i, obj){
        var address = obj.innerHTML;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }); 
}
initialize();
codeAddress();
    </script>
    <!-- Fin de script map -->