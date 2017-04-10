<?php
App::uses('Size', 'Model');

/**
 * Size Test Case
 */
class SizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.size',
		'app.garment',
		'app.color',
		'app.item_acount',
		'app.acount_sale',
		'app.sale',
		'app.item_provider',
		'app.provider',
		'app.item_sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Size = ClassRegistry::init('Size');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Size);

		parent::tearDown();
	}

}
