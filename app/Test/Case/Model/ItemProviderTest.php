<?php
App::uses('ItemProvider', 'Model');

/**
 * ItemProvider Test Case
 */
class ItemProviderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_provider',
		'app.provider',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemProvider = ClassRegistry::init('ItemProvider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemProvider);

		parent::tearDown();
	}

}
