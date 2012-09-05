<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {

    public function can_view() {
        return true;
    }

    public function can_add() {
        return Auth::instance()->logged_in();
    }

    public function can_edit() {
        return $this->can_add();
    }

    public function can_delete() {
        return $this->can_add();
    }
}

?>
