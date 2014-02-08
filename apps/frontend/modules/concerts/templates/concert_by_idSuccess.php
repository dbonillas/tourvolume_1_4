<div id="content" class="col_lt">
  <div class="inner">
    <h1 class="title"><?php echo $api_call->result->show->artist_name; ?></h1>
    <div class="clearfix">
      <div class="artist_media col_lt">
        <?php echo image_tag($api_call->result->show->artist_img_md); ?>
        <?php
        if($api_call->result->show->artist_has_mp3s == 1): 
        include_partial('artist/player', array('mp3s' => $api_call->result->show->artist_mp3)); 
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
<div id="sidebar" class="col_rt">
</div>

<?php
echo '<pre>';
print_r($api_call);
echo '</pre>';
?>