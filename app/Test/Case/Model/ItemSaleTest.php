<?php
App::uses('ItemSale', 'Model');

/**
 * ItemSale Test Case
 */
class ItemSaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_sale',
		'app.provider'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemSale = ClassRegistry::init('ItemSale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemSale);

		parent::tearDown();
	}

}
