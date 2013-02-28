<?php
/**
 * OperationScheduleFixture
 *
 */
class OperationScheduleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'hours identification number'),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'vendor row is associated with'),
		'monday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'open time on typcial Monday'),
		'monday_close' => array('type' => 'time', 'null' => false, 'default' => null),
		'tuesday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'open time on typcial Monday'),
		'tuesday_close' => array('type' => 'time', 'null' => false, 'default' => null),
		'wednesday_open' => array('type' => 'time', 'null' => false, 'default' => null),
		'wednesday_close' => array('type' => 'time', 'null' => false, 'default' => null),
		'thursday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time open on typical Thursday'),
		'thursday_close' => array('type' => 'time', 'null' => false, 'default' => null),
		'friday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time open on typical Friday'),
		'friday_close' => array('type' => 'time', 'null' => false, 'default' => null),
		'saturday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time open on typical Saturday'),
		'saturday_close' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time close on typical Saturday'),
		'sunday_open' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time open on typical Sunday'),
		'sunday_close' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'time close on typical Sunday'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'dated entry created'),
		'date_last_modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => 'time entry was last modified'),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'is entry still active'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_operation_schedule_vendor' => array('column' => 'vendor_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'vendor_id' => 1,
			'monday_open' => '16:18:41',
			'monday_close' => '16:18:41',
			'tuesday_open' => '16:18:41',
			'tuesday_close' => '16:18:41',
			'wednesday_open' => '16:18:41',
			'wednesday_close' => '16:18:41',
			'thursday_open' => '16:18:41',
			'thursday_close' => '16:18:41',
			'friday_open' => '16:18:41',
			'friday_close' => '16:18:41',
			'saturday_open' => '16:18:41',
			'saturday_close' => '16:18:41',
			'sunday_open' => '16:18:41',
			'sunday_close' => '16:18:41',
			'date_created' => '2013-02-27 16:18:41',
			'date_last_modified' => 1362007121,
			'deleted' => 1
		),
	);

}
