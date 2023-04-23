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
        <h1>
            <a href="/posts/<?= $post->slug; ?>">
                <?= $post->title; ?>
            </a>
        </h1>
        <div class="excerpt">
            <?= $post->excerpt; ?>
        </div>
    </article>
    <?php endforeach; ?>
</body>

</html>
