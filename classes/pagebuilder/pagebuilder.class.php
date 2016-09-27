<?php
/**
 * The main class for the MW PageBuilder
 * @author Casper Reiff
 */

class MwPageBuilder {

    public $name, $type, $frontend_render;

    public function __construct($type, $name, $frontend_render) {

        $this->type = $type;
        $this->name = $name;
        $this->frontend_render = $frontend_render;

        // Add the render action to WordPress
        if( !empty($this->type) && !empty($this->name) )
            add_action('mwpb_' . $this->type . '_' . $this->name, array($this, 'render'));

    }

    public function render() {
        call_user_func($this->frontend_render);
    }

}