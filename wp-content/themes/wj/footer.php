<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WJ_Molding
 */

?>
</main><!-- #content -->

<footer class="site-footer">
    <div class="footer-content container-site">
        <p>&copy; <?php echo date('Y'); ?> WJ Molding Inc. </p>
        <ul>
            <li>915 Estes Ct</li>
            <li>Schaumburg, IL 60193</li>
            <li>800-PAT-CHEZ</li>
        </ul>
    </div>
</footer><!-- #colophon -->

<?php
    wp_footer();
    include('assets/icons/svg-defs.svg');
?>

<script>
	// load webfonts async
	WebFontConfig = {
		google: { families: [ 'Roboto+Condensed:300,400,700', 'Source+Sans+Pro:400,400italic,600,700,900' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();
</script>

</body>
</html>
