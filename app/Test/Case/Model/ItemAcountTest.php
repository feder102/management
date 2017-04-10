<?php
App::uses('ItemAcount', 'Model');

/**
 * ItemAcount Test Case
 */
class ItemAcountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_acount',
		'app.acount_sale',
		'app.sale',
		'app.garment',
		'app.color',
		'app.size'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemAcount = ClassRegistry::init('ItemAcount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemAcount);

		parent::tearDown();
	}

}
