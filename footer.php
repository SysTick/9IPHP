    </section>
</div>
<?php $linkIds = of_get_option('links_id'); if(!!wp_list_bookmarks('echo=0&category='.$linkIds)){ ?>
    <div class="main-footer" id="main-footer">
        <div class="container">
            <h3>友情链接</h3>
            <ul class="list-unstyled list-inline">
                <?php wp_list_bookmarks('title_li=&categorize=0&show_images=0&category_before=&category_after=&category='.$linkIds); ?>
            </ul>
        </div>
    </div>
<?php } ?>
<footer id="body-footer">
    <div  class="container clearfix bottomcp">
        Copyright © 2014 <?php bloginfo('name'); ?> |
        <?php if(get_option('zh_cn_l10n_icp_num')){ echo get_option('zh_cn_l10n_icp_num') . ' | '; } ?>
        <?php $site_analytics = of_get_option('site_analytics', false); if($site_analytics){ echo (strpos($site_analytics, '<script') === false) ? '<script>'.$site_analytics.'</script> | ' : $site_analytics . ' | '; } ?>
        Theme By <a href="http://9iphp.com" title="Specs' Bolg" target="_blank">Specs</a>
    </div>
    <ul id="jump" class="visible-lg">

      //yzl 20170419
        <li>
          <a id="weixin" title="微信公众号" href="javascript:void(0)">
            <i class="fa fa-wechat"></i><div id="EWM"><img src="<?php echo get_template_directory_uri(); ?>/images/weixin_code.jpg" alt="二维码" /></div>
          </a>
        </li>
        <li><a id="share" title="友情链接" href="<?php bloginfo('url'); ?>/links" target="_blank"><i class="fa fa-link"></i></a></li>

        <li><a id="top" href="#top" title="返回顶部" style="display:none;"><i class="fa fa-arrow-circle-up"></i></a></li>
    </ul>
</footer>
<?php wp_footer(); ?>

</body>
</html>
