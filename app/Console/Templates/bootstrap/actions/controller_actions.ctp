<?php
/**
 * Bake Template for Controller action generation.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.actions
 * @since         CakePHP(tm) v 1.3
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

/**
 * <?php echo $admin ?>index method
 *
 * @return void
 */
	public function <?php echo $admin ?>index() {
        $this->set('<?php echo $pluralName ?>', $this-><?php echo $currentModelName ?>->find('all', array('recursive' => -1, 'conditions' => array('<?php echo $currentModelName ?>.eliminado' => 0))));
	}

/**
 * <?php echo $admin ?>view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function <?php echo $admin ?>view($id = null) {
		if (!$this-><?php echo $currentModelName; ?>->exists($id)) {
			throw new NotFoundException(__('<?php echo strtolower($singularHumanName); ?> no válido/a.'));
		}
		$options = array('conditions' => array('<?php echo $currentModelName; ?>.' . $this-><?php echo $currentModelName; ?>->primaryKey => $id));
		$this->set('<?php echo $singularName; ?>', $this-><?php echo $currentModelName; ?>->find('first', $options));
	}

<?php $compact = array(); ?>
/**
 * <?php echo $admin ?>add method
 *
 * @return void
 */
	public function <?php echo $admin ?>add() {
		if ($this->request->is('post')) {
			$this-><?php echo $currentModelName; ?>->create();
			if ($this-><?php echo $currentModelName; ?>->save($this->request->data)) {
            <?php if ($wannaUseSession): ?>
				$this->Session->setFlash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la <?php echo strtolower($singularHumanName); ?> no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            <?php else: ?>
				return $this->flash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido guradado/a.'), array('action' => 'index'));
            <?php endif; ?>
			}
		}
        <?php
	        foreach (array('belongsTo', 'hasAndBelongsToMany') as $assoc):
		        foreach ($modelObj->{$assoc} as $associationName => $relation):
			        if (!empty($associationName)):
				        $otherModelName = $this->_modelName($associationName);
				        $otherPluralName = $this->_pluralName($associationName);
				        echo "\t\t\${$otherPluralName} = \$this->{$currentModelName}->{$otherModelName}->find('list');\n";
				        $compact[] = "'{$otherPluralName}'";
			        endif;
		        endforeach;
	        endforeach;
	        if (!empty($compact)):
		        echo "\t\t\$this->set(compact(".join(', ', $compact)."));\n";
	        endif;
        ?>
	}

<?php $compact = array(); ?>
/**
 * <?php echo $admin ?>edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function <?php echo $admin; ?>edit($id = null) {
		if (!$this-><?php echo $currentModelName; ?>->exists($id)) {
			throw new NotFoundException(__('<?php echo strtolower($singularHumanName); ?> no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this-><?php echo $currentModelName; ?>->save($this->request->data)) {
            <?php if ($wannaUseSession): ?>
				$this->Session->setFlash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La <?php echo strtolower($singularHumanName); ?> no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            <?php else: ?>
				return $this->flash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido guardado/a.'), array('action' => 'index'));
            <?php endif; ?>
			}
		} else {
			$options = array('conditions' => array('<?php echo $currentModelName; ?>.' . $this-><?php echo $currentModelName; ?>->primaryKey => $id));
			$this->request->data = $this-><?php echo $currentModelName; ?>->find('first', $options);
		}
        <?php
		    foreach (array('belongsTo', 'hasAndBelongsToMany') as $assoc):
			    foreach ($modelObj->{$assoc} as $associationName => $relation):
				    if (!empty($associationName)):
					    $otherModelName = $this->_modelName($associationName);
					    $otherPluralName = $this->_pluralName($associationName);
					    echo "\t\t\${$otherPluralName} = \$this->{$currentModelName}->{$otherModelName}->find('list');\n";
					    $compact[] = "'{$otherPluralName}'";
				    endif;
			    endforeach;
		    endforeach;
		    if (!empty($compact)):
			    echo "\t\t\$this->set(compact(".join(', ', $compact)."));\n";
		    endif;
	    ?>
	}

/**
 * <?php echo $admin ?>delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function <?php echo $admin; ?>delete($id = null) {
		$this-><?php echo $currentModelName; ?>->id = $id;
		if (!$this-><?php echo $currentModelName; ?>->exists()) {
			throw new NotFoundException(__('<?php echo strtolower($singularHumanName); ?> no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this-><?php echo $currentModelName; ?>->saveField('eliminado', 1)) {
            <?php if ($wannaUseSession): ?>
			$this->Session->setFlash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La <?php echo strtolower($singularHumanName); ?> no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        <?php else: ?>
			return $this->flash(__('El/La <?php echo strtolower($singularHumanName); ?> ha sido eliminado/a.'), array('action' => 'index'));
		} else {
			return $this->flash(__('El/La <?php echo strtolower($singularHumanName); ?> no se pudo eliminar. Por favor, intente nuevamente.'), array('action' => 'index'));
		}
        <?php endif; ?>
	}
