<div class="sidebar well" id="tag_cloud_sidebar">
	<h3>Tagged Content</h3>
	<? $tags = $POD->getTags(); ?>
	
	<? while ($tag = $tags->getNext()) { 
	
		$tag->output('tag.cloud');
	}

	?>
</div>