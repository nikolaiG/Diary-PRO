<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Diary extends Controller_Base {

	protected $_this_menu_item = 'Diary';

    public function before() {
        parent::before();
        $this->add_crumb('Diary', Route::url('default', array('controller' => $this->request->controller())));
    }
	public function action_index() {
        $view = View::factory('diary/main');
        $view->posts = ORM::factory('post')->where('user_id', '=', $this->user->id)->find_all();

        $this->view->content = $view;
	}

    public function action_add() {

        if ( $this->request->method() == 'POST' ) {
            $post = ORM::factory('post');
            if ( $post->can_add() ) {
                $post->name = $this->request->post('name');
                $post->text = $this->request->post('text');
                $post->user_id = $this->user->id;
                $post->save();

                $this->request->redirect(Route::url('default', array('controller' => $this->request->controller())));
            }
        }

        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js');
        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js');
        $this->attach_file('modules/diary/media/js/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css');

        $this->attach_file('modules/diary/media/js/main.js');

        $this->view->content = View::factory('diary/add');
    }

    public function action_view() {
        $id = $this->request->param('id');
        $post = ORM::factory('post', $id);

        if ( !$post->loaded() OR !$post->can_view() ) throw new HTTP_Exception_404;
        $this->add_crumb($post->get_name(), $post->get_url());

        $view = View::factory('diary/view');
        $view->post = $post;

        $this->view->content = $view;
    }

    public function action_edit () {

    }

    public function action_delete() {

    }

}
