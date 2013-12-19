<?php
/**
 * 设置自定义类加载器
 */
defined('ROOT_PATH') or die('Visit unavailable!');

class ClassLoader {

    public function __construct() {
        $loader_list = get_class_methods(__CLASS__);
        unset($loader_list[0]);

        foreach ($loader_list as $method) {
            spl_autoload_register(array(__CLASS__, $method));
        }
    }

    /**
     * 加载框架工具类。
     */
    private function util($class) {
        $class_filename = UTIL_PATH . $class . DS . $class . '.class.php';

        if (file_exists($class_filename)) {
            require $class_filename;
        } else {
            return FALSE;
        }
    }

    /**
     * 加载应用业务相关的model。
     */
    private function model($class) {
        $app = isset($_GET['app']) ? $_GET['app'] : DEFAULT_APP;
        $class_filename = APP_PATH . $app . DS . 'model' . DS . $class . '.class.php';

        if (file_exists($class_filename)) {
            require $class_filename;
        } else {
            return FALSE;
        }
    }

}

new ClassLoader;

# end of this file