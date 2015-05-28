<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="lab5/catalog.css">

        <?php
        if (!isset($_GET['id'])) {
            echo '<link rel="stylesheet" type="text/css" href="lab5/tb.css">';
        } elseif ($_GET['id'] != "" && $_GET['id'] > 0) {
            echo '<link rel="stylesheet" type="text/css" href="lab5/item.css">';
        }
        ?>
        <script src="jquery-2.1.3.min.js"></script>
        <title>Alcohol market</title>
    </head>
    <body>

        <header>
            ALCOHOL MARKET
        </header>

        <nav>
            <a href="/" >Главная</a>
            <a href="/reviews" >Отзывы</a>
            <a href="/catalog" >Каталог</a>
            <a href="/corporate_customers.html" >Корпоративным клиентам</a>
            <a href="/wholesale_customers.html" >Оптовым клиентам</a>
            <a href="/contacts.html" >Контакты</a>
        </nav>  

       <a href="001.php"><img id="bottle" src="/lab5/img/bottle.png"></a>
        <h2 id="action1">Новый напиток!</h2>  

        <section>
            <?php include '/lab5/controller.php'; ?>
        </section>
        <footer>
            Сайт разработан <a href="http://apcodetm.ru" >web-студией APcode</a> специально для ALCOHOL MARKET &copy; Пермь, 2012-2015     
        </footer>
    </body>
</html>
