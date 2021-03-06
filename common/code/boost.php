<?php
/*
  Copyright 2007 Redshift Software, Inc.
  Distributed under the Boost Software License, Version 1.0.
  (See accompanying file LICENSE_1_0.txt or http://www.boost.org/LICENSE_1_0.txt)
*/
require_once(dirname(__FILE__) . '/boost_config.php');
require_once(dirname(__FILE__) . '/boost_version.php');
boost_set_current_version(1,56,0);

function html_encode($text) {
    return htmlentities($text, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}
