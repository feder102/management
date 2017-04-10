<div class="garments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Garment'); ?></h1>
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
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Garments'), array('action' => 'index'), array('escape' => false)); ?></li>
							    		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Colors'), array('controller' => 'colors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Color'), array('controller' => 'colors', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Sizes'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Size'), array('controller' => 'sizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Item Acounts'), array('controller' => 'item_acounts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Item Acount'), array('controller' => 'item_acounts', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Garment', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('color_id', array('label' => 'color_id', 'class' => 'form-control', 'placeholder' => 'Color Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('size_id', array('label' => 'size_id', 'class' => 'form-control', 'placeholder' => 'Size Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('label' => 'name', 'class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount_cost', array('label' => 'amount_cost', 'class' => 'form-control', 'placeholder' => 'Amount Cost'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount_unit', array('label' => 'amount_unit', 'class' => 'form-control', 'placeholder' => 'Amount Unit'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stock', array('label' => 'stock', 'class' => 'form-control', 'placeholder' => 'Stock'));?>
				</div>
            				<div class="form-group">
					<?php echo $this->Form->submit(__('Guardar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

<script type="text/javascript">
    $("#fecha").datepicker({
        format: "dd/mm/yyyy",
        language: "es"
    });
    
    $(".clockpicker").clockpicker({
        autoclose: true
    });
</script>
