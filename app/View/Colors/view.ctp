<div class="colors view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Color'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Color'), array('action' => 'edit', $color['Color']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Color'), array('action' => 'delete', $color['Color']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $color['Color']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Colors'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Color'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Garments'), array('controller' => 'garments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Garment'), array('controller' => 'garments', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($color['Color']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($color['Color']['name']); ?>
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
            <div class="panel-heading"><h3><?php echo __('Garments Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($color['Garment'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Color Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Size Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Name'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount Cost'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount Unit'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Stock'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($color['Garment'] as $garment): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $garment['id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['color_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['size_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['name']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['amount_cost']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['amount_unit']; ?></td>
			<td style="text-align: center" nowrap><?php echo $garment['stock']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'garments', 'action' => 'view', $garment['id']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'garments', 'action' => 'edit', $garment['id']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'garments', 'action' => 'delete', $garment['id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $garment['id'])); ?>
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
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Garment'), array('controller' => 'garments', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
