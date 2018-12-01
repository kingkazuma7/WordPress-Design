<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<meta name="description" content="ホテル・技評リゾート石垣島は、暮らすように泊まれるホテルです。" />
<title>記事のタイトルが入ります | ホテル・技評リゾート石垣島</title>
</head>
<body class="">
    <?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                <h1 class="type-A">新着情報</h1>
                <h2 class="title type-B"><span><?php the_title(); ?></span></h2>

                <div class="entryInfo">
                    <div class="categories">
                        <?php the_category(); ?>
                    </div>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                </div><!-- /.entryInfo -->

                <section class="content">
                <?php the_content(); ?>
                </section><!-- /.content -->

                <?php comments_template(); ?>

                <nav class="postNavi">
                    <span class="prev"><?php previous_post_link('%link'); ?></span>
                    <span class="next"><?php next_post_link('%link'); ?></span>
                </nav>
            </article><!-- /.entry -->
        </div><!-- /.mainContents -->
        <?php
            endwhile;
        endif;
        ?>

        <aside class="subContents">
            <div class="wrapper">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar( 'archives' ) ?>
            </div><!-- /.wrapper -->
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

    <?php get_footer(); ?>
</body>
</html>
