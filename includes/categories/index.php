<?php
// Danh sách category
$categories = array(
    array(
        'id' => 1,
        'name' => 'Category 1',
        'description' => 'Description of Category 1'
    ),
    array(
        'id' => 2,
        'name' => 'Category 2',
        'description' => 'Description of Category 2'
    ),
    array(
        'id' => 3,
        'name' => 'Category 3',
        'description' => 'Description of Category 3'
    ),
    array(
        'id' => 4,
        'name' => 'Category 4',
        'description' => 'Description of Category 4'
    ),
    // Thêm danh mục khác...
);

// Hiển thị danh sách category
echo '<ul name="category">';
foreach ($categories as $category) {
    echo '<li value="' . $category['id'] . '">' . $category['name'] . '</li>';
}
echo '</ul>';
?>