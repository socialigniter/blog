<form name="blog_editor" id="blog_editor" action="<?= $form_url ?>" method="post" enctype="multipart/form-data">
	<div id="content_wide_content">
	<div id="content_message" class="message_normal"><?= $message ?></div>	
		<h3>Title</h3>
		<input type="text" name="title" id="title" class="input_full" value="<?= $title ?>" />
		<p id="title_slug" class="slug_url"></p>

		<h3>Content</h3>
		<?= $wysiwyg ?>
		    
	    <h3>Category</h3>
	    <?= form_dropdown('category_id', $categories, $category_id) ?> 

	     <h3>Tags</h3>
	     <input name="tags" type="text" id="tags" size="75" value="" />
	     
	    <h3>Comments</h3>
		<?= form_dropdown('comments_allow', config_item('comments_allow'), $comments_allow) ?>

		<h3>Access</h3>
		<?= form_dropdown('access', config_item('access'), $access) ?> 
	                 
		<input type="hidden" name="geo_lat" id="geo_lat" value="" />
		<input type="hidden" name="geo_long" id="geo_long" value="" />
		<input type="hidden" name="geo_accuracy" id="geo_accuracy" value="" />
	</div>
	
	<div id="content_wide_sidebar">		
		<h3>Status</h3>
		<p id="article_status"><?= display_content_status($status) ?></p>
		<h3>Share</h3>
		<?= $this->social_igniter->get_social_post('<ul class="social_post">', '</ul>'); ?>		
		<p><input type="submit" id="status_publish" name="publish" value="Publish" /> <input type="submit" id="status_save" name="save_draft" value="Save" /></p>
	</div>
</form>

<div class="clear"></div>

<script type="text/javascript">
$(document).ready(function()
{
	// Placeholders
	doPlaceholder('#title', 'Ridiculously Cute Kitten Saves Owner From Fire');
	doPlaceholder('#tags', 'Cats, Fires, Heroes, Cute');
	$('#title').slugify({url:base_url+current_module+'/posts/', slug:'#title_slug', name:'title_url', slugValue:'<?= $title_url ?>'});
	
	// Write Article
	$("#blog_editor").bind("submit", function(eve)
	{
		eve.preventDefault();
		var valid_title		= isFieldValid('#title', "Ridiculously Cute Kitten Saves Owner From Fire", 'You need a title');

		// Validation	
		if (valid_title == true)
		{	
			var article_data = $('#blog_editor').serializeArray();
			article_data.push({'name':'module','value':'blog'},{'name':'type','value':'article'},{'name':'source','value':'website'});

			console.log(article_data);

			$(this).oauthAjax(
			{
				oauth 		: user_data,
				url			: $(this).attr('ACTION'),
				type		: 'POST',
				dataType	: 'json',
				data		: article_data,
		  		success		: function(result)
		  		{	
		  			console.log(result);
		  				  			  			
					if (result.status == 'success')
					{
				 		$('#content_message').notify({message: result.message + ' <a href="' + base_url + 'blog/view/' + result.data.content_id + '">' + result.data.title + '</a>'});
				 		var status = displayContentStatus(result.data.status);				 		
				 		$('#article_status').html(status);				 	
				 	}
				 	else
				 	{
					 	$('#content_message').html(result.message).addClass('message_alert').show('normal');
					 	$('#content_message').oneTime(3000, function(){$('#content_message').hide('fast')});			
				 	}	
			 	}
			});
		}
		else
		{
			eve.preventDefault();
		}		
	});

	// Add Category
	$('[name=category_id]').change(function()
	{	
		if($(this).val() == 'add_category')
		{
			$('[name=category_id]').find('option:first').attr('selected','selected');
			$.uniform.update('[name=category_id]');

			$.categoryEditor(
			{
				url_api		: base_url + 'api/categories/view/module/blog',
				url_pre		: base_url + 'blog/categories/',
				url_sub		: base_url + 'api/categories/create',				
				module		: 'blog',
				type		: 'category',
				title		: 'Add Category',
				slug_value	: '',
				trigger		: $('.content [name=category_id]')
			});			
		}
	});		
	
});
</script>