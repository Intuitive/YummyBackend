<?php
App::uses('AppModel', 'Model');
/**
 * OrderItem Model
 *
 */
class OrderItem extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'Yummy';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'menu_item_id';

}
