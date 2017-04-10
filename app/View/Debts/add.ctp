<div class="debts form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Debt'); ?></h1>
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
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Debts'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Debt', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('amount_total', array('label' => 'amount_total', 'class' => 'form-control', 'placeholder' => 'Amount Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('subscriber_amount', array('label' => 'subscriber_amount', 'class' => 'form-control', 'placeholder' => 'Subscriber Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('should_amount', array('label' => 'should_amount', 'class' => 'form-control', 'placeholder' => 'Should Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('payment_date', array('label' => 'payment_date', 'class' => 'form-control', 'placeholder' => 'Payment Date'));?>
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
