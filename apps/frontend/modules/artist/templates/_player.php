<h3 class="title">Listen</h3>
<ul id="player" class="border_box">
  <?php foreach($mp3s as $key => $mp3): ?>
  <li><?php echo jq_link_to_function('Track '.($key + 1), "play_tune('".url_for('@artist_refresh?id='.$mp3->id.'&key='.$key)."')", 'id=a_'.$key.' class=p_link action-link soundlink rel=nofollow'); ?></li>
  <?php endforeach; ?>
</ul>
