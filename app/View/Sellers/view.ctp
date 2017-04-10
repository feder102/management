<div class="sellers view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Seller'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Seller'), array('action' => 'edit', $seller['Seller']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Seller'), array('action' => 'delete', $seller['Seller']['id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $seller['Seller']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sellers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Seller'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Billings'), array('controller' => 'billings', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Billing'), array('controller' => 'billings', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($seller['Seller']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cant'); ?></th>
		<td>
			<?php echo h($seller['Seller']['cant']); ?>
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
            <div class="panel-heading"><h3><?php echo __('Billings Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($seller['Billing'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Number'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Date Issued'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount Total'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Sale Number'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Seller Id'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Cuil'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($seller['Billing'] as $billing): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $billing['number']; ?></td>
			<td style="text-align: center" nowrap><?php echo $billing['Date_issued']; ?></td>
			<td style="text-align: center" nowrap><?php echo $billing['amount_total']; ?></td>
			<td style="text-align: center" nowrap><?php echo $billing['sale_number']; ?></td>
			<td style="text-align: center" nowrap><?php echo $billing['seller_id']; ?></td>
			<td style="text-align: center" nowrap><?php echo $billing['cuil']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'billings', 'action' => 'view', $billing['number']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'billings', 'action' => 'edit', $billing['number']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'billings', 'action' => 'delete', $billing['number']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $billing['number'])); ?>
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
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Billing'), array('controller' => 'billings', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
