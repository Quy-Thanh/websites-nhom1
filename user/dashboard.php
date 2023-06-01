<?php include './includes/session/check_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <!-- Định dạng CSS -->
    <link rel="stylesheet" href="../assets/product_item.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,200" />
    <script src="../js/view_item.js"></script>

</head>
<body>
    <header>
        <nav>
            <?php include '../includes/navbar/index.php'; ?>
        </nav>
    </header>

    <div class="container">
        <div class="filter-container">
            <?php include '../includes/filter/index.php'; ?>
        </div>
        <div class="product-container">
            <h1>New product</h1>
            <div class="product-list">
                <?php   include '../includes/items/index.php'; ?>
            </div>
            <button class="prev-btn"><span class="material-symbols-outlined">arrow_back</span></button>
            <button class="next-btn"><span class="material-symbols-outlined">arrow_forward</span></button>
        </div>
    </div>

</body>
</html>