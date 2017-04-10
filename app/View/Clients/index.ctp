<div class="clients index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Clients'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
<?php //pr($clients) ; ?>


	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Client'), array('action' => 'add'), array('escape' => false)); ?></li>
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
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('dni'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('name'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('lastname'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('address'); ?></th>
			                			                    <th style="text-align: center" nowrap><?php echo $this->Paginator->sort('phone'); ?></th>
			                			                <th style="text-align: center" nowrap class="no_sorting sorting actions">Acciones</th>
					    </tr>
				    </thead>
				    <tbody>
			            	<?php foreach ($clients as $client): ?>
					<tr>
						<td style="text-align: center" nowrap><?php echo h($client['Client']['dni']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($client['Client']['name']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($client['Client']['lastname']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($client['Client']['address']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
						<td style="text-align: center" nowrap class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $client['Client']['dni']), array('title' => 'Ver', 'escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $client['Client']['dni']), array('title' => 'Editar', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $client['Client']['dni']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', $client['Client']['dni'])); ?>
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
