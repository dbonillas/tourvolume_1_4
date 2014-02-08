<?php

/**
 * artist actions.
 *
 * @package    tourvolume
 * @subpackage artist
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class artistActions extends sfActions
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
  
  public function executeArtist_show(sfWebRequest $request)
  {
    
  }
  

  
}
