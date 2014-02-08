<?php

/**
 * home actions.
 *
 * @package    tourvolume
 * @subpackage home
 * @author     Dave Bonillas
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    if(isset($_COOKIE['concert'])){
      $location = json_decode($_COOKIE['concert']);
    }else{
      $geoIp = myTools::locateIp($_SERVER['REMOTE_ADDR']);
      $cityObj = Doctrine::getTable('TvCity')->getCityObj($geoIp['city'], $geoIp['region']);
      $location = json_decode(myTools::setTvCookies($cityObj));
    }

    $params = array('output'=>'json',
                    'lat' => $location->lat,
                    'lon' => $location->lon,
                    'limit' => 50,
                    'offset' => $request->getParameter('offset', 1),
                    'arrange_by' => true,
                    'distance' => 30
                    );
    if($request->hasParameter('genre')){
      $params = array_merge($params, array('genre' => $request->getParameter('genre')));
    }

    $api_call = tourvolumeApi::getLocationResults($params);
    $this->results = json_decode($api_call);
    $this->city_info = $location;
  }

}
