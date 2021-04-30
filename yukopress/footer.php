
<!-- フッターここから -->
<footer class="footer">
    <div class="footer__bg">
    <small class="footer__copyright">&copy;2021 <?php bloginfo('name'); ?> all Rights Reserved.</small>
    </div><!--/.footer__bg-->
</footer>
<!-- フッターここまで -->

<!-- トップに戻るボタン -->
<div id="topBtn" class="topbtn">
    <a class="topbtn__link" href="#profile"><p>▲</p>
    <img src="<?php echo esc_url( get_theme_file_uri( '/img/topbtn-icon.png' ) ); ?>" alt="topページに戻る浮き輪アイコン" class="topbtn__icon"></a>
</div><!--/.topbtn-->

    <!--MyJavaScript-->
    <script src="<?php echo esc_url( get_theme_file_uri( '/js/script.js' ) ); ?>"></script>
    <!--formrunJavaScript-->
    <script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
