<?php

/**
 * json actions.
 *
 * @package    tourvolume
 * @subpackage json
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jsonActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executePlayer_json(sfWebRequest $request)
  {
    $api_call = tourvolumeApi::getMediaById(array('output'=>'json',
                                                  'id' => $request->getParameter('id')
                                                  ));
    
    $mp3 = json_decode($api_call);

    //$rand = rand(0, $mp3->result->count);
    $is_apple = substr($mp3->result->artist_mp3[0]->mp3, -3) == 'm4a' ? true : false;
    $this->artist_arry = array('id' => $request->getParameter('key'),
                         'mp3' => $mp3->result->artist_mp3[0]->mp3,
                         'mpa' => $is_apple,
                         'artist' => $mp3->result->artist_mp3[0]->id);

    $this->getResponse()->setHttpHeader('Content-type', 'application/json');
    $this->setLayout('layout_json'); 
  }
}
