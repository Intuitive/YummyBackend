<?php
App::uses('MenuItem', 'Model');

/**
 * MenuItem Test Case
 *
 */
class MenuItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menu_item',
		'app.vendor',
		'app.operation_schedule',
		'app.order',
		'app.special_offer',
		'app.user',
		'app.vendor_review',
		'app.ingredient',
		'app.order_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuItem = ClassRegistry::init('MenuItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuItem);

		parent::tearDown();
	}

}
