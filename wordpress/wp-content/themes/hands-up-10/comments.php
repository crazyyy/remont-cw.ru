<?php // Do not delete these lines
 if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die (_e('Please do not load this page directly. Thanks!', 'dtheme'));

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
    ?>
    
    <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", 'dtheme'); ?><p>
    
    <?php
    return;
            }
        }

  /* This variable is for alternating comment background */
  $oddcomment = "graybox";
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
 <a name="comments"></a><h2><?php comments_number(__('No Responses', 'dtheme'), __('One Response', 'dtheme'), __('% Responses', 'dtheme'));?></h2>

 <ol class="commentlist">

 <?php foreach ($comments as $comment) : ?>

  <li class="<?=$oddcomment;?>">
   <a name="comment-<?php comment_ID() ?>"></a><cite><?php comment_author_link() ?></cite> <?php _e('Says:', 'dtheme'); ?><br />
   <!--<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title="<?php comment_date('l, F jS, Y') ?> at <?php comment_time() ?>"><?php /* $entry_datetime = abs(strtotime($post->post_date)); $comment_datetime = abs(strtotime($comment->comment_date)); echo time_since($entry_datetime, $comment_datetime) */ ?></a> after publication. <?php edit_comment_link('e','',''); ?></small>-->
   <small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?>  <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?></small>
   
   <?php comment_text() ?>
   
  </li>
  
  <?php /* Changes every other comment to a different class */ 
   if("graybox" == $oddcomment) {$oddcomment="";}
   else { $oddcomment="graybox"; }
  ?>

 <?php endforeach; /* end for each comment */ ?>

 </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?>
  <!-- If comments are open, but there are no comments. -->
  
  <?php else : // comments are closed ?>
  <!-- If comments are closed. -->
  <p class="nocomments"><?php _e('Comments are closed.', 'dtheme'); ?></p>
  
 <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>

<a name="respond"></a><h3><?php _e('Leave a Reply', 'dtheme'); ?></h3>
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<p><input type="text" name="author" id="author" class="styled" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
<label for="author"><small><?php _e('Name', 'dtheme'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)', 'dtheme'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website', 'dtheme'); ?></small></label></p>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<?php if ('none' != get_settings("comment_moderation")) { ?>
 <p><small><?php _e('Please note: Comment moderation is enabled and may delay your comment. There is no need to resubmit your comment.', 'dtheme'); ?></small></p>
<?php } ?>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'dtheme'); ?>" /></p>


</form>

<?php // if you delete this the sky will fall on your head
endif; ?>