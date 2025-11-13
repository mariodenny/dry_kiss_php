<?php
require("php/connection.php");
$no = 0;
$getAllPostsQuery = $connect->query("SELECT * FROM articles");
$result = $getAllPostsQuery->fetch_all(MYSQLI_ASSOC);
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
         <?php foreach ($result as $post): ?>
            <tr>
                <th scope="row"><?= ++$no ?></th>
                <td><?= htmlspecialchars($post["title"]) ?></td>
                <td><?= htmlspecialchars($post["content"]) ?></td>
                <td>
                    <img src="<?= htmlspecialchars($post["image_url"]) ?>"
                        alt="post image"
                        width="100"
                        style="border-radius: 8px;">
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>