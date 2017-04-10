<div class="itemProviders view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Item Provider'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Item Provider'), array('action' => 'edit', $itemProvider['ItemProvider']['provider_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Item Provider'), array('action' => 'delete', $itemProvider['ItemProvider']['provider_id']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $itemProvider['ItemProvider']['provider_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Item Providers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Item Provider'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Provider'); ?></th>
		<td>
			<?php echo $this->Html->link($itemProvider['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $itemProvider['Provider']['cuit'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cuit'); ?></th>
		<td>
			<?php echo h($itemProvider['ItemProvider']['cuit']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Payment Date'); ?></th>
		<td>
			<?php echo h($itemProvider['ItemProvider']['payment_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale'); ?></th>
		<td>
			<?php echo $this->Html->link($itemProvider['Sale']['number'], array('controller' => 'sales', 'action' => 'view', $itemProvider['Sale']['number'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount'); ?></th>
		<td>
			<?php echo h($itemProvider['ItemProvider']['amount']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

