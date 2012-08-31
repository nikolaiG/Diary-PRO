<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Diary extends Controller_Base {

	protected $_this_menu_item = 'Diary';

	public function action_index() {
        $view = View::factory('diary/index');

        $this->view->content = $view;
	}

    public function action_add() {

        if ( $this->request->method() == 'POST' ) {

        }

        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js');
        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js');
        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css');

        $this->attach_file('modules/diary/media/js/main.js');

        $this->view->content = View::factory('diary/add');
    }

    public function action_view() {

    }

    public function action_edit () {

    }

    public function action_delete() {

    }

}
