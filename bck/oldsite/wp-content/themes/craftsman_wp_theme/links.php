<?php get_header(); ?>
<div class="art-contentLayout">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?><div class="art-content">

<div class="art-Block">
    <div class="art-Block-body">

<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t"><?php _e('Links:', 'kubrick'); ?></div>
    </div>
</div>
<div class="art-BlockContent">
    <div class="art-BlockContent-tl"></div>
    <div class="art-BlockContent-tr"></div>
    <div class="art-BlockContent-bl"></div>
    <div class="art-BlockContent-br"></div>
    <div class="art-BlockContent-tc"></div>
    <div class="art-BlockContent-bc"></div>
    <div class="art-BlockContent-cl"></div>
    <div class="art-BlockContent-cr"></div>
    <div class="art-BlockContent-cc"></div>
    <div class="art-BlockContent-body">

<ul>
<?php get_links_list(); ?>
</ul>

    </div>
</div>


    </div>
</div>


</div>

</div>
<div class="cleared"></div>

<?php get_footer(); ?>