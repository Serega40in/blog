<!DOCTYPE HTML>
<html>
<head>
    <meta carset="utf8">
    <title>Админ панель Ремонт компов</title>
    <link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Serega40in. Ремонт и настройка компьютеров в СПб. Блог. Админка</h1>
    <a href="../index.php">На главную</a><br/>
    <a href="index.php?action=add">Добавить статью</a>
    <div>
<table class="admin-table">
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>
            <?php foreach($articles as $a): ?>
    <tr>
        <th><?=$a['date']?></th>
        <th><?=$a['title']?></th>
        <th>
            <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
        </th>
        <th><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></th>
    </tr>
    <tr>
    <?php endforeach?>
</table>



        <footer>Мой Первый Блог <br> Copyright &copy; 2016</footer>
    </div>
</div>
</body>
</html>