<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Personas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL::action('PersonaController@index')}}"><i class="fa fa-circle-o"></i> Personas</a></li>
                <li><a href="{{URL::action('RolController@index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="{{URL::action('BotonController@index')}}"><i class="fa fa-circle-o"></i> Alarmas</a></li>    
            <li class="treeview"><a href="{{URL::action('EmergenciaController@index')}}"><i class="fa fa-circle-o"></i> Emergencias</a></li>
            <li class="treeview"><a href="{{URL::action('BitacoraController@index')}}"><i class="fa fa-circle-o"></i> Bitacoras</a></li>
            <li class="treeview"><a href="{{URL::action('MensajeController@index')}}"><i class="fa fa-circle-o"></i> Mensajes</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li class="treeview"><a href="{{URL::action('UserController@index')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->