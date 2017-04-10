<div class="itemProviders index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Item Providers'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Provider'), array('action' => 'add'), array('escape' => false)); ?></li>
						        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Providers'), array('controller' => 'providers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Provider'), array('controller' => 'providers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Sales'), array('controller' => 'sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Sale'), array('controller' => 'sales', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('provider_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('cuit'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('payment_date'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('sale_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($itemProviders as $itemProvider): ?>
					<tr>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($itemProvider['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $itemProvider['Provider']['cuit'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($itemProvider['ItemProvider']['cuit']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($itemProvider['ItemProvider']['payment_date']); ?>&nbsp;</td>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($itemProvider['Sale']['number'], array('controller' => 'sales', 'action' => 'view', $itemProvider['Sale']['number'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($itemProvider['ItemProvider']['amount']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $itemProvider['ItemProvider']['provider_id']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $itemProvider['ItemProvider']['provider_id']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $itemProvider['ItemProvider']['provider_id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $itemProvider['ItemProvider']['provider_id'])); ?>
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
