		</main><!-- eof #main-content -->
	</div>
	<!--[if lt IE 7 ]>
	<script src="/js/plugins/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->

	<!-- BEGIN handlebars templates -->

		<?php 
		foreach (glob("js/template/*.tpl") as $filename){
		    include $filename;
		}
		?>
	<!-- END handlebars templates -->

	<script type="text/javascript"> window._app_vars = <?= $settings->app_vars_JSON() ?>; </script>
	
	<script src="/js/jquery/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery/jquery.scrollTo.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/plugins/imagesloaded.pkgd.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery/jquery.mousewheel.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery/jquery.jscrollpane.min.js" type="text/javascript" charset="utf-8"></script>
	<!-- END: jquery -->
	
	<!-- BEGIN: app -->
	<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/index.js" type="text/javascript" charset="utf-8"></script>


	<script type="text/javascript">	
		<?php 

			if (defined('URI_PART_0')) {
				$nm_space = str_replace("-", "", URI_PART_0);
				echo "SG.main.queue(SG.".$nm_space.".init);";
			} else if ($class=='mobile') {
				echo "SG.main.queue(SG.mobile.init);";
			} else {
				echo "SG.main.queue(SG.index.init);";
			}
		?>
	</script>


	<script type="text/javascript">
  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', '<?= $settings->analytics_id ?>']);
  		_gaq.push(['_trackPageview']);
		
  		(function() {
  		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
	</script>
</body>
</html>
