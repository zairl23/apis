<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_ENGINE_TYPE' => 'php',
	//数据库配置信息
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'tp', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'tp_', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'APIS' => array(
		'test' => array(
			'fields' => array('field1', 'field2'),
			'url' => 'http://baidu.com',
			'request' => 'TestRequest',
			'response' => 'TestResponse',
		)
	),
);
?>
