<div class="itemSales view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Item Sale'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Item Sale'), array('action' => 'edit', $itemSale['ItemSale']['id_garment']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Item Sale'), array('action' => 'delete', $itemSale['ItemSale']['id_garment']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $itemSale['ItemSale']['id_garment'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Sales'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Sale'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Id Garment'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['id_garment']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Color'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['id_color']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Size'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['id_size']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cant'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['cant']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale Number'); ?></th>
		<td>
			<?php echo h($itemSale['ItemSale']['sale_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Provider'); ?></th>
		<td>
			<?php echo $this->Html->link($itemSale['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $itemSale['Provider']['cuit'])); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

