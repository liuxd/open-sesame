<?php
/**
 * 框架入口。
 */
require __DIR__ . '/core/init.inc';

$www = substr($_SERVER['REQUEST_URI'], 0, 8);

if ($www === '/static/') {
    FrontEnd::handle(WWW_PATH, 8);
} else {
    CGI::run(Router::route());
    unset($o);
}

# end of this file
