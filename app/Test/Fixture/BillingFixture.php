<?php
/**
 * Billing Fixture
 */
class BillingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'Date_issued' => array('type' => 'date', 'null' => false, 'default' => null),
		'amount_total' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'sale_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'seller_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'cuil' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8mb4_spanish_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('number', 'sale_number'), 'unique' => 1),
			'empresa' => array('column' => 'cuil', 'unique' => 0)
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
			'Date_issued' => '2017-02-12',
			'amount_total' => 1,
			'sale_number' => 1,
			'seller_id' => 1,
			'cuil' => 'Lorem ipsum dolor sit amet'
		),
	);

}
