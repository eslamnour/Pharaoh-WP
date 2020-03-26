<?php

    // Adding CSS FIles and javaScript Files

    function gt_setup(){
        wp_enqueue_style( 'style', get_stylesheet_uri(), null, microtime(), all);
        wp_enqueue_style( 'fontawsome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' , null, microtime(), all);
        wp_enqueue_style( 'googlegfont','//fonts.googleapis.com/css?family=Lobster&display=swap' , null, microtime(), all);
        wp_enqueue_script( 'main', get_theme_file_uri( '/js/main.js' ), null, microtime(), true );
        wp_enqueue_script( 'parrallax', get_theme_file_uri( '/js/parallax.js' ), null, microtime(), true );


    }

    add_action( 'wp_enqueue_scripts', 'gt_setup');

    // Adding Theme Support

    function gt_init(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );   // Dynamic Tab Title
        add_theme_support( 'html5', 
        array('comment-list','comment-form','search-form')  
     );
    }

    add_action( 'after_setup_theme', 'gt_init' );

    function projects(){
        register_post_type( 'project', 
        array(
            'rewrite' => array('slug'=>'Projects'),
            'labels'  => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-id-alt',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                 'title', 'editor', 'thumbnail', 'revisions'
            )
        )
            );
    }

    add_action('init','projects');

    function news(){
        register_post_type( 'new',array(
            'rewrite' => array('slug'=>'News'),
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New',
                'edit_item' => 'Edit New'
            ),
            'menu-icon' => 'dashicons-format-aside',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','thumbnail','excerpt','editor'
            )
        ) );
    }
    add_action('init','news');
    

// --------------------- CUSTOM CHECKBOX---------------------------


 /* Adds a Featured Post meta box to the post editing screen
 */
function blog_featured_meta() {
    add_meta_box( 'blog_meta', __( 'Featured Project', 'blog-textdomain' ), 'blog_meta_callback', 'project', 'side', 'low' );
}
add_action( 'add_meta_boxes', 'blog_featured_meta' );
 
/**
 * Outputs the content of the meta box
 */
 
function blog_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'blog_nonce' );
    $blog_stored_meta = get_post_meta( $post->ID );
    ?>
 
 <p>
    <span class="blog-row-title"><?php _e( 'Check if this is a featured project: ', 'blog-textdomain' )?></span>
    <div class="blog-row-content">
        <label for="featured-checkbox">
            <input 
                type="checkbox" 
                name="featured-checkbox" 
                id="featured-checkbox" 
                value="yes" 
                    <?php 
                        if ( isset ( $blog_stored_meta['featured-checkbox'] ) ) checked( $blog_stored_meta['featured-checkbox'][0], 'yes' ); 
                    ?>
            />
            <?php _e( 'Display on Home Page', 'blog-textdomain' )?>
        </label>
 
    </div>
</p>   
 
<?php
}
 
/**
 * Saves the custom meta input
 */
function blog_meta_save( $post_id ) {
 
    // Checks save status - overcome autosave, etc.
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'blog_nonce' ] ) && wp_verify_nonce( $_POST[ 'blog_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
// Checks for input and saves - save checked as yes and unchecked at no
if( isset( $_POST[ 'featured-checkbox' ] ) ) {
    update_post_meta( $post_id, 'featured-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'featured-checkbox', 'no' );
}
 
}
add_action( 'save_post', 'blog_meta_save' );

// --------------------- Client Meta-Box ---------------------------------
function add_your_fields_meta_box() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'Your Fields', // $title
		'show_your_fields_meta_box', // $callback
		'project', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

function show_your_fields_meta_box() {
    global $post;  
    
		$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

  <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  <p>
    <label for="your_fields[text]">CLient</label>
    <br>
    <input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['text'])) {	echo $meta['text']; } ?>">
  </p>

  <p>
    <label for="your_fields[delviery_date]">Delviery Date</label>
    <br>
    <input min="<?php current_time('Y-m-d');?>" type="date" name="your_fields[delviery_date]" id="your_fields[delviery_date]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['delviery_date'])) {	echo $meta['delviery_date']; } ?>">
  </p>

  <p>
    <label for="your_fields[select]">Category</label>
    <br>
    <select name="your_fields[select]" id="your_fields[select] class="regular-text"">
				<option value="E-commerce" <?php selected( $meta['select'], 'E-commerce' ); ?>>E-commerce</option>
				<option value="Mobile App" <?php selected( $meta['select'], 'Mobile App' ); ?>>Mobile App</option>
				<option value="Web App" <?php selected( $meta['select'], 'Web App' ); ?>>Web App</option>

		</select>
  </p>
  

  <?php }
function save_your_fields_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['your_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'your_fields', true );
		if (isset($_POST['your_fields'])) { //Fix 3
			$new = $_POST['your_fields'];
			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'your_fields', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'your_fields', $old );
			}
		}
}

add_action( 'save_post', 'save_your_fields_meta' );