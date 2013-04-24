<?php
/***********************************************
* This file is part of PeoplePods
* (c) xoxco, inc  
* http://peoplepods.net http://xoxco.com
*
* theme/footer.php
* Defines what is in the footer of every page, used by $POD->footer()
*
* Documentation for this pod can be found here:
* http://peoplepods.net/readme/themes
/**********************************************/
?>

		</div>
	</div>

	<footer>
	   	<div class="container">
	      	<div class="row">
	         	<div class="span12">
	            	<hr class="soften" />
	         	</div>
	      	</div>
	      	<div class="row">
	            <div class='span4'>
	            	<h4><? $POD->siteName(); ?></h4>
					<ul class='unstyled'>
                    	<li>
                        	<a href="<? $POD->siteRoot(); ?>">Home</a>
		                </li>
                     
						<? if (!$POD->isAuthenticated()) { ?>
							<a href="<? $POD->siteRoot(); ?>/join">Join</a>
						<? } ?>
                     
						<? if ($POD->libOptions('enable_contenttype_document_list')) { ?>
						<li>
							<a href='<? $POD->siteRoot(); ?>/show'>What's New?</a>
						</li>
						<? } ?>

						<? if ($POD->libOptions('enable_core_groups')) { ?>
						<li>
							<a href='<? $POD->siteRoot(); ?>/groups'>Groups</a>
						</li>
						<? } ?>

						<? if ($POD->isAuthenticated()) { ?>
						<? if ($POD->currentUser()->get('adminUser')) { ?>
						<li>
							<a href='<? $POD->siteRoot(); ?>/peoplepods/admin'>Admin Tools</a>
						</li>
						<? } ?>
						<? } ?>
					</ul>
				</div>
	               		
				<div class="span4">
					<h4>Terms of Service</h4>
					<p>By using this site you agree to <span class="label label-inverse">Not Be Lame</span></p>
				</div>
				
				<div class='span4'>
					<p>
						&copy; 2012 <a href="#" title=""><? $POD->siteName(); ?></a>.<br/>
						All Rights Reserved.<br/>
						Powered by <a href="http://peoplepods.net" title="PeoplePods">PeoplePods</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
