<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 */
class Client extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'dni';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dni';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dni' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'empty' => array(
                'rule'    => 'notEmpty',
                'message' => 'Ingrese el nombre del cliente'
            ),
		),
		'lastname' => array(
			'empty' => array(
                'rule'    => 'notEmpty',
                'message' => 'Ingrese el nombre del cliente'
            ),
		),
		'address' => array(
			'empty' => array(
                'rule'    => 'notEmpty',
                'message' => 'Ingrese el nombre del cliente'
            ),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		'phone' => array(
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
}
