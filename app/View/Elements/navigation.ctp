    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Inicio</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>', array('action' => 'index','controller'=>'clients'), array('title' => 'Clientes', 'escape' => false)); ?></li>
            <li>             <?php echo $this->Html->link('<span class="glyphicon glyphicon-usd"></span>', array('action' => 'index','controller'=>'sales'), array('title' => 'Ventas', 'escape' => false)); ?></li>
            <li>            <?php echo $this->Html->link('<span class="glyphicon glyphicon-tasks"></span>', array('action' => 'index','controller'=>'acount_sales'), array('title' => 'Cuentas clientes', 'escape' => false)); ?></li>
            <li><a href="">Devoluciones</a></li>
            <li><a href="garment">Prenda</a></li>
            <li><a href="">Cuentas</a></li>
            <li><a href="">Configuración</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
