<div class="garments index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Garments'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Garment'), array('action' => 'add'), array('escape' => false)); ?></li>
						        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Colors'), array('controller' => 'colors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Color'), array('controller' => 'colors', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Sizes'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Size'), array('controller' => 'sizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Item Acounts'), array('controller' => 'item_acounts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Acount'), array('controller' => 'item_acounts', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('color_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('size_id'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('name'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount_cost'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('amount_unit'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('stock'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($garments as $garment): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($garment['Garment']['id']); ?>&nbsp;</td>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($garment['Color']['name'], array('controller' => 'colors', 'action' => 'view', $garment['Color']['id'])); ?>
		</td>
								<td style="text-align: center" nowrap>
			<?php echo $this->Html->link($garment['Size']['name'], array('controller' => 'sizes', 'action' => 'view', $garment['Size']['id'])); ?>
		</td>
						<td style="text-align: center" nowrap><?php echo h($garment['Garment']['name']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($garment['Garment']['amount_cost']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($garment['Garment']['amount_unit']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($garment['Garment']['stock']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $garment['Garment']['id']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $garment['Garment']['id']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $garment['Garment']['id']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $garment['Garment']['id'])); ?>
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
