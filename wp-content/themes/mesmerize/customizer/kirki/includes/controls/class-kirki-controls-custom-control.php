<?php
/**
 * Customizer Control: custom.
 *
 * Creates a new custom control.
 * Custom controls accept raw HTML/JS.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kirki_Controls_Custom_Control' ) ) {

	/**
	 * The "custom" control allows you to add any raw HTML.
	 */
	class Kirki_Controls_Custom_Control extends Kirki_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'kirki-custom';

		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see Kirki_Customize_Control::to_json()}.
		 *
		 * @see WP_Customize_Control::print_template()
		 *
		 * @access protected
		 */
		protected function content_template() {
			?>
			<# if ( data.tooltip ) { #>
				<a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
			<# } #>
			<label>
				<# if ( data.label ) { #>
					<span class="customize-control-title">{{{ data.label }}}</span>
				<# } #>
				<# if ( data.description ) { #>
					<span class="description customize-control-description">{{{ data.description }}}</span>
				<# } #>
				<?php
					/**
					 * The value is defined by the developer in the field configuration as 'default'.
					 * There is no user input on this field, it's a raw HTML/JS field and we do not sanitize it.
					 * Do not be alarmed, this is not a security issue.
					 * In order for someone to be able to change this they would have to have access to your filesystem.
					 * If that happens, they can change whatever they want anyways. This field is not a concern.
					 */
				?>
				{{{ data.value }}}
			</label>
			<?php

		}
	}
}
