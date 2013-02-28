<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'login identification number'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_unicode_ci', 'comment' => 'username', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'MD5 hash of password', 'charset' => 'utf8'),
		'account_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'account type'),
		'vendor_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Date entry was created'),
		'date_last_modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => 'Date entry was last modified'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'is entry still active'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_user_vendor' => array('column' => 'vendor_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit a',
			'password' => 'Lorem ipsum dolor sit amet',
			'account_type' => 1,
			'vendor_id' => 1,
			'date_created' => '2013-02-27 16:13:16',
			'date_last_modified' => 1362006796,
			'deleted' => 1
		),
	);

}
