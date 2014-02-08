<?php

/**
 * api actions.
 *
 * @package    tourvolume
 * @subpackage api
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
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
  
  public function executeComplete(sfWebRequest $request){
    $term = $request->getParameter('q');
    $this->artists = Doctrine::getTable('TvArtist')->autoSearch($term);
    $this->cities = Doctrine::getTable('TvCity')->autoSearch($term);
    $this->clubs = Doctrine::getTable('TvClub')->autoSearch($term);
    $this->getResponse()->setHttpHeader('Content-type', 'application/javascript');
    $this->getResponse()->setHttpHeader('Etag', '"'.md5(serialize($this->artists.$this->cities.$this->clubs)).'"');
    
    $this->setLayout('layout_json');
  }
  
  public function executeMore_results(sfWebRequest $request){
    if(isset($_COOKIE['concert'])){
      $location = json_decode($_COOKIE['concert']);
    }else{
      $geoIp = myTools::locateIp($_SERVER['REMOTE_ADDR']);
      $cityObj = Doctrine::getTable('TvCity')->getCityObj($geoIp['city'], $geoIp['region']);
      $location = json_decode(myTools::setTvCookies($cityObj));
    }
    $offset = $request->getParameter('offset', 1) +1;
    $api_call = tourvolumeApi::getLocationResults(array('output'=>'json',
                                                        'lat' => $location->lat,
                                                        'lon' => $location->lon,
                                                        'limit' => 50,
                                                        'offset' => $offset,
                                                        'arrange_by' => true,
                                                        'distance' => 30
                                                        ));
    $results = json_decode($api_call);
    return $this->renderPartial('global/city_arranged_concert_listing', array('tours' => $results->result->event, 'user' => $this->getUser(), 'dateline' => true, 'showfanlink' => true, 'offset' => $offset));
   
  }
}
