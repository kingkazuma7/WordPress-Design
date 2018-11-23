<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="mainContents">

            <div class="aboutBlock block">
                <div class="banners">
                    <ul>
                        <li><a href="about.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                        <li><a href="access.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                    </ul>
                </div>
            </div><!-- /.aboutBlock -->

            <section class="newsBlock block">
                <h1 class="type-B"><span>新着情報</span></h1>


                <?php 
                if (have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                            <?php the_category(); ?>
                            </div>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                        </div>
                        <h1><a href="single.html">お花見企画の予約を開始しました</a></h1>
                        <p>
                            今年も恒例のお花見企画を行います。4月11日（土）に当ホテルの中庭にて、お花見をしませんか？
                            毎年、多くのお客さまにご好評を頂いております。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-3.png" height="180" width="180" alt=""></a></figure>
                </article><!-- /.news -->
                <?php
                    endwhile;
                endif;
                ?>

            </section><!-- /.newsBlock -->

        </div><!-- /.mainContents -->

        <aside class="subContents">
            <?php get_sidebar(); ?>
        </aside><!-- /.subContents -->

    </div><!-- /.contentsWrap -->
<?php get_footer(); ?>
