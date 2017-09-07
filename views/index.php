<!DOCTYPE html>
<html>
<head>
	<title>##SUPERBLOG##</title>
</head>
<body>
<h1>Статьи.</h1>
<?php foreach($this->data['items'] as $item): ?>
<h3><?php echo $item->title; ?></h3>
<div><?php echo $item->date; ?></div>
<div><?php echo $item->text; ?></div>
<?php endforeach; ?>
<a href="/blog/views/addArticle.php">Добавить статью</a>
</body>
</html>