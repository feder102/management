<?php
/**
 * ItemSale Fixture
 */
class ItemSaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_garment' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_color' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'id_size' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cant' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'sale_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'provider_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_garment', 'unique' => 1)
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
			'id_garment' => 'Lorem ipsum dolor sit amet',
			'id_color' => 1,
			'id_size' => 1,
			'cant' => 1,
			'amount' => 1,
			'sale_number' => 1,
			'provider_id' => 1
		),
	);

}
