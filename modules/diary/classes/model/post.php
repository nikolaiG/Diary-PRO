<?php defined('SYSPATH') or die( 'No direct script access.' );

class Model_Post extends ORM {

    public function get_name() {
        return $this->name;
    }

    public function get_text($full_text = true) {
        if ( $full_text ) return $this->text;

        return preg_replace('|<cut.{0,}>.+|', '', $this->text);
    }

    public function get_cat_name() {
        $match = null;
        $cat_name = "Читать";

        preg_match('|<cut.{0,}>|', $this->text, $match);

        if ( $match ) {
            preg_match('|<cut text="(.*)"|sei', array_shift($match), $cat_name_match);
            isset($cat_name_match[1]) ? $cat_name = $cat_name_match[1] : null;
        }

        return $cat_name;
    }

}

?>