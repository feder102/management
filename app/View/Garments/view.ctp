<div class="garments view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Garment'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Garment'), array('action' => 'edit', $garment['Garment']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Garment'), array('action' => 'delete', $garment['Garment']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $garment['Garment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Garments'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Garment'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Colors'), array('controller' => 'colors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Color'), array('controller' => 'colors', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sizes'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Size'), array('controller' => 'sizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Acounts'), array('controller' => 'item_acounts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Acount'), array('controller' => 'item_acounts', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($garment['Garment']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Color'); ?></th>
		<td>
			<?php echo $this->Html->link($garment['Color']['name'], array('controller' => 'colors', 'action' => 'view', $garment['Color']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Size'); ?></th>
		<td>
			<?php echo $this->Html->link($garment['Size']['name'], array('controller' => 'sizes', 'action' => 'view', $garment['Size']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($garment['Garment']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount Cost'); ?></th>
		<td>
			<?php echo h($garment['Garment']['amount_cost']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount Unit'); ?></th>
		<td>
			<?php echo h($garment['Garment']['amount_unit']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Stock'); ?></th>
		<td>
			<?php echo h($garment['Garment']['stock']); ?>
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
            <div class="panel-heading"><h3><?php echo __('Item Acounts Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($garment['ItemAcount'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Acount Sale Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Number'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Garment Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Cant'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($garment['ItemAcount'] as $itemAcount): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $itemAcount['acount_sale_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemAcount['number']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemAcount['garment_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemAcount['cant']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemAcount['amount']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'item_acounts', 'action' => 'view', $itemAcount['acount_sale_id']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'item_acounts', 'action' => 'edit', $itemAcount['acount_sale_id']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'item_acounts', 'action' => 'delete', $itemAcount['acount_sale_id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $itemAcount['acount_sale_id'])); ?>
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
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Acount'), array('controller' => 'item_acounts', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
