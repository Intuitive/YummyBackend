<?php
/**
 * MenuItemFixture
 *
 */
class MenuItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'item identification number'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'item name', 'charset' => 'utf8'),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'category the food falls under', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '5,2', 'comment' => 'price of item'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => 'description of item', 'charset' => 'utf8'),
		'available' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'is the item currently available for ordering'),
		'picture_url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'comment' => 'url for picture', 'charset' => 'utf8'),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id number of vendor who sells this item'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'date entry was created'),
		'date_last_modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => 'date the entry was last modified'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'indicates if the item is still actively used'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_menu_item_vendor' => array('column' => 'vendor_id', 'unique' => 0)
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
			'category' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'available' => 1,
			'picture_url' => 'Lorem ipsum dolor sit amet',
			'vendor_id' => 1,
			'date_created' => '2013-02-26 22:32:04',
			'date_last_modified' => 1361943124,
			'deleted' => 1
		),
	);

}
