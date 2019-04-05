<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - AcadExchange</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .archive {
            padding: 2em;
            width: 33%;
            box-sizing: border-box;
        }

        .header, .footer {
            display: flex;
            flex-direction: row;
            background: #0894A1;
            color: #fff;
        }


        .nav__list {
            display: flex;
            list-style: none;
            height: 100%;
        }

        .nav__item {
            margin-left: 1em;
        }

        .nav__link {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 1em;
        }

        .nav__link:hover {
            color: #F2B134;
        }

        h2 {
            display: inline-block;
            height: 0;
            width: 0;
            text-indent: -9999em;
        }

        .copy {
            padding: 1em;
        }
    </style>
</head>
<body>
<header class="header">
    <h1 class="logo__top">AcadExchange</h1>
    <nav class="nav">
        <ul class="nav__list">
            <h2 class="nav__link">Principal navigation</h2>
            <?php foreach (dw_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if (count($item->children)): ?>
                        <ul class="nav__sub">
                            <?php foreach ($item->children as $child): ?>
                                <li class="nav__item">
                                    <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <!--    --><?php //wp_nav_menu([
    //        'theme_location' => 'main',
    //    ]); ?>
    <!--  TODO: On a besoin de créer un tableau : href  -->
</header>
<main>