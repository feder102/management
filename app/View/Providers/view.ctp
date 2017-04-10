<div class="providers view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Provider'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Provider'), array('action' => 'edit', $provider['Provider']['cuit']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Provider'), array('action' => 'delete', $provider['Provider']['cuit']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $provider['Provider']['cuit'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Providers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Provider'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Sales'), array('controller' => 'item_sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Sale'), array('controller' => 'item_sales', 'action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Cuit'); ?></th>
		<td>
			<?php echo h($provider['Provider']['cuit']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($provider['Provider']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($provider['Provider']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($provider['Provider']['phone']); ?>
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
            <div class="panel-heading"><h3><?php echo __('Item Sales Relacionados'); ?></h3></div>
                <div class="panel-body">
                    <?php if (!empty($provider['ItemSale'])): ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    		<th style="text-align: center" nowrap><?php echo __('Id Garment'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Id Color'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Id Size'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Cant'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Amount'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Sale Number'); ?></th>
		<th style="text-align: center" nowrap><?php echo __('Provider Id'); ?></th>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                	<?php foreach ($provider['ItemSale'] as $itemSale): ?>
		<tr>
			<td style="text-align: center" nowrap><?php echo $itemSale['id_garment']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['id_color']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['id_size']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['cant']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['amount']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['sale_number']; ?></td>
			<td style="text-align: center" nowrap><?php echo $itemSale['provider_id']; ?></td>
			<td style="text-align: center" nowrap class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'item_sales', 'action' => 'view', $itemSale['id_garment']), array('title' => 'Ver', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'item_sales', 'action' => 'edit', $itemSale['id_garment']), array('title' => 'Editar', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'item_sales', 'action' => 'delete', $itemSale['id_garment']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $itemSale['id_garment'])); ?>
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
                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Sale'), array('controller' => 'item_sales', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
