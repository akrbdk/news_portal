<?php include ROOT . '/views/layouts/header.php'; ?><!-- //подключаем header-->

<div class="wrapper row3">
    <main id="container" class="clear">
        <!-- container body -->
        <!-- ########################################################################################## -->

        <h1><?php echo $newsItem['title']; ?></a></h1>
        <p><?php echo $newsItem['author_name']; ?></p>
        <span><?php echo $newsItem['date']; ?></span>
        <p><?php echo $newsItem['content']; ?></p>

        <div id="comments" >
            <h2>Comments</h2>
            <ul>
                <?php foreach($commentsList as $comment): ?>
                <li>
                    <article>
                        <header>
                            <address>
                                By <span><?php echo $comment['author'] ?></span>
                            </address>
                            <time><?php echo $comment['date'] ?></time>
                        </header>
                        <div class="comcont">
                            <p><?php echo $comment['comment_text'] ?></p>
                        </div>
                    </article>
                </li>
                <?php endforeach; ?>
            </ul>
            <h2>Write A Comment</h2>
            <form action="#" method="post">
                <div class="one_third first">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" name="name" id="name" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="email">Mail <span>*</span></label>
                    <input type="text" name="email" id="email" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="url">Website</label>
                    <input type="text" name="url" id="url" value="" size="22">
                </div>
                <div class="block clear">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <input name="submit" type="submit" value="Submit Form">
                    &nbsp;
                    <input name="reset" type="reset" value="Reset Form">
                </div>
            </form>
        </div>
        <!-- ########################################################################################## -->
        <!-- / container body -->
        <div class="clear"></div>
    </main>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?><!-- //подключаем footer-->