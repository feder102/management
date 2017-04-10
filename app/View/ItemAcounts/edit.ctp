<div class="itemAcounts form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Item Acount'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ItemAcount.acount_sale_id')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('ItemAcount.acount_sale_id'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Item Acounts'), array('action' => 'index'), array('escape' => false)); ?></li>
							    		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Acount Sales'), array('controller' => 'acount_sales', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Acount Sale'), array('controller' => 'acount_sales', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Garments'), array('controller' => 'garments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Garment'), array('controller' => 'garments', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('ItemAcount', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('acount_sale_id', array('label' => 'acount_sale_id', 'class' => 'form-control', 'placeholder' => 'Acount Sale Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('number', array('label' => 'number', 'class' => 'form-control', 'placeholder' => 'Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('garment_id', array('label' => 'garment_id', 'class' => 'form-control', 'placeholder' => 'Garment Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cant', array('label' => 'cant', 'class' => 'form-control', 'placeholder' => 'Cant'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('amount', array('label' => 'amount', 'class' => 'form-control', 'placeholder' => 'Amount'));?>
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
