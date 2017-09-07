<!DOCTYPE html>
<html>
<head>
	<title>**Добавить статью**</title>
</head>
<body>
<form action="/blog/index.php?ctrl=Admin&act=Add" method="POST">
<div>
	<div><b>Название статьи: </b><input type="text" name="title"></div>
	<div><b>Текст статьи: </b><textarea name="text" rows="20" cols="70"></textarea></div>
	<div><b>Теги статьи: </b><input type="text" name="tags"></div>
	<input type="submit" value="Отправить">
</div>
</form>
</body>
</html>
