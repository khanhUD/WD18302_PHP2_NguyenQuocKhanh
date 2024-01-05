<h1>Bài 2</h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">
        <select name="block" id="">
            <?php foreach ($courses as $key => $value) :  ?>
                <option value="<?= $key ?>"> <?= $value?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="submit">Tìm kiếm</button>
    </form>
    <h1>Kết quả tiềm kiếm: </h1> <?= $courses_name ?>
</body>

</html>