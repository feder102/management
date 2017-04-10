<?php
/**
 * Garment Fixture
 */
class GarmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount_unit' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'stock' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit amet',
			'color_id' => 1,
			'size_id' => 1,
			'name' => 1,
			'amount_cost' => 1,
			'amount_unit' => 1,
			'stock' => 1
		),
	);

}
