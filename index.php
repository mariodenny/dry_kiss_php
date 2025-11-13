<?php
include 'partials/header.php';
?>

<div class="container mt-4">
    <h1>This example of using php include</h1>
    <p>So instead of writing all component into one place. Just put it separately to make cleaner code.</p>
    <p>We use index.php as main route file , so all the pages no need to write it separately</p>
</div>

<div class="container mt-4 p-2">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = "components/$page.php";
    if (file_exists($path)) {
        include $path;
    } else {
        include "components/404.php";
    }
    ?>
</div>


<?php
include 'partials/footer.php';
?>