<?php



function searchCityTime($city_name2)
{
  // require('../config/cities.php');
  require('./config/cities.php');
  これはindex.phpから見たパスが必要
  // $city_name2="東京";
    foreach ($cities as $city) {
    // citiesの中身を一つずつcityに代入
      if ($city['name'] === $city_name2) {
      // cityのnameが検索ボックスに入った$city_nameと同じになったら
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      // その時のcityのtime_zoneの現在の時間を$date_timeに代入
      $time = $date_time->format('H:i');
      // $date_timeをH：iの表示形式で表示
      $city['time'] = $time;
      // $cityに配列を追加

      // echo('<pre>');
      // print_r($city);
      // echo('<pre>');
      return $city;
      // var_dump($city);ここに入れるのはダメです
      }
    }
}

// searchCityTime($city_name2);