<?php include DIR_TMPL.'/header.php'; ?>

<ul id="projects">
		<?php 		 
			foreach($items as $item){
				$image = $item->mobile_image;
				$url = '';
				if($item->url) { 
					$url = '<span>|</span> <a href="' . $item->url . '" target="_blank">Visit Site <span></span></a>';
				}

				echo '<li id="'. $item->id .'">
					<img src="' . $image . '" />
					<div class="description">
						<h2>'. $item->title .'</h2>
						<h3>'. $item->client . $url . '</h3>
						' . $item ->description . '
					</div>
				</li>';
			} 
		?>	
	</ul>	

<?php include DIR_TMPL.'/footer.php'; ?>
