<?php
define('LANGEDITOR_BASE', basename(dirname(__FILE__)));
define('EXTRADIR', 'themes');

LeftAndMain::require_javascript(LANGEDITOR_BASE.'/javascript/lang_editor.js');

LeftAndMain::require_css(LANGEDITOR_BASE.'/css/lang_editor.css');
