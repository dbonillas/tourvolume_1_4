var lastid = '1';
soundManager.url = '/swf/'

var lastid = '1';
function play_tune(request, json){

    $('a_'+json.id).removeClassName('p_link');
    $('a_'+json.id).addClassName('playing');
    if(lastid != '1'){
        $(lastid).removeClassName('playing');
        $(lastid).addClassName('p_link');
    }

    soundManager.stopAll();

    var mySound = soundManager.createSound({
        id: 'a_'+json.id,
        url: json.mp3
    });
    soundManager.stopAll();

    if(lastid != $('a_'+json.id).id){
        lastid = $('a_'+json.id).id;
        mySound.play();
    }else{
        lastid = '1';
    }

}
