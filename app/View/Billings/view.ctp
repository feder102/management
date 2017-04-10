<div class="billings view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Billing'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Billing'), array('action' => 'edit', $billing['Billing']['number']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Billing'), array('action' => 'delete', $billing['Billing']['number']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $billing['Billing']['number'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Billings'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Billing'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Sellers'), array('controller' => 'sellers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Seller'), array('controller' => 'sellers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($billing['Billing']['number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date Issued'); ?></th>
		<td>
			<?php echo h($billing['Billing']['Date_issued']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount Total'); ?></th>
		<td>
			<?php echo h($billing['Billing']['amount_total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sale Number'); ?></th>
		<td>
			<?php echo h($billing['Billing']['sale_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Seller'); ?></th>
		<td>
			<?php echo $this->Html->link($billing['Seller']['id'], array('controller' => 'sellers', 'action' => 'view', $billing['Seller']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cuil'); ?></th>
		<td>
			<?php echo h($billing['Billing']['cuil']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

