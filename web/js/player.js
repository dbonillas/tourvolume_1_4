var lastid = '1';
soundManager.url = '/swf/'
function play_tune(url){
  $.getJSON(url, function(data){
    $('#a_'+data.id).removeClass('p_link').addClass('playing');
    if(lastid != '1'){
      $('#'+lastid).removeClass('playing').addClass('p_link');
    }
    
    if($('#sm2-container')){
      soundManager.stopAll();
    }
    
    if ($('#song').length) {
      $('#song').remove();
    }
    if(data.mpa){
      $('#footer').append('<div id="song"></div>');
      if(lastid != $('#a_'+data.id).attr('id')){
        lastid = $('#a_'+data.id).attr('id');
        var quickTimePlayer = QT_GenerateOBJECTText_XHTML(
        data.mp3, '1', '1', '',
        'emb#NAME', 'qsound_'+lastid,
        'obj#id', 'qsound_'+lastid,'autoplay', 'true',
        'EnableJavaScript', 'true'
        );
        $('#song').html(quickTimePlayer);
      }else{
        lastid = 1;
      }
    }else{
      var mySound = soundManager.createSound({
        id: 'a_'+data.id,
        url: data.mp3
      });
      soundManager.stopAll();
  
      if(lastid != $('#a_'+data.id).attr('id')){
          lastid = $('#a_'+data.id).attr('id');
          mySound.play();
      }else{
          lastid = '1';
      }
    }
  });
}
