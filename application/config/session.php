<?php defined('SYSPATH') OR die('No direct access allowed.');
return array(
		'native' => array(
				'name' => 'r1812',
				'lifetime' => 43200,
		),
		'cookie' => array(
				'name' => 'cookie_name',
				'encrypted' => TRUE,
				'lifetime' => 43200,
		),
		'database' => array(
				'name' => 'cookie_name',
				'encrypted' => TRUE,
				'lifetime' => 43200,
				'group' => 'default',
				'table' => 'table_name',
				'columns' => array(
						'session_id'  => 'session_id',
						'last_active' => 'last_active',
						'contents'    => 'contents'
				),
				'gc' => 500,
		),
);