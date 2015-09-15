      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="<?php bloginfo('url'); ?>/">
            <span>
            <input name="s" class="editbox_search" id="editbox_search" maxlength="80" type="text" value="Поиск по сайту&hellip;" onfocus="this.value=(this.value=='Поиск по сайту&hellip;')? '' : this.value ;"/>
            </span>
            <input name="button_search" src="<?php bloginfo('template_url'); ?>/images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('left') ) : ?>
        <div class="gadget">
          <h2 class="star"><span>Рубрики</span></h2>
          <div class="clr"></div>
          <div class="sb_menu">
            <ul><?php wp_list_categories('title_li=&depth=3'); ?></ul>
          </div>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Архивы</span></h2>
          <div class="clr"></div>
          <div class="sb_menu">
            <ul><?php wp_get_archives('type=monthly'); ?></ul>
          </div>
        </div>
        <?php endif; ?>					
