<!DOCTYPE html>
<html>
<head>
    <title>Illusion</title>
    <meta charset="utf-8">
    <link href="../../web/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" class="bgded fixed" style="background-image:url('../../web/images/background/1.png');">
<div class="wrapper row0">
    <header id="header" class="clear">
        <!-- ################################################################################################ -->
        <div id="logo">
            <h1><a href="/news/index/">News Portal</a></h1>
            <p>Тестовый новостной портал.</p>
        </div>
        <!-- ################################################################################################ -->
    </header>
</div>
<div class="wrapper row1">
    <nav id="mainav" class="clear">
        <!-- ################################################################################################ -->
        <ul class="clear">
            <li class="active"><a href="/news/index/">Home</a></li>
            <li><a class="drop" href="#">Latest News</a></li>
            <li><a class="drop" href="#">About Us</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Login</a></li>
        </ul>
        <!-- ################################################################################################ -->
    </nav>
</div>
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
                <li>
                    <article>
                        <header>
                            <address>
                                By <a href="#">A Name</a>
                            </address>
                            <time><?php echo $newsItem['date']; ?></time>
                        </header>
                        <div class="comcont">
                            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                        </div>
                    </article>
                </li>
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
<div class="wrapper row4">
    <footer id="footer" class="clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
            <h6 class="title">Наши контакты</h6>
            <address class="push30">
                Company Name: Lorem ipsum dolor<br>
                Street Name &amp; Number: Lorem ipsum 635456<br>
                Town: Saint-Petersburg<br>
                Postcode/Zip: 354635
            </address>
        </div>
        <div class="one_third">
            <h6 class="title">Последние новости</h6>
            <ul class="nospace clear">
                <li class="clear push30">
                    <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                    <p class="nospace push15">Integer imperdiet vestibulum leo ut tincidunt in sagittis.</p>
                    <p class="nospace"><a href="#">Читать далее &raquo;</a></p>
                </li>
                <li class="clear">
                    <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                    <p class="nospace push15">Integer imperdiet vestibulum leo ut tincidunt in sagittis.</p>
                    <p class="nospace"><a href="#">Читать далее &raquo;</a></p>
                </li>
            </ul>
        </div>
        <div class="one_third">
            <h6 class="title">Интересные статьи</h6>
            <ul class="nospace clear">
                <li class="clear push30">
                    <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                    <p class="nospace push15">Integer imperdiet vestibulum leo ut tincidunt in sagittis.</p>
                    <p class="nospace"><a href="#">Читать далее &raquo;</a></p>
                </li>
                <li class="clear">
                    <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                    <p class="nospace push15">Integer imperdiet vestibulum leo ut tincidunt in sagittis.</p>
                    <p class="nospace"><a href="#">Читать далее &raquo;</a></p>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </footer>
</div>
<div id="copyright" class="clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a target="_blank" href="http://akarabudka.ru/">Akarabudka.ru</a></p>
    <p class="fl_right">Designed by <a target="_blank" href="https://vk.com/alexksu_007" title="Free Website Templates">Alexander Karabudka</a></p>
    <!-- ################################################################################################ -->
</div>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/supersized/supersized.min.js"></script>
<script>
    jQuery(function ($) {
        $.supersized({
            slides: [{
                image: 'images/demo/slider/1.png',
                title: '<span class="heading">Overlay text for image 1</span>smaller subline text, <a href="#">view here</a>'
            }, {
                image: 'images/demo/slider/2.png',
                title: '<span class="heading">Overlay text for image 2</span>smaller subline text, <a href="#">view here</a>'
            }, {
                image: 'images/demo/slider/3.png',
                title: '<span class="heading">Overlay text for image 3</span>smaller subline text, <a href="#">view here</a>'
            }]
        });
    });
</script>
</body>
</html>