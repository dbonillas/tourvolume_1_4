<?php if(isset($featured_club->venue_name)) : ?>
<div id="featured-venue">
  <h2 class="titles"><?php echo $module_title; ?></h2>
  <div class="border_color content_container round">
    <?php echo link_to($featured_club->venue_name, '@club_route?clubslug='.$featured_club->venue_slug, 'title='.$featured_club->venue_name.' Concert listings class=accent') ?>
    <ul>
      <li><?php echo $featured_club->venue_address ?></li>
      <li><?php echo urldecode($featured_club->city) . ', ' . $featured_club->state_abv; ?></li>
      <li class="shows">Upcoming Shows</li>
  <?php foreach($featured_club->shows as $club_show): ?>
      <li><?php echo myTools::cutDate($club_show->event_date); ?>&nbsp;&nbsp;<?php echo link_to($club_show->artist_name,'@artist_route?id='.$club_show->artist_id.'&artistslug='.myTools::generateSlug($club_show->artist_name), 'title='. $club_show->artist_name .' Concert Listings'); ?></li>
  <?php endforeach;  ?>
      <li class="last accent"><?php echo link_to($featured_club->venue_name.' Concert listings','@club_route?clubslug='.$featured_club->venue_slug, 'title='.$featured_club->venue_name.' Concert listings')?></li>
    </ul>
  </div>
</div>
<?php endif; ?>