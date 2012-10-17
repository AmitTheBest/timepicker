<?php
namespace timepicker;
class Form_Field_TimePicker extends \Form_Field_Line {
	public $options=array();
	function init(){
		parent::init();

		$l = $this->api->locate('addons',__NAMESPACE__,'location');
		$addon_location = $this->api->locate('addons',__NAMESPACE__);
		$this->api->pathfinder->addLocation($addon_location,array(
			'js'=>'.',
			'css'=>'.',
		))->setParent($l);

		$this
			->js(true)
			->_load('jquery.timepicker')
			->_css('jquery.timepicker')
			->timepicker($this->options);
	}
}
