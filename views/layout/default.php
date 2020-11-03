<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : "ScreenDb" ?></title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://kit.fontawesome.com/7f49e9bfee.js" crossorigin="anonymous"></script>
    <?php require $layout; ?>

    <?php foreach($scripts as $script): ?>
    <script src="<?= $script ?>"></script>
    <?php endforeach ?>
</body>
</html>
