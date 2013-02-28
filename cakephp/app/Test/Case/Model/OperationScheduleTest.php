<?php
App::uses('OperationSchedule', 'Model');

/**
 * OperationSchedule Test Case
 *
 */
class OperationScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operation_schedule',
		'app.vendor',
		'app.menu_item',
		'app.ingredient',
		'app.order_item',
		'app.order',
		'app.user',
		'app.vendor_review',
		'app.special_offer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperationSchedule = ClassRegistry::init('OperationSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperationSchedule);

		parent::tearDown();
	}

}
