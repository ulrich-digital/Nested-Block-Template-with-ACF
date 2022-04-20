add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type( array(
            'title'			=> 'Icons',
            'name'			=> 'icons',
            'render_template'   => 'blocks/acf_icons/block.php',
            'mode'			=> 'preview',
            'supports'		=> [
                'align'			=> false,
                'anchor'		=> true,
                'customClassName'	=> true,
                'jsx' 			=> true,
            ]
        ));
        
        acf_register_block_type( array(
        	'title'			=> 'Angebot',
        	'name'			=> 'angebot',
            'render_template'   => 'blocks/acf_angebot/block.php',
        	'mode'			=> 'preview',
        	'supports'		=> [
        		'align'			=> false,
        		'anchor'		=> true,
        		'customClassName'	=> true,
        		'jsx' 			=> true,
        	]
        ));
    }
}
