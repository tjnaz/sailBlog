<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Blog</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="./App.css" rel="stylesheet" />
</head>

<body>
    <article>
        <h1>
            <?= $post->title; ?>
        </h1>
        <div>
            <?= $post->body; ?>
        </div>
    </article>

    <a href="/">Go Back</a>
</body>

</html>
