<?php
    $lastPage = ceil($count / 4);
?>

<main>
    <section class="banner" style="background-image: url('/public/images/<?= $last['image'] ?>')">
        <div class="banner__container">
            <h2 class="banner__title"><?= $last['title'] ?></h2>
            <p class="banner__announce"><?= $last['announce'] ?></p>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h1 class="news__header">Новости</h1>
            <div class="news__cards">
                <?php foreach($news as $article): ?>
                    <a class="card" href="/news/<?= $article['id'] ?>">
                        <div class="card__content">
                            <div class="card__date"><?= date('d.m.Y', strtotime($article['date'])) ?></div>
                            <h2 class="card__title"><?= $article['title'] ?></h2>
                            <p class="card__announce"><?= $article['announce'] ?></p>
                        </div>
                        <button class="card__btn">
                            Подробнее
                            <img src="/public/images/Arrow.svg" alt="">
                        </button>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="news__controls">
                <?php if ($numPage > 1): ?>
                    <a href="/news?page=<?= $numPage - 1 ?>">
                        <button class="news__control" id="prev-page">
                            <img src="/public/images/SmallArrow.svg" alt="">
                        </button>
                    </a>
                <?php endif; ?>
                <?php if ($numPage == $lastPage): ?>
                    <a href="/news?page=<?= $numPage - 2 ?>">
                        <button class="news__control"><?= $numPage - 2 ?></button>
                    </a>
                <?php endif; ?>
                <?php if ($numPage > 1): ?>
                    <a href="/news?page=<?= $numPage - 1 ?>">
                        <button class="news__control"><?= $numPage - 1 ?></button>
                    </a>
                <?php endif; ?>
                <button class="news__control active"><?= $numPage ?></button>
                <?php if ($numPage < $lastPage): ?>
                    <a href="/news?page=<?= $numPage + 1 ?>">
                        <button class="news__control"><?= $numPage + 1 ?></button>
                    </a>
                <?php endif; ?>
                <?php if ($numPage === 1): ?>
                    <a href="/news?page=<?= $numPage + 2 ?>">
                        <button class="news__control"><?= $numPage + 2 ?></button>
                    </a>
                <?php endif; ?>
                <?php if ($numPage < $lastPage): ?>
                    <a href="/news?page=<?= $numPage + 1 ?>">
                        <button class="news__control" id="next-page">
                            <img src="/public/images/SmallArrow.svg" alt="">
                        </button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>