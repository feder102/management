<?php
/**
 * Sale Fixture
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false, 'key' => 'primary'),
		'amoun' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hour' => array('type' => 'time', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('number', 'date'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'number' => 1,
			'amoun' => 1,
			'date' => '2017-02-12',
			'hour' => '22:22:51'
		),
	);

}
