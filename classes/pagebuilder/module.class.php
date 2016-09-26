<?php
/**
 * Class for creating new modules in the MW Page Builder
 * @author Casper Reiff
 */

class MwpbModule extends MwPageBuilder {

    public function __construct($name, $render_function) {

        parent::__construct($name, 'module', $render_function);

    }

}

function createModule($name, $render_function) {
    $mwpb_module = new MwpbModule($name, $render_function);
}

function getModule($module) {
    if(has_action('mwpb_module_' . $module))
        do_action('mwpb_module_' . $module);
}