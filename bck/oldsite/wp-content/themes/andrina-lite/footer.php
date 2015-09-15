<div class="clear"></div>
<!--Start Footer-->
<div class="footer">
    <?php
    /* A sidebar in the footer? Yep. You can can customize
     * your footer with four columns of widgets.
     */
    get_sidebar('footer');
    ?>
</div>
<!--End Footer-->
<div class="clear"></div>
<!--Start Footer bottom-->
<!--Start footer bottom inner-->
<div class="bottom-footer">
    <div class="grid_24">
        <div class="footer_bottom_inner"> 
            <?php if (inkthemes_get_option('inkthemes_footertext') != '') { ?>
                <span class="copyright"><?php echo inkthemes_get_option('inkthemes_footertext'); ?></span> 
            <?php } else { ?>
            


 <div id="ok_shareWidget"></div>
<script>
!function (d, id, did, st) {
  var js = d.createElement("script");
  js.src = "http://connect.ok.ru/connect.js";
  js.onload = js.onreadystatechange = function () {
  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
    if (!this.executed) {
      this.executed = true;
      setTimeout(function () {
        OK.CONNECT.insertShareWidget(id,did,st);
      }, 0);
    }
  }};
  d.documentElement.appendChild(js);
}
</script>

 
       
          <tr><center><!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=23709364&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23709364/3_1_8B7070FF_6B5050FF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23709364,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23709364 = new Ya.Metrika({id:23709364,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23709364" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
               
               
               <tr><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t16.15;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet--></center></td>

               
             
                
            <?php } ?>
        </div>
        <center>
        Copyright © 2012-2015 Ремонт квартир!!!
        <center/>
    </div>
</div>
<!--End Footer bottom inner-->
<!--End Footer bottom-->
</div>



</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
