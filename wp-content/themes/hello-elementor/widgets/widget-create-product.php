<?php

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Widget_Create_Product extends Widget_Base {

    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
        wp_register_script( 'Backbone.ModalDialog', get_template_directory_uri() .'/custom-js/Backbone.ModalDialog.js', [ 'backbone' ], '1.0.0', true );
        wp_register_script( 'backbone.validation', get_template_directory_uri() .'/custom-js/backbone.validation.js', [ 'backbone' ], '1.0.0', true );
        wp_register_script( 'create-product-model', get_template_directory_uri() .'/custom-js/create-product-model.js', [ 'backbone' ], '1.0.0', true );
        wp_register_script( 'create-product', get_template_directory_uri() .'/custom-js/create-product.js', [ 'jquery' ], '1.0.0', true );
    }
	public function get_script_depends() {
	return [ 'Backbone.ModalDialog', 'backbone.validation', 'create-product-model', 'create-product' ];
	}

	// public function get_style_depends() {
	// return [ 'ctb-stylesheet' ];
	// }
	public function get_name() {
		return 'widget_create_product';
	}

	public function get_title() {
		return esc_html__( 'Create product', 'textdomain' );
	}

	public function get_icon() {
		return 'eicon-code classABC';
	}

	public function get_custom_help_url() {
		return 'https://go.elementor.com/widget-name';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'create', 'product' ];
	}

    protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        // $args = array(
        //     'post_type'      => 'product',
        //     'posts_per_page' => 10
        // );

        // $products = array();
        // $loop = new WP_Query( $args );
        // while ( $loop->have_posts() ) : $loop->the_post();
        //     global $product;
        //     $id = $product->get_id();
        //     $products[$id] = get_the_title();
        // endwhile;

        // wp_reset_query();

		$this->add_control(
			'product-id',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'product-id', 'textdomain' ),
			]
		);

        // $this->add_control(
		// 	'product',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::SELECT,
		// 		'label' => esc_html__( 'Choose product', 'textdomain' ),
		// 		'options' => $products,
		// 		'default' => 'no',
		// 	]
		// );


        
		 $this->end_controls_section();

	}
    // protected function render() {
	// 	// $settings = $this->get_settings_for_display();
	// 	// echo '<h3>' . $settings['title'] . '</h3>';
    //     // echo '<h3>' . $settings['product'] . '</h3>';
    //     // $product = wc_get_product($settings['product']);
		
		
        
	// }

	// PHP render
	
	protected function render() {
		//return '';

		$settings = $this->get_settings_for_display();

		$this->add_inline_editing_attributes( 'product-id', 'none' );
		//echo $settings['product-id'];
		$_product = wc_get_product( $settings['product-id']);
		if (is_a($_product, 'WC_Product')) {
			?>
				<h3>Product Name: <?php echo $_product->get_name(); ?></h3>
				<h3>Product Price: $<?php echo $_product->get_price(); ?></h3>
			<?php
		}

    }

	// JS render
	
	public function content_template() {
		return '';
		/*
		?>
		<#
		view.addInlineEditingAttributes( 'product-id', 'none' );
		#>
		<h2 {{{ view.getRenderAttributeString( 'product-id' ) }}}>{{{ settings.product-id }}}</h2>
		<?php
		*/
    }
	
	
	
}


