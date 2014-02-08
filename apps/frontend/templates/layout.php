<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php //include_optimized_stylesheets() ?>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <?php include_partial('global/header_main'); ?>
      </div>
      <div id="main" class="clearfix">
        <?php echo $sf_content ?>
      </div>
    </div>
    <div id="footer">
      <div id="footer-wrapper">
        footer
      </div>
    </div>
   <?php //include_optimized_javascripts() ?>
   <?php include_javascripts() ?>
 <script>
 $.widget( "custom.catcomplete", $.ui.autocomplete, {
  _renderMenu: function( ul, items ) {
   var self = this,
    currentCategory = "";
   $.each( items, function( index, item ) {
    if ( item.category != currentCategory ) {
     ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
     currentCategory = item.category;
    }
    self._renderItem( ul, item );
   });
  }
 });
 </script>
  <script type="text/javascript">
  //<![CDATA[
  $(function() {
    $( "#search_all" ).catcomplete({
      delay: 0,
      minChars:2,
      select: function( event, ui ) {
        $("input#searchCat").val(ui.item.category);
      },
      source: function( request, response ) {
        $.ajax({
          url: '<?php echo url_for('@search_route') ?>',
          dataType: "json",
          data: { q: request.term },
          success: function( data ) {
            response( $.map( data, function( item ) {
              return {
                label: item.label,
                category: item.category
              }
            }));
          }
        });
      },
    });
  });
  //]]>
  </script>
<?php
if (has_slot('progress_scrolling')){
  include_slot('progress_scrolling');
}
?>
  </body>
</html>
