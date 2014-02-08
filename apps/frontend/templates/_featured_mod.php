<?php use_helper('Text') ?>
<?php if($featured_show): ?>
<h2 class="titles"><?php echo $module_title; ?></h2>
<div class="border_color content_container round">
  <div class="clearfix">
    <?php echo link_to(image_tag($featured_show->artist_image, 'width=110 height=110 alt=featured artist '.$featured_show->artist_name), '@artistshow_url?artist='.myTools::generateSlug($featured_show->artist_name, true).'-in-concert&id='.$featured_show->concert_id,'class=featured_img title='. $featured_show->artist_name . ' profile'); ?>
    <div class="featured_band">
      <?php echo link_to($featured_show->artist_name, '@artistshow_url?artist='.myTools::generateSlug($featured_show->artist_name, true).'-in-concert&id='.$featured_show->concert_id, 'title='. $featured_show->artist_name . ' profile class=accent'); ?>
        <h3><?php echo link_to($featured_show->venue_name, '@club_route?clubslug='.$featured_show->venue_slug.'&id='.$featured_show->venue_id, 'title=View the concert listing for '.$featured_show->venue_name) ?>
        <br />
        <?php echo link_to($featured_show->city.', '.$featured_show->stateabv, '@city_route?city='.$featured_show->city.'&state='. $featured_show->state.'&cityid='.$featured_show->city_id,'title=Concerts in '.$featured_show->city.', '.$featured_show->stateabv) ?>
        <br />
        <?php echo myTools::getDay($featured_show->concert_date); ?>&nbsp;<?php echo myTools::cutDate($featured_show->concert_date); ?>
        </h3>
    </div>
  </div>
  <div class="clearfix actionwrapper">
    <div class="column col_featured">
    <?php if($featured_show->artist_id != 4 && $featured_show->artist_has_mp3 == 1): 
      echo jq_link_to_remote('Listen', array("url" => "/artist/refresh?id=".$featured_show->artist_id.'&key='.$featured_show->artist_id, 'complete'=>'play_tune(request,json)'), 'id=a_'.$featured_show->artist_id.' class=p_link action-link soundlink title=Listen to '.$featured_show->artist_name.' before you see them in concert' );
    endif; ?>
      <?php // echo link_to('Add to Cal.', '/api/ical?tourid='.$featured_show->concert_id, 'class=action-link callink rel=nofollow title=Add the '.$featured_show->artist_name. ' concert to iCal or Outlook Calendar' ) ?>
      <?php //echo link_to('Facebook', '@facebook_url?id='.$featured_show->concert_id, 'class=action-link share_on_facebook rel=nofollow title=Share '.$featured_show->artist_name. '\'s Show on Facebook target=_blank' ) ?>
    </div>
    <div class="column col_featured">
      <?php //echo link_to_function('Buy Tickets', "playerWindow('/ticket/modal?id=".$featured_show->concert_id."','725','350', 'playlist', 'featured_".$featured_show->concert_id."')", 'target=_blank class=action-link ticket-link title=buy '.$featured_show->artist_name. ' concert tickets' ); 
    if ($user->isAuthenticated() && $user->hasCredential('tourvolume_fan')):
      //echo link_to('Become a Fan', '/concertgoer/becomefan?id='.$user->getAttribute('sess_id', '', 'tourvolume_fan').'&bandid='.$featured_show->artist_id.'&bandname='.$featured_show->artist_name, array('title'=>'get updates when '.$featured_show->artist_name.' is coming to your area', 'class'=>'action-link become-a-fan')); 
    else: 
      //echo link_to('Become a Fan', '/users/login', array('title'=>'get updates when '.$featured_show->artist_name.' is coming to your area', 'class'=>'action-link become-a-fan')); 
    endif;
      //echo link_to('Twitter', '@twitter_url?id='.$featured_show->concert_id, 'class=action-link share_on_twitter rel=nofollow title=Share '.$featured_show->artist_name. '\'s Show on Twitter target=_blank' );
      ?>
    </div>
  </div>
</div>
<?php endif; ?>