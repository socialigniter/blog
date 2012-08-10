<form name="content_editor_form" id="content_editor_form" action="<?= $form_url ?>" method="post" enctype="multipart/form-data">

	<div id="content_wide_content">
		<h3>Title</h3>
		<input type="text" name="title" id="title" class="input_full" placeholder="Ridiculously Cute Kitten Saves Owner From Fire" value="<?= $title ?>" />
		<span id="title_error"></span>
		<p id="title_slug" class="slug_url"></p>

		<h3>Content</h3>
		<span id="wysiwyg_content_error"></span>
		<?= $wysiwyg ?>

	    <h3>Category</h3>
	    <p><?= form_dropdown('category_id', $categories, $category_id, 'id="category_id"') ?></p>

	     <h3>Tags</h3>
	     <p><input name="tags" type="text" id="tags" size="75" placeholder="Cats, Fires, Heroes, Cute" value="" /></p>

	    <h3>Comments</h3>
		<p><?= form_dropdown('comments_allow', config_item('comments_allow'), $comments_allow) ?></p>

		<h3>Access</h3>
		<p><?= form_dropdown('access', config_item('access'), $access) ?></p>

	</div>
	
	<div id="content_wide_toolbar">
		<?= $content_publisher ?>
	</div>

</form>

<div class="clear"></div>

<script type="text/javascript">
// Elements for Placeholder
var validation_rules = [{
	'selector' 	: '#title',
	'rule'		: 'require', 
	'field'		: 'You need an article title', 
	'action'	: 'label'
},{
	'selector' 	: '#wysiwyg_content',
	'rule'		: 'require', 
	'field'		: 'You need to type an article', 
	'action'	: 'label'
}]

$(document).ready(function()
{
	// Slugify
	$('#title').slugify({url:base_url + current_module + '/posts/', slug:'#title_slug', name:'title_url', slugValue:'<?= $title_url ?>'});

	// Autocomplete Tags
	autocomplete("[name=tags]", 'api/tags/all', 'tag');

	// Add Category
	$('#category_id').categoryManager(
	{
		action		: 'create',			
		module		: 'blog',
		type		: 'category',
		title		: 'Add Category'
	});
	
	// Specify API URL
	$.data(document.body, 'api_url', $('#content_editor_form').attr('action'));	

});
</script>