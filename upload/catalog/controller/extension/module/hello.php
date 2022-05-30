<?php
class ControllerExtensionModuleHello extends Controller {
	public function index() {
		$data = array();
		$data += $this->load->language('extension/module/hello');
		$data['heading_title'] = $this->language->get('heading_title');
		$data['helloworld_value'] = $this->language->get('helloworld_value');
		return $this->load->view('extension/module/hello', $data);
	}
}
