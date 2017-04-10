<?php
/**
 * Seller Fixture
 */
class SellerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false, 'key' => 'primary'),
		'cant' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'cantidad vendidas'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'cant' => 1
		),
	);

}
