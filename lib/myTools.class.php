<?php
class myTools
{

  public static function generateSlug($phrase, $upper = false)
  {
    if($upper){
      $result = $phrase;
    }else{
      $result = strtolower($phrase);
    }
    $result = preg_replace("/[^a-zA-Z0-9\s-]/", "", $result);
    $result = trim(preg_replace("/[\s-]+/", " ", $result));
    $result = trim(substr($result, 0, 45));
    $result = preg_replace("/\s/", "-", $result);

    return $result;
  }
  
  public static function mkCalView($datePassed)
  {

    $date_piece = explode("-", $datePassed);
    $after_split = date("M-j-Y", mktime(0, 0, 0, $date_piece[1], $date_piece[2], $date_piece[0]));
    $day = date("D", mktime(0, 0, 0, $date_piece[1], $date_piece[2], $date_piece[0]));
    $month = date("m", mktime(0, 0, 0, $date_piece[1], $date_piece[2], $date_piece[0]));
    $split_array = explode('-', $after_split);
    $date_data = array('month' => $split_array[0], 'day' => $split_array[1],'year' => $split_array[2],'day_string' => $day,'month_num' => $month);

  return $date_data;
  }
  public static function locateIp($ip)
  {

    if($_SERVER['SERVER_ADDR'] === '74.3.220.195'){
     $_remote_address = $ip;
    }else{
     $_remote_address = '24.5.131.131';
    }
    include_once('geo/ipinfodb.class.php');
    $ipinfodb = new ipinfodb;
    $ipinfodb->setKey('fa191dc941c5edd6904a3b40343420520d8961c555e0fab04a2454382151a9ac');

    $geolocation = $ipinfodb->getGeoLocation($_remote_address);
    $errors = $ipinfodb->getError();

    if(!empty($errors) && is_array($errors)){
      $mylocation = array('ip' => $_remote_address,
                          'country_code' => 'US',
                          'country_name' => 'United States',
                          'region' => 'California',
                          'city' => 'Foster City',
                          'postalcode' => '94404',
                          'latitude' => '37.555',
                          'longitude' => '-122.269',
                          //'timezone' => '-8',
                          'gmtoffset' => '-8',
                          'dstoffset' => '-7'
                          );
    }else{
      
      $mylocation = array('ip' => $geolocation['Ip'],
                          'country_code' => $geolocation['CountryCode'],
                          'country_name' => $geolocation['CountryName'],
                          'region' => $geolocation['RegionName'],
                          'city' => $geolocation['City'],
                          'postalcode' => $geolocation['ZipPostalCode'],
                          'latitude' => $geolocation['Latitude'],
                          'longitude' => $geolocation['Longitude'],
                          //'timezone' => $geolocation['Timezone'],
                          'gmtoffset' => $geolocation['Gmtoffset'],
                          'dstoffset' => $geolocation['Dstoffset']
                          );
    }  
    return $mylocation;
 }

  static public function setTvCookies($cookies)
  {
    $time = time()+(60*60*24*30);
    //$concert = array('city_id' => $cookies->getId(),
    //                 'city' => $cookies->getCity(),
    //                 'state' => $cookies->getState(),
    //                 'state_abv' => $cookies->getStateAbv(),
    //                 'lat' => $cookies->getLatitude(),
    //                 'lon' => $cookies->getLongitude()
    //                );
        $concert = array('city_id' => '146',
                     'city' => 'San Francisco',
                     'state' => 'California',
                     'state_abv' => 'CA',
                     'lat' => '37.7957',
                     'lon' => '-122.421'
                    );
    setcookie('concert', json_encode($concert), $time, '/');
    return json_encode($concert);
  }

 public static function generate_calendar($year, $month, $today, $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array(), $city, $state){
  $first_of_month = gmmktime(0,0,0,$month,1,$year);
  #remember that mktime will automatically correct if invalid dates are entered
  # for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
  # this provides a built in "rounding" feature to generate_calendar()
 
  $day_names = array(); #generate all the day names according to the current locale
  for($n=0,$t=(3+$first_day)*86400; $n<7; $n++,$t+=86400) #January 4, 1970 was a Sunday
   $day_names[$n] = ucfirst(gmstrftime('%A',$t)); #%A means full textual day name
 
  list($month, $year, $month_name, $weekday) = explode(',',gmstrftime('%m,%Y,%B,%w',$first_of_month));
  $weekday = ($weekday + 7 - $first_day) % 7; #adjust for $first_day
  $title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year;  #note that some locales don't capitalize month and day names
 
  if($month > date('m') || date('Y') < $year){
            $prevmonth = $month - 1;
            $p = '<span class="calendar-prev"><a onclick="new Ajax.Updater(\'cal_view\', \'/api/ajaxCal/c/'.urlencode($city).'/s/'.urlencode($state).'/y/'.$year.'/m/'.$prevmonth.'\', {asynchronous:true, evalScripts:false});; return false;" href="#">&laquo;</a></span>&nbsp;';
        }else{
            $p = '';
        }
        $nextmonth = $month + 1;
  $n = '&nbsp;<span class="calendar-next"><a onclick="new Ajax.Updater(\'cal_view\', \'/api/ajaxCal/c/'.urlencode($city).'/s/'.urlencode($state).'/y/'.$year.'/m/'.$nextmonth.'\', {asynchronous:true, evalScripts:false});; return false;" href="#">&raquo;</a></span>';
  $calendar = '<table class="calendar">'."\n".
   '<caption class="calendar-month">'.$p.($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title).$n."</caption>\n<tr>";
 
  if($day_name_length){ #if the day names should be shown ($day_name_length > 0)
   #if day_name_length is >3, the full name of the day will be printed
   foreach($day_names as $d)
    $calendar .= '<th abbr="'.htmlentities($d).'">'.htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>';
   $calendar .= "</tr>\n<tr>";
  }
 
  if($weekday > 0) $calendar .= '<td colspan="'.$weekday.'">&nbsp;</td>'; #initial 'empty' days
  for($day=1,$days_in_month=gmdate('t',$first_of_month); $day<=$days_in_month; $day++,$weekday++){
   if($weekday == 7){
    $weekday   = 0; #start a new week
    $calendar .= "</tr>\n<tr>";
   }
            $linkday = ($day < 10) ? '0'.$day : $day;
            
            $date_url = link_to($day, '@cal_search?city='.$city.'&state='.$state.'&date='.$year ."-". $month ."-".$linkday, 'rel=nofollow');
   if($today == $day){
                
                $calendar .= "<td class=\"today\">$date_url</td>";
            }elseif($today > $day && $month == date('m')) {
                $calendar .= "<td>$day</td>";
            }else{
                $calendar .= "<td>$date_url</td>";
            }
  }
  if($weekday != 7) $calendar .= '<td colspan="'.(7-$weekday).'">&nbsp;</td>'; #remaining "empty" days
 
  return $calendar."</tr>\n</table>\n";
 }
  
 public static function getDay($datePassed)
 {
  $dateCity_piece = explode("-", $datePassed);
  $day = date("D", mktime(0, 0, 0, $dateCity_piece[1], $dateCity_piece[2], $dateCity_piece[0]));
  return $day;
 }

  public static function cutDate($datePassed)
 {
  $dateCity_piece = explode("-", $datePassed);
  $date = $dateCity_piece[1] . "/" . $dateCity_piece[2];
  return $date;
 }
 /**
 * Creates a description based on page type
 *
 * @param  $value    string
 * @param  $type int
 * 
 * @return string
 */
 public static function create_description($value, $type)
 {
  //type 1 = tour
  //type 2 = band
  if($type == 1){
   $description = 'Tour Volume is the newest way view '.$value.' Concert Listings! Tour Volume allows you to listen to the bands that are on tour! Find out what is going on in '.$value.' or cities around '.$value.'. Tour Volume beats all other '.$value.' Concert Listings on the web!';
  }
  return $description;
  
 }
  /**
  * Creates a keywords based on page type
  *
  * @param  $value    string
  * @param  $type int
  * 
  * @return string
  */
  public static function create_keywords($value, $type)
  {
   //type 1 = tour
   //type 2 = band
   if($type == 1){
    $keywords = 'Tour Volume, '.$value.' concert listings, concerts, tours, dates, schedules, artists, events, venues, tickets, entertainment, music, bands, listings, festivals, reviews, tour volume, music news';
   }
   return $keywords;
   
  }
  
  public static function itunes_feed()
  {
    return sfFeedPeer::createFromWeb('http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topsongs/sf=143441/limit=10/genre=20/xml?partnerId=30&LS_PARAM=http%3A%2F%2Fclick.linksynergy.com%2Ffs-bin%2Fstat%3Fid%3DaNwCE%2Fplr2M%26offerid%3D146261%26type%3D3%26subid%3D0%26tmpid%3D1826%26RD_PARM1%3D');
  }


}
?>