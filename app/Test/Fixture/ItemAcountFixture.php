<?php
/**
 * ItemAcount Fixture
 */
class ItemAcountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'acount_sale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false, 'key' => 'primary'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => true, 'key' => 'primary'),
		'garment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false, 'key' => 'primary'),
		'cant' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => array('acount_sale_id', 'number', 'garment_id'), 'unique' => 1)
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
			'acount_sale_id' => 1,
			'number' => 1,
			'garment_id' => 1,
			'cant' => 1,
			'amount' => 1
		),
	);

}
