<?php include ROOT . '/views/layouts/header.php'; ?><!-- //подключаем header-->

<div class="wrapper row3">
    <main id="container" class="clear">
        <!-- container body -->
        <!-- ########################################################################################## -->
        <?php foreach($news as $newsItem): ?><!--  // проходимся в цикле по массиву елементов-->

            <div id="comments">
            <ul>
                <li>
                    <article>
                        <header>
                            <address>
                                <h1><a href="/news/view/<?php echo $newsItem['id']; ?>"><?php echo $newsItem['title']; ?></a></h1>
                                By <a href="#"><?php echo $newsItem['author_name']; ?></a>
                            </address>
                            <time ><?php echo $newsItem['date']; ?></time>
                        </header>
                        <div class="comcont">
                            <p><?php echo $newsItem['short_content']; ?></p>
                        </div>
                        <p class="nospace"><a href="/news/view/<?php echo $newsItem['id']; ?>">Читать далее &raquo;</a></p>
                    </article>
                </li>
            </ul>
            </div>

        <?php endforeach; ?>
        <!-- ########################################################################################## -->
        <!-- / container body -->
        <div class="clear"></div>
    </main>
</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?><!-- //подключаем footer-->
