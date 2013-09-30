<?php include DIR_TMPL.'/header.php'; ?>

	<ul id="projects">
		<?php 		 
			foreach($items as $item){
				$images = $item->images->image;
				$images_all = '';
				$url = '';
				if($item->url) { 
					$url = '<span>|</span> <a href="' . $item->url . '" target="_blank">Visit Site <span></span></a>';
				}

				foreach($images as $image){
					$images_all .= '<li><img src="' . $image . '"/></li>';
				}
				echo '<li id="'. $item->id .'">
					<ul class="images">' . $images_all . '</ul>
					<div class="description">
						<h2>'. $item->title .'</h2>
						<h3>'. $item->client . $url . '</h3>
						' . $item ->description . '
					</div>
				</li>';
			} 
		?>	
	</ul>	
</div>

<?php include DIR_TMPL.'/footer.php'; ?>

