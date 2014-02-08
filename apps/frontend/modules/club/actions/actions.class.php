<?php

/**
 * club actions.
 *
 * @package    tourvolume
 * @subpackage club
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clubActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $api_call = tourvolumeApi::getClubResults($request->getParameter('clubslug'));
    $this->results = json_decode($api_call);
  }
}
