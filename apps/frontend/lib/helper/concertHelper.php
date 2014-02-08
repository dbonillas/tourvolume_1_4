<?php
function sortByViewed( $a, $b )
{ 
  if(  $a->viewed ==  $b->viewed ){ return 0 ; } 
  return ($a->viewed > $b->viewed) ? -1 : 1;
}
?>