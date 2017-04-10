<div class="acountSales view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Acount Sale'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Acount Sale'), array('action' => 'edit', $acountSale['AcountSale']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Acount Sale'), array('action' => 'delete', $acountSale['AcountSale']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $acountSale['AcountSale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Acount Sales'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Acount Sale'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($acountSale['AcountSale']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Client Dni'); ?></th>
		<td>
			<?php echo h($acountSale['AcountSale']['client_dni']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale'); ?></th>
		<td>
			<?php echo $this->Html->link($acountSale['Sale']['number'], array('controller' => 'sales', 'action' => 'view', $acountSale['Sale']['number'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($acountSale['AcountSale']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hour'); ?></th>
		<td>
			<?php echo h($acountSale['AcountSale']['hour']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount'); ?></th>
		<td>
			<?php echo h($acountSale['AcountSale']['amount']); ?>
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
                    <?php if (!empty($acountSale['ItemAcount'])): ?>
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
                                	<?php foreach ($acountSale['ItemAcount'] as $itemAcount): ?>
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
