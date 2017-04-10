<div class="companies form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agregue datos de la empresa'); ?></h1>
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
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp; Listar sus empresas'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Company', array('role' => 'form')); ?>

            				<div class="form-group">

										</div>
					<?php echo $this->Form->input('cuil', array('label' => 'cuil', 'class' => 'form-control','type'=>'text' ,'placeholder' => 'Cuil'));?>
					<?php echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control', 'placeholder' => 'Nombre de su empresa'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('label' => 'Dirección postal', 'class' => 'form-control', 'placeholder' => 'Dirección postal'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('label' => 'Teléfono', 'class' => 'form-control', 'placeholder' => 'Teléfono'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('logo', array('label' => 'logo', 'class' => 'form-control', 'placeholder' => 'URL de la imagen'));?>
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
