<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Diary extends Controller_Base {

	protected $_this_menu_item = 'Diary';

	public function action_index() {
        $view = View::factory('diary/index');

        $this->view->content = $view;
	}
}
