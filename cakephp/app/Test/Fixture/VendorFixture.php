<?php
/**
 * VendorFixture
 *
 */
class VendorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'vendor identification number'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'vendor name', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => 'description of vendor/food', 'charset' => 'utf8'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'location of vendor', 'charset' => 'utf8'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'status of vendor'),
		'picture_url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'comment' => 'url for picture', 'charset' => 'utf8'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'date the entry was created'),
		'date_last_modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => 'date the entry was last modified'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'shows if entry is no longer active'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'picture_url' => 'Lorem ipsum dolor sit amet',
			'date_created' => '2013-02-26 22:19:26',
			'date_last_modified' => 1361942366,
			'deleted' => 1
		),
	);

}
