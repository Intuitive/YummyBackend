<?php
App::uses('VendorReview', 'Model');

/**
 * VendorReview Test Case
 *
 */
class VendorReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vendor_review',
		'app.user',
		'app.vendor',
		'app.operation_schedule',
		'app.menu_item',
		'app.ingredient',
		'app.order_item',
		'app.order',
		'app.special_offer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VendorReview = ClassRegistry::init('VendorReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VendorReview);

		parent::tearDown();
	}

}
