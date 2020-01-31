<?php
define("EPESI_VERSION", '1.9.0 RC5');
define("EPESI_REVISION", 20200131);

function epesi_requires_update()
{
    $ret = null;
    if (class_exists('Variable', false)) {
        $system_version = Variable::get('version');
        $ret = version_compare($system_version, EPESI_VERSION, '<');
    }
    return $ret;
}
