<?php

/**
 * concerts actions.
 *
 * @package    tourvolume
 * @subpackage concerts
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class concertsActions extends sfActions
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

  public function executeConcert_by_id(sfWebRequest $request)
  {
    $params = array('output'=>'json',
                    'id' => $request->getParameter('id'));
    $this->api_call = json_decode(tourvolumeApi::getArtistShowResults($params));
    
  }
}
