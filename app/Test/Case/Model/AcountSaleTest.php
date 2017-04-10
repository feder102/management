<?php
App::uses('AcountSale', 'Model');

/**
 * AcountSale Test Case
 */
class AcountSaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acount_sale',
		'app.sale',
		'app.item_acount'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AcountSale = ClassRegistry::init('AcountSale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AcountSale);

		parent::tearDown();
	}

}
