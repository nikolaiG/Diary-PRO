<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base {

    public function before() {
        $this->unauthorized_access(true);
        parent::before();
    }

	public function action_login() {
        $login    = $this->request->post('email');
        $password = $this->request->post('password');

        $this->auth->login($login,$password);
        $this->request->redirect(URL::base());
	}

    public function action_logout() {
        $this->auth->logout();
        $this->request->redirect(URL::base());
    }
}
