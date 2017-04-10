<?php
/**
 * Debt Fixture
 */
class DebtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'amount_total' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'subscriber_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'should_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'client_dni' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'payment_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'client_dni', 'unique' => 1)
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
			'amount_total' => 1,
			'subscriber_amount' => 1,
			'should_amount' => 1,
			'client_dni' => 1,
			'payment_date' => '2017-02-12'
		),
	);

}
