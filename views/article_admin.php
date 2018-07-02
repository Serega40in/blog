<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Админ панель Ремонт компов</title>
    <link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Serega40in. Ремонт и настройка компьютеров в СПб. Блог. Админка</h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label>
                    Дата
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <label>
                    Содержимое
                    <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                </label>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
<footer>
    <p>Пространство<br>Copyright &copy; беспредельно</p>
        </footer>
    </div>
</body>
</html>