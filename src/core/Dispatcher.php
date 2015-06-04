<?php
/**
 * Dispatcher.
 */

namespace core;

/**
 * Dispater for CLI mode.
 * @param array $argv The params of command line.
 * @return bool
 */
function dispatch_cli($argv)
{
    $cmd = isset($argv[1]) ? $argv[1] : 'help';
    require CORE_PATH . 'Command.php';

    // Check framework commands.
    if (Command::$cmd() !== false) {
        return true;
    }
}

/**
 * Dispatcher for CGI mode.
 */
function dispatch_cgi()
{
    require APP_PATH . 'controller/Base.php';
    Router::responseFrontEndFiles('static');
    $oController = Router::route($_SERVER['REQUEST_URI'], APP_PATH);
    $oController->before();
    $aData = $oController->handle();
    $sOutputType = $oController->getOutputType();
    Output::handle($aData, $sOutputType);
    $oController->after();
}

# end of this file.
