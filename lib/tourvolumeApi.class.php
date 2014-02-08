<?php
class tourvolumeApi
{
  public static function makeGetApiRequests($method, $params, $section = 'api')
  {
    $url = sfConfig::get('app_api_url').'/v1/'.$section.'/'.$method;
  
    $b = new sfWebBrowser();
    $nurl = $b->get($url, $params);
    try
    {
      if (!$nurl->responseIsError())
      {
        return $nurl->getResponseText();
      }
      else
      {
        return false;
      }
    }
    catch (Exception $e)
    {
      return false;
    }
  }

  public static function makePostApiRequests($method,$param, $section = 'api')
  {
    $b = new sfWebBrowser();
    $url = sfConfig::get('app_api_url').'/v1/'.$section.'/'.$method;

    try
    {
      if (!$b->post($url, $param)->responseIsError())
      {
        // Successful response (eg. 200, 201, etc)
      }
      else
      {
        // Error response (eg. 404, 500, etc)
      }
    }
    catch (Exception $e)
    {
      // Adapter error (eg. Host not found)
    }
  }
  
  public static function getLocationResults($params)
  {
    return self::makeGetApiRequests('getConcertsByLocation', $params);
  }

  public static function getMediaById($params)
  {
    return self::makeGetApiRequests('getMediaByArtistId', $params);
  }

  public static function getCityResults($city_id, $limit, $offset, $distance = 15)
  {
    return self::makeGetApiRequests('getConcertsByCity', array('output'=>'json', 'cityid'=>$city_id, 'limit' => $limit, 'offset' => $offset, 'distance' => $distance));
  }
  
  public static function getArtistResults($artistslug, $limit, $offset)
  {
    return self::makeGetApiRequests('getConcertsByArtist', array('output'=>'json'));
  }

  public static function getArtistShowResults($params)
  {
    return self::makeGetApiRequests('getConcertById', $params);
  }

  public static function getClubResults($clubslug)
  {
    return self::makeGetApiRequests('getConcertsByClub', array('output'=>'json', 'clubslug' => $clubslug));
  }
  

}
?>