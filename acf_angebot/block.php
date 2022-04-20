if( !empty( $block['align'] ) ):
    $classes[] = 'align' . $block['align'];
endif;

$anchor = '';
if( !empty( $block['anchor'] ) ):
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
endif;

$template = array(
	array('core/group', array(), array(
		array('acf/icons', array('data' => array("field_624e5b8eba67f" => "smiley"),'mode' => 'edit')),
		array('core/heading', array('level' => 2,'content' => 'Heading',
		)),    
	)),
    
	array('core/paragraph', array(
		'content' => 'My paragraph',
	)),
);


echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
	echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '"  />';
echo '</div>';
