<?php
$test_date = 0;
$ad_list = 0;
foreach ($tours as $key => $tour):
  $title_tag = $tour->artist_id == 4 ? 'Click to view other cities '. $tour->artist_name .' will be playing at.' : 'Click to listen and view other cities '. $tour->artist_name .' will be playing at.';
  if($tour->event_date != $test_date && $dateline == true){
?>
<div class="show_wrapper bg_date clearfix">
  <div class="show_dateline"><?php echo myTools::getDay($tour->event_date); ?> &nbsp;<?php echo myTools::cutDate($tour->event_date); ?></div>
</div>
<?php
  }
  $date_cal = myTools::mkCalView($tour->event_date);
?>
 <div class="show_wrapper <?php echo fmod($key, 2) ? 'even_background' : 'odd_background'; ?> clearfix">
    <div class="calView">
      <div class="cal_head"><?php echo $date_cal['month'] ?></div>
        <div class="cal_body"><?php echo $date_cal['day'] ?></div>
    </div>
  <?php
    if($tour->artist_id == 4)
    {
      $artimg = fmod($key, 2) ? 'http://concertassets.s3.amazonaws.com/images/noimage.gif' : 'http://concertassets.s3.amazonaws.com/images/noimage.png';
    }else{
      $artimg = $tour->artist_img_md;
    }
    echo link_to(image_tag($artimg, 'width=70 height=70 alt='.$tour->artist_name.' image'), '@show_url_route?artist='.myTools::generateSlug($tour->artist_name, true).'-in-concert&id='.$tour->event_id,'class=tour_band_img title='.$tour->artist_name .' in concert');
    ?>
  <div class="tour_band">
   <?php echo link_to($tour->artist_name, '@show_url_route?artist='.myTools::generateSlug($tour->artist_name, true).'-in-concert&id='.$tour->event_id, 'title='.$title_tag. ' class=accent'); ?>
   <p class="spacer"><?php
      if($tour->venue_id != 4){
        echo link_to($tour->venue_name.' ', '@club_route?clubslug='.$tour->venue_slug.'_'.$tour->city_id, 'title=View the concert listing for '.$tour->venue_name);
        }else{
        echo link_to($tour->venue_name.' ', '@club_route?clubslug='.$tour->venue_slug.'_'.$tour->city_id, 'title=View the concert listing for '.$tour->venue_name);
      }
        echo link_to($tour->city_name.', '.$tour->state_abv.' ', '@city_route?city='.$tour->city_name.'&state='. $tour->state_name.'&cityid='.$tour->city_id,'title=Concerts in '.$tour->city_name.', '.$tour->state_abv);
        $tour->artist_img_md == '' ? '&nbsp;' : $tour->artist_img_md; 
      ?></p> 
  </div>
    <?php if($tour->artist_id != 4 && $tour->artist_has_mp3): ?>
    <div class="column col_show">
      <?php //echo link_to_remote('Listen', array("url" => "/band/refresh?id=".$tour->artist_id.'&key='.$key, 'complete'=>'play_tune(request,json)'), 'id=a_'.$key.' class=p_link action-link soundlink rel=nofollow title=Listen to '.$tour->artist_name.' before you see them in concert' ); ?>
    </div>
    <?php endif; ?>
    <div class="column_rt col_show">
      <?php //echo link_to_function('Buy Tickets', "playerWindow('/ticket/modal?id=".$tour->event_id."','725','350', 'playlist' )", 'class=action-link ticket-link title=buy '.$tour->artist_name. ' concert tickets' );
      if($showfanlink):
        if ($user->isAuthenticated() && $user->hasCredential('tourvolume_fan')):
        //echo link_to('Become a Fan', '/concertgoer/becomefan?id='.$user->getAttribute('sess_id', '', 'tourvolume_fan').'&bandid='.$tour->artist_id.'&bandname='.$tour->artist_name, array('title'=>'get updates when '.$tour->artist_name.' is coming to your area', 'class'=>'action-link become-a-fan')); 
        else: 
        //echo link_to('Become a Fan', '/users/login', array('title'=>'get updates when '.$tour->artist_name.' is coming to your area', 'class'=>'action-link become-a-fan')); 
        endif;
      endif;
        //echo link_to('Add to Cal.', '/api/ical?tourid='.$tour->event_id, 'class=action-link callink rel=nofollow title=Add the '.$tour->artist_name. ' concert to iCal or Outlook Calendar' );
      ?>
    </div>
 </div>
<?php
$test_date = $tour->event_date;
$venue = $tour->venue_slug;
endforeach;
?>
