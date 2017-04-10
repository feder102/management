<div class="itemAcounts index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Item Acounts'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Acount'), array('action' => 'add'), array('escape' => false)); ?></li>
						        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Acount Sales'), array('controller' => 'acount_sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Acount Sale'), array('controller' => 'acount_sales', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Garments'), array('controller' => 'garments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Garment'), array('controller' => 'garments', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('acount_sale_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('number'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('garment_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('cant'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($itemAcounts as $itemAcount): ?>
					<tr>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($itemAcount['AcountSale']['id'], array('controller' => 'acount_sales', 'action' => 'view', $itemAcount['AcountSale']['id'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($itemAcount['ItemAcount']['number']); ?>&nbsp;</td>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($itemAcount['Garment']['name'], array('controller' => 'garments', 'action' => 'view', $itemAcount['Garment']['id'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($itemAcount['ItemAcount']['cant']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($itemAcount['ItemAcount']['amount']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $itemAcount['ItemAcount']['acount_sale_id']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $itemAcount['ItemAcount']['acount_sale_id']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $itemAcount['ItemAcount']['acount_sale_id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $itemAcount['ItemAcount']['acount_sale_id'])); ?>
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
