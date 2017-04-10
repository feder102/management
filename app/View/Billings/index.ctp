<div class="billings index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Billings'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Billing'), array('action' => 'add'), array('escape' => false)); ?></li>
						        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Sellers'), array('controller' => 'sellers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Seller'), array('controller' => 'sellers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('number'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('Date_issued'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount_total'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('sale_number'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('seller_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('cuil'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($billings as $billing): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($billing['Billing']['number']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($billing['Billing']['Date_issued']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($billing['Billing']['amount_total']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($billing['Billing']['sale_number']); ?>&nbsp;</td>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($billing['Seller']['id'], array('controller' => 'sellers', 'action' => 'view', $billing['Seller']['id'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($billing['Billing']['cuil']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $billing['Billing']['number']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $billing['Billing']['number']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $billing['Billing']['number']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $billing['Billing']['number'])); ?>
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
