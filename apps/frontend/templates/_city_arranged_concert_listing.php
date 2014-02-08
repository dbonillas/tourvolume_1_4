<div class="persist-area">
<?php
use_helper('concert', 'Text');
$test_date = 0;
$ad_list = 0;

foreach ($tours as $key => $tour):
  $title_tag = $tour->artists[0]->artist_id == 4 ? 'Click to view other cities '. $tour->artists[0]->artist_name .' will be playing at.' : 'Click to listen and view other cities '. $tour->artists[0]->artist_name .' will be playing at.';
  if($tour->event_date != $test_date && $dateline == true){
    if($key != 0){
      echo '</div>';
      echo '<div class="persist-area">';
    }
?>

  <div class="show_wrapper bg_date persist-header">
    <h2 class="show_dateline"><?php echo myTools::getDay($tour->event_date); ?> &nbsp;<?php echo myTools::cutDate($tour->event_date); ?></h2>
  </div>
<?php
  }
  $date_cal = myTools::mkCalView($tour->event_date);
?>
  <div class="concert-listing <?php echo fmod($key, 2) ? 'even_background' : 'odd_background'; ?> clearfix">
      <?php /* ?><div class="calView col_lt">
        <div class="cal_head"><?php echo $date_cal['month'] ?></div>
        <div class="cal_body"><?php echo $date_cal['day'] ?></div>
      </div><?php */ ?>
    <?php
    if(count($tour->artists) > 1){ usort($tour->artists,'sortByViewed'); }
    if($tour->artists[0]->artist_id == 4)
    {
      $artimg = fmod($key, 2) ? 'http://concertassets.s3.amazonaws.com/images/noimage.gif' : 'http://concertassets.s3.amazonaws.com/images/noimage.png';
    }else{
      $artimg = $tour->artists[0]->artist_img_md;
    }
    echo link_to(image_tag($artimg, 'width=125 height=125 alt='.$tour->artists[0]->artist_name.' image'), '@show_url_route?artist='.myTools::generateSlug($tour->artists[0]->artist_name, true).'-in-concert&id='.$tour->event_id,'class=tour_band_img col_lt title='.$tour->artists[0]->artist_name .' in concert');
  ?>
    <div class="tour_band col_lt">
        <?php
        if(count($tour->artists) > 1){
          $loopthru = count($tour->artists) <= 3 ? count($tour->artists) : 3;
          $artists = '';
          for($i = 0; $i < $loopthru; $i++){
            echo '<h'.($i+1).' class="clearfix">';
            if($tour->artists[$i]->artist_has_mp3 == 1){
              echo jq_link_to_function('Listen', "play_tune('".url_for('@artist_refresh?id='.$tour->artists[$i]->artist_id.'&key='.$key.'_'.$offset.'_'.$i)."')", 'id=a_'.$key.'_'.$offset.'_'.$i.' class=p_link action-link soundlink col_lt rel=nofollow title=Listen to '.$tour->artists[$i]->artist_name.' before you see them in concert');
            }else{
              echo '<div class="action-link disabled-play col_lt"></div>';
            }
            echo link_to(truncate_text($tour->artists[$i]->artist_name, 40), '@show_url_route?artist='.myTools::generateSlug($tour->artists[0]->artist_name, true).'-in-concert&id='.$tour->event_id, 'title='.$title_tag. ' class=accent artist col_lt');
  
            echo '</h'.($i+1).'>';
           }
           if(count($tour->artists) > 3){
            $singular = (count($tour->artists) - 3) == 1 ? '' : 's';
            echo link_to('- plus '. (count($tour->artists) - 3).' other artist'. $singular, '@show_url_route?artist='.myTools::generateSlug($tour->artists[0]->artist_name, true).'-in-concert&id='.$tour->event_id, 'title='.$title_tag. ' class=accent plus_more');
           }
          }else{
            echo '<h1 class="clearfix">';
            if($tour->artists[0]->artist_has_mp3 == 1){
              echo jq_link_to_function('Listen', "play_tune('".url_for('@artist_refresh?id='.$tour->artists[0]->artist_id.'&key='.$key.'_'.$offset)."')", 'id=a_'.$key.'_'.$offset.' class=p_link action-link soundlink col_lt rel=nofollow title=Listen to '.$tour->artists[0]->artist_name.' before you see them in concert');
            }else{
              echo '<div class="action-link disabled-play col_lt"></div>';
            }
            echo link_to(truncate_text($tour->artists[0]->artist_name, 40), '@show_url_route?artist='.myTools::generateSlug($tour->artists[0]->artist_name, true).'-in-concert&id='.$tour->event_id, 'title='.$title_tag. ' class=accent artist col_lt');
            if($tour->artists[0]->artist_genre != ''){
              echo link_to('('.$tour->artists[0]->artist_genre.')', '@homepage?genre='.$tour->artists[0]->artist_genre, 'class=twelve');
            }
            echo '</h1>';
          }
        ?>
      <p class="spacer"><?php
      if($tour->venue_id != 4){
        echo link_to($tour->venue_name.' ', '@club_route?clubslug='.$tour->venue_slug.'_'.$tour->city_id, 'title=View the concert listing for '.$tour->venue_name);
      }else{
        echo link_to($tour->venue_name.' ', '@club_route?clubslug='.$tour->venue_slug.'_'.$tour->city_id, 'title=View the concert listing for '.$tour->venue_name);
      }
        echo link_to($tour->city_name.', '.$tour->state_abv.' ', '@city_route?city='.$tour->city_name.'&state='. $tour->state_name.'&cityid='.$tour->city_id,'title=Concerts in '.$tour->city_name.', '.$tour->state_abv);
        $tour->artists[0]->artist_img_md == '' ? '&nbsp;' : $tour->artists[0]->artist_img_md; ?>
      </p> 
    </div>
    <div class="actions">
      <?php
      echo link_to('Add to Cal.', '/api/ical?tourid='.$tour->event_id, 'class=action-link callink col_lt rel=nofollow title=Add the '.$tour->artists[0]->artist_name. ' concert to iCal or Outlook Calendar' );
      echo link_to('Tweet', '@twitter_url?id='.$tour->event_id, 'class=action-link share_on_twitter col_lt rel=nofollow title=Share '.$tour->artists[0]->artist_name. '\'s Show on Twitter target=_blank' );
      echo link_to('Share', '@facebook_url?id='.$tour->event_id, 'class=action-link share_on_facebook col_lt rel=nofollow title=Share '.$tour->artists[0]->artist_name. '\'s Show on Facebook target=_blank' ) 
      ?>
    </div>
    <div class="tickets">
      <?php if($tour->tickets != 0): ?>
      <?php echo link_to('get tickets','/', 'class=enabled') ?>
      <?php else: ?>
      <div class="disabled"></div>
      <?php endif; ?>
    </div>
    
    <?php /* if($tour->artists[0]->artist_id != 4 && $tour->artists[0]->artist_has_mp3): ?>
    <div class="column col_show">
      <?php //echo link_to_remote('Listen', array("url" => "/band/refresh?id=".$tour->artist_id.'&key='.$key, 'complete'=>'play_tune(request,json)'), 'id=a_'.$key.' class=p_link action-link soundlink rel=nofollow title=Listen to '.$tour->artist_name.' before you see them in concert' ); ?>
    </div>
    <?php endif; // end if($tour->artists[0]->artist_id != 4 && $tour->artists[0]->artist_has_mp3): ?>
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
      
    </div> */?>
  </div>
<?php
$test_date = $tour->event_date;
$venue = $tour->venue_slug;
endforeach;
?>
</div>
