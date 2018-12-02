<p class="bnr">
    <a href="<?php echo get_permalink( 60 ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_contact01.png" height="183" width="300" alt="宿泊のお問い合わせ"></a>
</p>
<div class="wrapper">
    <?php get_template_part('loop', 'recently'); ?>
    <section class="socialBanners">
        <h2 class="hidden">関連バナー</h2>
        <div class="banners">
            <ul>
                <li><a href="https://www.facebook.com/gihyo.hotel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_fb01.png" height="60" width="290" alt=""></a></li>
                <li><a href="https://twitter.com/gihyoHotel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_tw01.png" height="60" width="290" alt=""></a></li>
                <li><a href="<?php echo home_url(); ?>/feed/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_rss01.png" height="60" width="290" alt=""></a></li>
            </ul>
        </div>
    </section><!-- /.socialBanners -->
</div><!-- /.wrapper -->
