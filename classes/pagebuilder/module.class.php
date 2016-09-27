<?php
/**
 * Class for creating new modules in the MW Page Builder
 * @author Casper Reiff
 */

class MwpbModule extends MwPageBuilder {

    public function __construct($name, $frontend_render) {
        parent::__construct("module", $name, $frontend_render);
    }

}

function getModule($module) {
    if(has_action('mwpb_module_' . $module))
        do_action('mwpb_module_' . $module);
}