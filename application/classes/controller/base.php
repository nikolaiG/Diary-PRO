<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {

	protected $_base_view = 'main';
	protected $_js_file   = array();
	protected $_css_file  = array();

	public function before() {
		$this->view = View::factory($this->_base_view);
	}

	public function after() {

		$this->view->_css_file = implode(' \n ',$this->_css_file);
		$this->response->body($this->view);
	}

	public function action_index() {
		$this->attach_file('design/bootstrap/bootstrap.min.css');
	}

	protected function attach_file($file_path) {

		$_ext = pathinfo($file_path);
		$_ext = $_ext['extension'];

		switch ($_ext) {
			case 'css' : {
				$this->_css_file[] = '<link rel="stylesheet" href="'.URL::base().$file_path.'">';
			}

			case 'js' : {

			}

			default : {
				return false;
			}

		}

		return true;
	}
}
