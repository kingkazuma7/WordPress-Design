<section class="comments">
<?php 
$comment_form_args = array(
    'title_reply' => 'コメント投稿フォーム',
    'comment_notes_after' => '',
);
comment_form();
if ( have_comments() ) : 
?>
    <p><?php comments_number('コメントはありません。', 'コメントが1件あります。', 'コメントが%件あります。'); ?></p>
    <ol class="commentlist">
        <?php 
        $wp_list_comments_args = array(
            'avatar_size' => '50'
        );
        wp_list_comments( $wp_list_comments_args ); ?>
    </ol>
<?php 
$pagenate_comments_links_args = array(
    'prev_text' => '←前のコメントページ',
    'next_text' => '次のコメントページ→',
);
paginate_comments_links( $pagenate_comments_links_args );
>>>>>>> c88f37fa6374472eacec265d759cbd9c36d8c225
endif;
?>
</section><!-- /.comments -->
