<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/3f30be6eb3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
    <?php wp_head() ?>
    <title><?php echo is_front_page() ? 'Aliyeff_' : wp_title('').' - Aliyeff_';?></title>
</head>

<body <?php body_class() ?>>
    <div class="wrapper">
        <div class="content">
            <?php if(parse_url($_SERVER['HTTP_REFERER'])['host'] != 'source.tmweb.ru'): ?>
            <div class="preloader">
                <div class="preloader_text">
                    Aliyeff_
                </div>
            </div>
            <?php endif;?>
            <header class="mainHeader">
                <a class="mainHeader_logo" href='/'>
                    Aliyeff_
                </a>
                
                <div class="mainHeader_menuWrapper">
                    <menu class="mainHeader_menu">
                        <li>
                            <a href="/work">Работа</a>
                        </li>
                        <li>
                            <a href="/about">О нас</a>
                        </li>
                        <li>
                            <a href="/news">Новости</a>
                        </li>
                        <li>
                            <a href="/contact">Контакты</a>
                        </li>
                    </menu>
                </div>
            </header>