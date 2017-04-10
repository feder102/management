<?php
App::uses('Garment', 'Model');

/**
 * Garment Test Case
 */
class GarmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.garment',
		'app.color',
		'app.size',
		'app.item_acount'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Garment = ClassRegistry::init('Garment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Garment);

		parent::tearDown();
	}

}
