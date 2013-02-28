<?php
/**
 * VendorReviewFixture
 *
 */
class VendorReviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'identification number of review'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'index', 'comment' => 'author of review'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'title of review', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_unicode_ci', 'comment' => 'the review itself', 'charset' => 'utf8'),
		'rating' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'rating of experience'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'date review was submitted'),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'vendor review is associated with'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'if review was removed'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_vendor_review_user' => array('column' => 'user_id', 'unique' => 0),
			'fk_vendor_review_vendor' => array('column' => 'vendor_id', 'unique' => 0)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'rating' => 1,
			'date_created' => '2013-02-27 16:18:05',
			'vendor_id' => 1,
			'deleted' => 1
		),
	);

}
