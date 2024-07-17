<main>
    <div class="container">
        <section class="news-navigation">
            <a href="/news">Главная</a> / <span class="news-navigation__article"><?= $news['title'] ?></span>
        </section>
        <section class="article">
            <h1 class="article__header"><?= $news['title'] ?></h1>
            <div class="article__date"><?= date('d.m.Y', strtotime($news['date'])) ?></div>
            <div class="article__container">
                <div class="article__info">
                    <h2 class="article__announce"><?= $news['announce'] ?></h2>
                    <div class="article__content"><?= $news['content'] ?></div>
                    <a href="<?= !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/news' ?>">
                        <button class="article__btn">
                            <img src="/public/images/Arrow.svg" alt="">
                            Назад к новостям
                        </button>
                    </a>
                </div>
                <img src="/public/images/<?= $news['image'] ?>" class="article__image" alt="">
            </div>
        </section>
    </div>
</main>