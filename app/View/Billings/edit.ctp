<div class="billings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Billing'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Billing.number')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('Billing.number'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Billings'), array('action' => 'index'), array('escape' => false)); ?></li>
							    		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Sellers'), array('controller' => 'sellers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Seller'), array('controller' => 'sellers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Billing', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('number', array('label' => 'number', 'class' => 'form-control', 'placeholder' => 'Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Date_issued', array('label' => 'Date_issued', 'class' => 'form-control', 'placeholder' => 'Date Issued'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount_total', array('label' => 'amount_total', 'class' => 'form-control', 'placeholder' => 'Amount Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sale_number', array('label' => 'sale_number', 'class' => 'form-control', 'placeholder' => 'Sale Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('seller_id', array('label' => 'seller_id', 'class' => 'form-control', 'placeholder' => 'Seller Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cuil', array('label' => 'cuil', 'class' => 'form-control', 'placeholder' => 'Cuil'));?>
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
