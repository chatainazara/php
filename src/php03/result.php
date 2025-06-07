<?php

require_once('config/status_codes.php');

// index.phpからきた「表示されているdescriptionの正解のコード」
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);

//　index.phpで選択した選択肢のcode部分
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

// isset変数は、変数が定義されていて、かつ値が NULL でない場合に true を返します。一方、!変数 は、変数が定義されていないか、または値が NULL だった場合に true を返します。
if (!$option) {
  header('Location: index.php');
}

  // status_codeにstatus_codesを一個ずつ代入
foreach ($status_codes as $status_code) {
// もしanswer_codeすなわち正解のコードと同じ列に来たら$codeにはその時のcodeを、$descriptionにはその時のdescriptionを代入する。これが回答ページの下の表になる。
  if ($status_code['code'] === $answer_code) {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}

// $optionと$codeが完全に一致すれば$resultはtrue
$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
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
  <div class="result__content">

    <div class="result">
      <!-- $resultがtrueであれば -->
      <?php if ($result): ?>
      <h2 class="result__text--correct">正解</h2>
      <!-- $resultがfalseであれば -->
      <?php else: ?>
      <h2 class="result__text--incorrect">不正解</h2>
      <?php endif; ?>
    </div>

    <div class="answer-table">

      <table class="answer-table__inner">
        
      <tr class="answer-table__row">
        <th class="answer-table__header">ステータスコード</th>
        <td class="answer-table__text">
          <!-- foreachで見つけた正解のコード -->
        <?php echo $code ?>
        </td>
      </tr>

      <tr class="answer-table__row">
        <th class="answer-table__header">説明</th>
        <td class="answer-table__text">
          <!-- foreachで見つけた正解の説明 -->
        <?php echo $description ?>
      </td>
      </tr>
      </table>

    </div>

  </div>
</main>
</body>

</html>
