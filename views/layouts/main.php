<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<header>
    <nav class="nav">
        <a class="nav_link_home" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="nav_link_in" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        <?php
        else:
            ?>
            <a class="nav_link" href="<?= app()->route->getUrl('/numbers') ?>">Номера</a>
            <a class="nav_link" href="<?= app()->route->getUrl('/abonents') ?>">Абоненты</a>
            <a class="nav_link" href="<?= app()->route->getUrl('/rooms') ?>">Помещения</a>
            <a class="nav_link" href="<?= app()->route->getUrl('/divisions') ?>">Подразделения</a>
            <a class="nav_link_in_2" href="<?= app()->route->getUrl('/signup') ?>">Добавить сисадмина</a>
            <a class="nav_link_logout" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main class="wrap">
    <?= $content ?? '' ?>
</main>
<footer>
    <div class="foo">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid error eum
        laudantium magni molestias nam non omnis, pariatur porro quam quisquam repellendus sed, tempora unde. Aliquid harum temporibus voluptatem!
    </div>
    <div class="foo">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid error eum
        laudantium magni molestias nam non omnis!
    </div>
    <div class="foo">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid error eum
        laudantium magni molestias nam non omnis, pariatur porro quam quisquam repellendus sed!
    </div>
</footer>
</body>
</html>