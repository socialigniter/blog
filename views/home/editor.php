<form name="<?= $form_name ?>" id="<?= $form_name ?>" action="<?= $form_url ?>" method="post" enctype="multipart/form-data">

	<div id="content_wide_content">
		<h3>Title</h3>
		<input type="text" name="title" id="title" class="input_full" value="<?= $title ?>" />
		<p id="title_slug" class="slug_url"></p>
	
		<h3>Content</h3>
		<?= $wysiwyg ?>
	
	    <h3>Category</h3>
	    <p><?= form_dropdown('category_id', $categories, $category_id) ?></p>
	
	     <h3>Tags</h3>
	     <p><input name="tags" type="text" id="tags" size="75" value="" /></p>
	     
	    <h3>Comments</h3>
		<p><?= form_dropdown('comments_allow', config_item('comments_allow'), $comments_allow) ?></p>
	
		<h3>Access</h3>
		<p><?= form_dropdown('access', config_item('access'), $access) ?></p>
	
		<input type="hidden" name="geo_lat" id="geo_lat" value="" />
		<input type="hidden" name="geo_long" id="geo_long" value="" />
	</div>
	
	<div id="content_wide_toolbar">
		<?= $content_publisher ?>
	</div>

</form>

<div class="clear"></div>

<script type="text/javascript">

// Elements for Placeholder
var validation_rules = [{
	'element' 	: '#title', 
	'holder'	: 'Ridiculously Cute Kitten Saves Owner From Fire', 
	'message'	: 'You need an article title'
},{
	'element' 	: '#tags', 
	'holder'	: 'Cats, Fires, Heroes, Cute', 
	'message'	: ''	
}]

$(document).ready(function()
{
	// Placeholders
	makePlaceholders(validation_rules);

	// Slugify
	$('#title').slugify({url:base_url+current_module+'/posts/', slug:'#title_slug', name:'title_url', slugValue:'<?= $title_url ?>'});

	// Autocomplete Tags
	autocomplete("[name=tags]", 'api/tags/all');

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