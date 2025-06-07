<?php

require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);
// ４つを抽出したものからなるrandom_numbersという配列ただしintだけなので数字を参照しないと中身は見れない

foreach($random_indexes as $index){
    $options[] = $status_codes[$index];
    // 抽出された4つのintを一つずつstatus_codesに代入,最初は１つで良いと思っていたけど４つのコードをランダムに表示させる上で必要
}

$question = $options[mt_rand(0, 3)];
// optionのキーが0〜3までの間でランダムに

// echo('<pre>');
// var_dump($options);
// echo('</pre>');

// echo('<pre>');
// var_dump($question);
// echo('</pre>');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>


<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            Status Code Quiz
        </a>
    </div>
</header>

<main>
    <div class="quiz__content">

        <div class="question">
            <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
            <!-- $questionすなわち$optionのランダムなもののうち説明文のところだけを呼び出し -->
            <p class="question__text"><?php echo $question['description']?></p>
        </div>

        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>"><!-- $questionすなわち$optionのランダムなもののうちcodeのところだけを入力 ここで正解であるcodeを送らないと、result.phpが正解の番号を判断できない-->

            <div class="quiz-form__item">
            <?php foreach ($options as $option){ ?>
                <!-- $optionsのうち一つずつ$optionに代入5行目で4個のデータを拾っているので４回変数が代入される -->
                <div class="quiz-form__group">
                    <!-- inputのidとlabelのforを合わせるとこの二つを結びつけられる。labelの中にinputを書いても同じことidはlabelとのむすびつけのため、valueは実際に送る値。option['code']がanswer codeと一緒なら正解 -->
                    <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                    <!-- labelの方はどちらかというと実際に画面表示させるための記述 -->
                    <label class="quiz-form__label" for="<?php echo $option['code'] ?>"><?php echo $option['code'] ?></label>
                </div>
            <?php } ?>
            </div>

            <div class="quiz-form__button">
                <!-- inputでも代用できるけど、buttonはボタンについて色々できる、inputはボタン以外にも色々できる -->
                <button class="quiz-form__button-submit" type="submit">
                    回答
                </button>
            </div>

        </form>
    </div>
</main>
    
</body>

</html>