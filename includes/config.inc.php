<?php
header('Content-Type:text/html;Charset=utf-8');
define('ROOT_PATH', dirname(__FILE__));
define('DB_HOST', '222.52.118.90'); //数据库服务器地址
define('DB_USER', 'root');  //数据库用户名
define('DB_PWD', 'root');//数据库密码
define('DB_NAME', 'newssystem');  //数据库名称
define('DB_PORT', '3306');  //数据库端口
function __autoload($className) {
    require_once ROOT_PATH . '/includes/'. ucfirst($className) .'.class.php'; //自动加载 class 文件
}
?>
