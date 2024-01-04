<h1>Lab1 bài 1</h1>
<?php

// Mảng kết hợp 
$courses = [
    's1' => 'Lập trình cở bản',
    's2' => 'Lập trình a',
    's3' => 'Lập trình b',
    's4' => 'Lập trình c',
    's5' => 'Lập trình d'
];

// Models 

/**
 * @param string 
 * 
 * Trả về mảng tuần tự
 */

/**
 * @param string $block
 * 
 * Hàm này kiếm tra coi có block không
 */
function find_by_block($block)
{
    global $courses;
    return (array_key_exists($block, $courses) ? $courses[$block] : "Invalid Course ");
}
// Controller
$block = (!empty($_GET['block']) ? $_GET['block'] : '');
$courses_name = find_by_block($block);




?>
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
        <button type="submit">Tìm kiếm</button>
    </form>
    <h1>Kết quả tiềm kiếm: </h1> <?= $courses_name ?>
</body>

</html>