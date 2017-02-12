<?php include ROOT . '/views/layouts/header.php'; ?><!-- //подключаем header-->

<div class="wrapper row3">
    <main id="container" class="clear">
        <!-- container body -->
        <!-- ########################################################################################## -->

        <div id="comments" >
            <h2>Создайте новость:</h2>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form action="#" method="post">
                <div class="one_third first">
                    <label for="author_name">Имя <span>*</span></label>
                    <input type="text" name="author_name" id="author_name" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="title">Заголовок <span>*</span></label>
                    <input type="text" name="title" id="title" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="short_content">Краткое описание</label>
                    <input type="text" name="short_content" id="short_content" value="" size="22">
                </div>
                <div class="block clear">
                    <label for="content">Текст новости</label>
                    <textarea name="content" id="content" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <input name="submit" type="submit" value="Опубликовать новость">
                    &nbsp;
                    <!--                    <input name="reset" type="reset" value="Reset Form">-->
                </div>
            </form>
        </div>
        <!-- ########################################################################################## -->
        <!-- / container body -->
        <div class="clear"></div>
    </main>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?><!-- //подключаем footer-->