<div class="personas view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Persona'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Persona'), array('action' => 'edit', $persona['Persona']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Persona'), array('action' => 'delete', $persona['Persona']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Personas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Persona'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Telefonos'), array('controller' => 'telefonos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Telefono'), array('controller' => 'telefonos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($persona['Persona']['nombre']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Eliminado'); ?></th>
		<td>
			<?php echo h($persona['Persona']['eliminado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($persona['Persona']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($persona['Persona']['modified']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

<div class="related row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3><?php echo __('Telefonos Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($persona['Telefono'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Numero'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Persona Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Eliminado'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Created'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Modified'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($persona['Telefono'] as $telefono): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $telefono['id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $telefono['numero']; ?></td>
			<td style="text-align: center" nowrap><?php echo $telefono['persona_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $telefono['eliminado']; ?></td>
			<td style="text-align: center" nowrap><?php echo $telefono['created']; ?></td>
			<td style="text-align: center" nowrap><?php echo $telefono['modified']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'telefonos', 'action' => 'view', $telefono['id']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'telefonos', 'action' => 'edit', $telefono['id']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'telefonos', 'action' => 'delete', $telefono['id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $telefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>

                </div>
                <div class="panel-footer">
                    <div class="actions">
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Telefono'), array('controller' => 'telefonos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
