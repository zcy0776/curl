<?php
header('Content-Type:text/html;Charset=utf-8');
define('ROOT_PATH', dirname(__FILE__));
define('DB_HOST', '222.52.118.90'); //���ݿ��������ַ
define('DB_USER', 'root');  //���ݿ��û���
define('DB_PWD', 'root');//���ݿ�����
define('DB_NAME', 'newssystem');  //���ݿ�����
define('DB_PORT', '3306');  //���ݿ�˿�
function __autoload($className) {
    require_once ROOT_PATH . '/includes/'. ucfirst($className) .'.class.php'; //�Զ����� class �ļ�
}
?>
