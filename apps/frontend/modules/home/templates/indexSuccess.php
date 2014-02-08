<?php include_partial('top_non_logged'); ?>

<div id="content" class="col_lt">
  <div id="concert-listings" class="inner">
    <h1 class="title">Concerts near <?php echo $results->result->city_name. ', '.$results->result->state_abv; ?></h1>
    <?php include_partial('global/city_arranged_concert_listing', array('tours' => $results->result->event, 'user' => $sf_user, 'dateline' => true, 'showfanlink' => true, 'offset' => 0)); ?>
  </div>
</div>
<div id="sidebar" class="col_rt"> 
  <?php include_partial('global/featured_mod', array('featured_show' => $results->result->featured_show,'user' => $sf_user, 'module_title' => 'Must See Concert', 'sf_cache_key' => 'homepage_featured_band_'.$results->result->city_id)); ?>
  <?php include_partial('global/featured_club_mod', array('featured_club' => $results->result->featured_venue, 'module_title' => 'Featured Venue', 'sf_cache_key' => 'homepage_featured_club_'.$results->result->city_id)); ?>
  <h2 class="titles">Date</h2>
  <div class="border_color content_container round">
    <div id="cal_view">
    <?php
      $cal_array = array('year' => date('Y'), 'month' => date('m'), 'today' => date('j',time()), 'city' => $city_info->city, 'state' => $city_info->state, 'pn' => array());
      include_partial('global/mkcal', array('cal' => $cal_array));
    ?>
    </div>
  </div>
  <?php //include_partial('tour/nearby_cities', array('nearby_cities' => $nearby_cities, 'sf_cache_key' => 'homepage_nearby_'.$city_info->city.'_'.$city_info->state)); ?>
  <?php //include_partial('global/iphone', array('sf_cache_key' => 'iphone_ad')); ?>
  <?php //include_partial('global/ad_handler_300x250'); ?>
</div>
<?php
$scripturl = 'api/more/results?ajax=1';
if($sf_request->hasParameter('genre')){
  $scripturl = $scripturl.'&genre='.$sf_request->getParameter('genre');
}
?>
<?php slot('progress_scrolling') ?>
<script type="text/javascript">

 $(document).ready(function(){
    $("body").flexiPagination({
     url: "<?php echo $scripturl; ?>",
     currentPage: 0,
     totalResults: <?php echo $results->result->count; ?>,
     perPage: 50,
     container: "#concert-listings",
     pagerVar : "offset",
     loaderImgPath: "/img/loader.gif",
     debug : 1
    });


    setStickeyItems();
    
    $(window).scroll(UpdateTableHeaders).trigger("scroll");
 });

</script>
<?php end_slot() ?>