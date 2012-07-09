<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base {

	public function action_login() {
        $login    = $_POST['email'];
        $password = $_POST['password'];

        $this->auth->login($login,$password);
        $user = ORM::factory('user')->where('username','=',$login)->where('password','=',$this->auth->hash($password))->find();
        $this->request->redirect(URL::base());
	}

    public function action_logout() {
        $this->auth->logout();
        $this->request->redirect(URL::base());
    }
}
