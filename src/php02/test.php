<?php



function searchCityTime($city_name2)
{
  $cities = [
    [
      'name' => 'シドニー',
      'time_zone' => 'Australia/Sydney',
      'img' => 'australia.jpg'
    ],
    [
      'name' => '東京',
      'time_zone' => 'Asia/Tokyo',
      'img' => 'japan.jpg'
    ],
    [
      'name' => '上海',
      'time_zone' => 'Asia/Shanghai',
      'img' => 'china.jpg'
    ],
    [
      'name' => 'モスクワ',
      'time_zone' => 'Europe/Moscow',
      'img' => 'russia.jpg'
    ],
    [
      'name' => 'ロンドン',
      'time_zone' => 'Europe/London',
      'img' => 'british.jpg'
    ],
    [
      'name' => 'ヨハネスブルグ',
      'time_zone' => 'Africa/Johannesburg',
      'img' => 'south-africa.jpg'
    ],
    [
      'name' => 'ニューヨーク',
      'time_zone' => 'America/New_York',
      'img' => 'america.jpg'
    ]
  ];

  $city_name2='上海';

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
      // var_dump($city);で呼び出そうとしたけど、Functionの中身は関数を呼び出さないと使えない
      var_dump($city);
      return $city;
      }
    }
  // var_dump($city);
}

// echo searchCityTime($city_name2)['time'];
searchCityTime($city_name2);

// print_r(searchCityTime($city_name2));
// searchCityTime($city_name2);
// "<br />";
// var_dump(searchCityTime($city_name2));
// require('../config/cities.php');
// var_dump($cities);
