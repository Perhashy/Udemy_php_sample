<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// date_default_timezone_set('Asia/Tokyo');
// print(date('G'));

// if(date('G') < 9) :
//   print('※　現在は受付時間外です');
// else :
//   print('ようこそ');
// endif;

$x = 'あいうえお';
if($x):
  print('xには文字が入っています');
endif;
?>
</pre>
</main>
</body>    
</html>