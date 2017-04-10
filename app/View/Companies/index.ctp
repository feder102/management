<div class="companies index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Companies'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Company'), array('action' => 'add'), array('escape' => false)); ?></li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('cuil'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('name'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('address'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('phone'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('logo'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($companies as $company): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($company['Company']['cuil']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($company['Company']['name']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($company['Company']['address']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($company['Company']['phone']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($company['Company']['logo']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $company['Company']['cuil']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $company['Company']['cuil']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $company['Company']['cuil']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $company['Company']['cuil'])); ?>
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
