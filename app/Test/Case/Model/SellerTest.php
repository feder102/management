<?php
App::uses('Seller', 'Model');

/**
 * Seller Test Case
 */
class SellerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seller',
		'app.billing'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seller = ClassRegistry::init('Seller');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seller);

		parent::tearDown();
	}

}
