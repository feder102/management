<?php
App::uses('AppModel', 'Model');
/**
 * ItemAcount Model
 *
 * @property AcountSale $AcountSale
 * @property Garment $Garment
 */
class ItemAcount extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'acount_sale_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'acount_sale_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'garment_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cant' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AcountSale' => array(
			'className' => 'AcountSale',
			'foreignKey' => 'acount_sale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Garment' => array(
			'className' => 'Garment',
			'foreignKey' => 'garment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
