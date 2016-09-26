<?php
/**
 * The main class for the MW PageBuilder
 * @author Casper Reiff
 */

class MwPageBuilder {

    public $name, $type, $render_function;

    public function __construct($name, $type, $render_function) {

        $this->name = $name;
        $this->type = $type;
        $this->render_function = $render_function;

        // Add the render action to WordPress
        if( !empty($this->name) && !empty($this->type) )
            add_action('mwpb_' . $this->type . '_' . $this->name, array($this, 'render'));

    }

    public function render() {
        call_user_func($this->render_function);
    }

}