<?php
// $Id: localsupport.php 108 2010-01-12 11:45:35Z kris_fr $

$menu = array();


$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'زوپس انگلیسی',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.irxoops.org',
    'title'     => 'زوپس فارسی',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.irxoops.org/modules/TDMDownloads/index.php',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);


return $menu;
?>