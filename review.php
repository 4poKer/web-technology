<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="lab2/reviews.css">
        <title>Alcohol market</title>
    </head>
    <body>

        <header>
            ALCOHOL MARKET
        </header>

        <nav>
            <a href="/" >Главная</a>
            <a href="/reviews" >Отзывы</a>
            <a href="/catalog.html" >Каталог</a>
            <a href="/corporate_customers.html" >Корпоративным клиентам</a>
            <a href="/wholesale_customers.html" >Оптовым клиентам</a>
            <a href="/contacts.html" >Контакты</a>
        </nav>  

        <section> 
            <div class="feedback">
                <h4>Оставить отзыв</h4>
                <form  method='post'>
                    <p>Как к вам лучше обращаться <span>*</span>
                        <input placeholder="Алексей" name="name">

                    </p>
                    <p>E-mail для обратной связи <span>*</span><input placeholder="alex@mail.ru" name="email"></p>
                    <p id="comment">Ваш отзыв о товаре или пожелания <span>*</span></p>
                    <textarea name="comment"  placeholder="Текст отзыва"></textarea><br>
                    <button name="feedback">Оставить отзыв</button>
                </form>
                <p id="log"><?php echo $log; ?></p>
            </div>
        </section>

        <footer>
            Сайт разработан <a href="http://apcodetm.ru" >web-студией APcode</a> специально для ALCOHOL MARKET &copy; Пермь, 2012-2015     
        </footer>
    </body>
</html>
