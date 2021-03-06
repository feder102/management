<div class="categories form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Category'); ?></h1>
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
							    							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Category.id')), array('escape' => false), __('Está seguro que quiere eliminar # %s?', $this->Form->value('Category.id'))); ?></li>
							    								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Categories'), array('action' => 'index'), array('escape' => false)); ?></li>
							    							</ul>
						</div>
					</div>
				</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
            			<?php echo $this->Form->create('Category', array('role' => 'form')); ?>

            				<div class="form-group">
					<?php echo $this->Form->input('id', array('label' => 'id', 'class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control', 'placeholder' => 'Nombre de la categoria'));?>
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
