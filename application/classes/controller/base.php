<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {

	protected $_base_view = 'main';

	protected $_js_file   = array('_' => "\n");
	protected $_css_file  = array('_' => "\n");

	protected $_top_menu = array();

	protected $_this_menu_item = 'Home';

	public function before() {

		$this->view = View::factory($this->_base_view);

		$this->attach_file('design/css/bootstrap.min.css');
		$this->attach_file('design/css/bootstrap-responsive.min.css');

        $this->attach_file('design/js/jquery.min.js');
        $this->attach_file('design/js/bootstrap.min.js');


        $this->auth = Auth::instance();
        $this->session = Session::instance();
	}

	public function after() {
        $this->setTopMenu();

		$this->view->_css_file = implode(" \n ",$this->_css_file);
		$this->view->_js_file  = implode(" \n ",$this->_js_file);

		$this->view->top_menu  = $this->_top_menu;
		$this->view->menu_item = $this->_this_menu_item;

		$this->response->body($this->view);
	}

	public function action_index() {

        if ( $this->auth->logged_in() ) {
            $view = View::factory('index');
        }else {
            $view = View::factory('auth');
        }

		$this->view->content = $view;
	}

    protected function setTopMenu() {
        $this->_top_menu = array(
            'Home' => URL::base(),
            'Diary' => Route::url('default',array('controller' => 'Diary')),
            'Books' => '#',
            'Habits' => '#',
        );
    }

	protected function attach_file($file_path) {

		$_ext = pathinfo($file_path);
		$_ext = $_ext['extension'];

		switch ($_ext) {
			case 'css' : {
				$this->_css_file[] = '<link href="'.URL::base().$file_path.'" rel="stylesheet">';
                break;
			}

			case 'js' : {
			$this->_js_file[] = '<script src="'.URL::base().$file_path.'"></script>';
                break;
			}

			default : {
				return false;
			}

		}

		return true;
	}
}
