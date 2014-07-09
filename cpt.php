// Create Custom Post Type
function create_post_type_code-local()
{
    register_taxonomy_for_object_type('category', 'post-type'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'post-type');
    register_taxonomy_for_object_type('author', 'post-type');
    register_post_type('post-type', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Menu Items', 'textdomain'), // Rename these to suit
            'singular_name' => __('Menu Item', 'textdomain'),
            'add_new' => __('Add Menu Item', 'textdomain'),
            'add_new_item' => __('Add Menu Item', 'textdomain'),
            'edit' => __('Edit Menu Item', 'textdomain'),
            'edit_item' => __('Edit Menu Item', 'textdomain'),
            'new_item' => __('New Menu Item', 'textdomain'),
            'view' => __('View Menu Item', 'textdomain'),
            'view_item' => __('View Menu Item', 'textdomain'),
            'search_items' => __('Search Menu Items', 'textdomain'),
            'not_found' => __('No Menu Items Were Found', 'textdomain'),
            'not_found_in_trash' => __('No Menu Items found in Trash', 'textdomain')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
	'capability_type' => 'post',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
	    'author',
	    'revisions',
	    'post-formats',
	    'custom-fields'
	    
	    
        ), // Go to Dashboard Custom HTML5 Blank post for supports
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 16,
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category',
	    'author'
	    
	   
        )
	
	
    ));
}
add_action( 'init', 'create_post_type_code-local' );
