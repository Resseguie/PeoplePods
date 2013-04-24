<?php
/***********************************************
* This file is part of PeoplePods
* (c) xoxco, inc  
* http://peoplepods.net http://xoxco.com
*
* theme/sidebars/search.php
* Simple search sidebar with content and person search
*
* Use this in other templates:
* $POD->output('sidebars/search');
*
* Documentation for this pod can be found here:
* http://peoplepods.net/readme/person-object
/**********************************************/
?>
<div class="sidebar well" id="search_sidebar">
	<h3>Search</h3>
	<form method="get" action="<? $POD->siteRoot(); ?>/search" class="form-search">
		<input name="q" id="sidebar_search_q"  data-default="search content" class="repairField search-query" />&nbsp;<button type="submit" value="Search" class="btn btn-primary">Search</button>
	</form>
</div>