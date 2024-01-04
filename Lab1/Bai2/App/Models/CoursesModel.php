
<?php
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
    include '../../Config/data.php';
    return (array_key_exists($block, $courses) ? $courses[$block] : "Invalid Course ");
}
?>
