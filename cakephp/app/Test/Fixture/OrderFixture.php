<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id number of the order'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'wait_time' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'number of minutes a customer will need to wait for their order'),
		'payment_method' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'method customer will use to pay for order'),
		'tax' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => 'tax on order'),
		'discount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => 'discount (if any) applied to order'),
		'total_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => 'total price of order'),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'vendor who is preparing order'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'vendor_id' => array('column' => 'vendor_id', 'unique' => 0),
			'fk_order_user' => array('column' => 'user_id', 'unique' => 0)
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
			'user_id' => 1,
			'wait_time' => 1,
			'payment_method' => 1,
			'tax' => 1,
			'discount' => 1,
			'total_price' => 1,
			'vendor_id' => 1
		),
	);

}
