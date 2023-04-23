---
title: My Posts
excerpt: Lorem ipsum dolor, sit amet consectetur adipisicing elit.
date: 2023-04-21
---

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Posts</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="./App.css" rel="stylesheet" />
</head>

<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <?= $post; ?>
    </article>
    <?php endforeach; ?>
</body>

</html>
