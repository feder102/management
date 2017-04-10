<div class="debts index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Debts'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Debt'), array('action' => 'add'), array('escape' => false)); ?></li>
						        							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
            <div class="table-responsive">
			    <table id="listado" class="dynamicTable table table-striped">
				    <thead>
					    <tr>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount_total'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('subscriber_amount'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('should_amount'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('client_dni'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('payment_date'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($debts as $debt): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($debt['Debt']['amount_total']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($debt['Debt']['subscriber_amount']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($debt['Debt']['should_amount']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($debt['Debt']['client_dni']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($debt['Debt']['payment_date']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $debt['Debt']['client_dni']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $debt['Debt']['client_dni']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $debt['Debt']['client_dni']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $debt['Debt']['client_dni'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				    </tbody>
			    </table>
            </div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->
</div><!-- end containing of content -->

<script>
    $(document).ready(function() {
        $('#listado').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>
