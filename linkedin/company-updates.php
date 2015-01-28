<?php
if (!function_exists('find_links')) {
	function find_links($v) {
		$regex = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/i';
		return preg_replace($regex, '<a href="\\0">\\0</a>', $v);
	}
}

if (!empty($updates->values)): ?>
<div class="linkedin"><ul class="updates">
<?php foreach ($updates->values as $update):
?>
<!--
<?php var_dump($update); ?>
-->
<?php
if (isset($update->updateContent->companyStatusUpdate)) {
	# An update on the company's status or content shared by the company.
	$share = $update->updateContent->companyStatusUpdate->share; ?>
	<li class="type-<?php strtolower($update->updateType); ?>">
		<?php 
			if(!empty($share->content->submittedImageUrl)){
				echo ('<div class=" linkedin_pic">
					<a href="https://www.linkedin.com/company/yantis-company">
						<img src="' . $share->content->submittedImageUrl . '" class="scale-with-grid wp-post-image" alt="linkedin_pic" />
					</a>
				   </div>
				   <p class="post-excerpt">'.
				   		$share->comment
				   .'</p>
				   <a href="https://www.linkedin.com/company/yantis-company" class="linkedin-viewmore">
				   		<p>View on Linkedin</p>
				   </a>'); 
			}
			else{
				echo('<div class="four columns news-listing">
				   <p class="post-excerpt">'.
				   		$share->comment
				   .'</p>
				   <a href="https://www.linkedin.com/company/yantis-company" class="linkedin-viewmore">
				   		<p>View on Linkedin</p>
				   </a>'); 
			}
			
		?>
	</li><?php
}

if (isset($update->updateContent->companyJobUpdate)) {
	# New job postings on LinkedIn by the specified company.
	$job = $update->updateContent->companyJobUpdate->job; ?>
	<li class="type-<?php strtolower($update->updateType); ?>"><a
		href="<?php echo $job->siteJobRequest->url; ?>"><?php echo $job->position->title; ?></a> -
		<?php echo $job->locationDescription; ?></li><?php
}
?>
<?php endforeach; ?>
</ul></div>
<?php else: ?>
<div class="linkedin"><p class="updates"><?php _e('No updates', 'wp-linkedin-co'); ?></p></div>
<?php endif; ?>