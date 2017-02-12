<?php include ROOT . '/views/layouts/header.php'; ?><!-- //подключаем header-->

<div class="wrapper row3">
    <main id="container" class="clear">
        <!-- container body -->
        <!-- ########################################################################################## -->

        <div id="comments" >
            <h4>Удалить новость #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту новость?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>
        </div>
        <!-- ########################################################################################## -->
        <!-- / container body -->
        <div class="clear"></div>
    </main>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?><!-- //подключаем footer-->