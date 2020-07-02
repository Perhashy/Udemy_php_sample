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
3,000円から、100円値引きした場合、<?= floor(100 / 3000 * 100); ?>%引きです。
切り上げ
<?= ceil(100 / 3000 * 100).PHP_EOL; ?>
四捨五入
<?= round(100 / 3000 * 100, 1).PHP_EOL; ?>
</pre>
</main>
</body>    
</html>