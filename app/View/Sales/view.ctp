<div class="sales view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Sale'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Sale'), array('action' => 'edit', $sale['Sale']['number']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Sale'), array('action' => 'delete', $sale['Sale']['number']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $sale['Sale']['number'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sales'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Sale'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Providers'), array('controller' => 'item_providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Provider'), array('controller' => 'item_providers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Number'); ?></th>
		<td>
			<?php echo h($sale['Sale']['number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amoun'); ?></th>
		<td>
			<?php echo h($sale['Sale']['amoun']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($sale['Sale']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hour'); ?></th>
		<td>
			<?php echo h($sale['Sale']['hour']); ?>
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
            <div class="panel-heading"><h3><?php echo __('Item Providers Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($sale['ItemProvider'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Provider Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Cuit'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Payment Date'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Sale Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($sale['ItemProvider'] as $itemProvider): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $itemProvider['provider_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemProvider['cuit']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemProvider['payment_date']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemProvider['sale_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemProvider['amount']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'item_providers', 'action' => 'view', $itemProvider['provider_id']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'item_providers', 'action' => 'edit', $itemProvider['provider_id']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'item_providers', 'action' => 'delete', $itemProvider['provider_id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $itemProvider['provider_id'])); ?>
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
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Provider'), array('controller' => 'item_providers', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
