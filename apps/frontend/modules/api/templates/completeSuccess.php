<?php

foreach($artists as $artist){
  $json[] = array('label' => $artist->getName(), 'category' => 'Artists');
}
foreach($cities as $city){
  $json[] = array('label' => $city->getCity(), 'category' => 'City');
}

foreach($clubs as $club){
  $json[] = array('label' => $club->getName(), 'category' => 'Clubs');
}
echo json_encode($json);
?>