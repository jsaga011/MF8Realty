<?php
class Divi_REM_List_Properties extends ET_Builder_Module
{
	
	function init() {
	    $this -> name = __('List Properties', 'real-estate-manager');
	    $this -> slug = 'et_pb_rem_list_properties';
	    $this -> icon = 'P';
	}

	function get_fields() {
		return rem_vc_into_divi_settings('rem_list_properties');
	}
	
	public function render( $unprocessed_props, $content = null, $render_slug ) {
		global $rem_sc_ob;
		return $rem_sc_ob->list_properties($unprocessed_props, $content);
	}	
}

new Divi_REM_List_Properties;
?>