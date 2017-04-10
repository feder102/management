<?php
/**
 * ItemProvider Fixture
 */
class ItemProviderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'provider_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cuit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'utf8mb4_spanish_ci', 'charset' => 'utf8mb4'),
		'payment_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'sale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'provider_id', 'unique' => 1),
			'cuit' => array('column' => 'cuit', 'unique' => 0)
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
			'provider_id' => 1,
			'cuit' => 'Lorem ipsum dolor ',
			'payment_date' => '2017-02-12',
			'sale_id' => 1,
			'amount' => 1
		),
	);

}
