<div class="art-Footer">
    <div class="art-Footer-inner">
                <a href="<?php bloginfo('rss2_url'); ?>" class="art-rss-tag-icon" title="RSS"></a>
                <div class="art-Footer-text">
<p>
<?php 
 global $default_footer_content;
 $footer_content = stripslashes(get_option('art_footer_content'));
 if ($footer_content === false) $footer_content = $default_footer_content;
 echo $footer_content;
?>
</p>
</div>
    </div>
    <div class="art-Footer-background">
    </div>
</div>

    </div>
</div>
<div class="cleared"></div>

<p class="art-page-footer"></a><a href="/map/">Карта сайта</a> |

<a href="http://remont-cw.ru/kontakty/">Тел:+7 (499) 641 10 18</a> .
</p>
</div>

<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
<div><?php wp_footer(); ?></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45619650-1', 'remont-cw.ru');
  ga('send', 'pageview');

</script>
<!-- BEGIN JIVOSITE CODE {literal} -->

<script type='text/javascript'>

(function(){ var widget_id = '120599';

var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>

<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
