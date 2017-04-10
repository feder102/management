<div class="debts view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Debt'); ?></h1>
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
                            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Debt'), array('action' => 'edit', $debt['Debt']['client_dni']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Debt'), array('action' => 'delete', $debt['Debt']['client_dni']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $debt['Debt']['client_dni'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Debts'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nuevo Debt'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Amount Total'); ?></th>
		<td>
			<?php echo h($debt['Debt']['amount_total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Subscriber Amount'); ?></th>
		<td>
			<?php echo h($debt['Debt']['subscriber_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Should Amount'); ?></th>
		<td>
			<?php echo h($debt['Debt']['should_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Client Dni'); ?></th>
		<td>
			<?php echo h($debt['Debt']['client_dni']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Payment Date'); ?></th>
		<td>
			<?php echo h($debt['Debt']['payment_date']); ?>
			&nbsp;
		</td>
</tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

