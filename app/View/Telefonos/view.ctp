<div class="telefonos view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Telefono'); ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Acciones</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Telefono'), array('action' => 'edit', $telefono['Telefono']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Telefono'), array('action' => 'delete', $telefono['Telefono']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $telefono['Telefono']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Telefonos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Telefono'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Personas'), array('controller' => 'personas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Persona'), array('controller' => 'personas', 'action' => 'add'), array('escape' => false)); ?> </li>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

        <div class="col-md-9">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                    <tbody>
                        <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($telefono['Telefono']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numero'); ?></th>
		<td>
			<?php echo h($telefono['Telefono']['numero']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Persona'); ?></th>
		<td>
			<?php echo $this->Html->link($telefono['Persona']['nombre'], array('controller' => 'personas', 'action' => 'view', $telefono['Persona']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Eliminado'); ?></th>
		<td>
			<?php echo h($telefono['Telefono']['eliminado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($telefono['Telefono']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($telefono['Telefono']['modified']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

