<div class="wrapper">
        <!-- Sidebar position-fixed  -->
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <h3>Field Service</h3>
                <strong>FS</strong>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-justify"></i>
                    <span></span>
                </button>
            </div>

            <ul class="list-unstyled sidebar-body">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        SlideDown
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/personal/buscar">
                        <i class="fas fa-address-book"></i>
                        <span>Personal</span>
                        <strong>Personal</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-adjust"></i>
                        <span>Proyectos</span>
                        <strong>Proyectos</strong>                        
                    </a>
                </li>
                <li>
                    <a href="/certificaciones">
                        <i class="fas fa-book-open"></i>
                      <span>Certificaciones</span>
                      <strong>Cert</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                      <span>CRUD</span>
                      <strong>CRUD</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                      <span>Menu</span>
                      <strong>Menu Add</strong>
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Page Content  -->
        <div id="content">
           @isset($inicio)
               <h1>bienvenido</h1>
           @endisset
           @yield('contenido')
         </div>
        </div>

    
    