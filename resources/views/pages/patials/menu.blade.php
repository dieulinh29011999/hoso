<aside class="main-sidebar sidebar-dark-primary elevation-4" style="      background: rgba(0,0,0, .82);">
    <!-- Brand Logo -->
    <a href="{{route('homepage')}}" class="brand-link" style="background-color:#212121">
      <img src="\Datlichkham\public\logo\logohospital.PNG" alt="AdminLTE Logo" width="120px" height="65px"
           style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      @if(Auth::check())
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
          <ul>
            <li>

            </li>
          </ul>
        </div>
        
        
      </div> -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <img src="{{Auth::user()->avatar}}" class="img-circle elevation-2" width="50px" alt="User Image">
              <p>
              {{Auth::user()->hoten}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            
            </ul>
          </li>
        </ul>
        </nav>
        @endif
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item has-treeview {{Request::is('users*') || Request::is('/') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{Request::is('users*') || Request::is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{Request::is('users') || Request::is('/') ? 'active' : '' }}">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link {{Request::is('users/create') ? 'active' : '' }}">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('roles*')  ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{Request::is('roles*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link {{Request::is('roles') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.create')}}" class="nav-link {{Request::is('roles/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Roles</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('permissions.index')}} class="nav-link {{Request::is('permissions') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Permissions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('permissions.index')}}" class="nav-link {{Request::is('permissions/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('permissions.create')}}" class="nav-link {{Request::is('permissions/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Permissions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('chinhanh.index')}} class="nav-link {{Request::is('chinhanh') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chi Nhánh
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('chinhanh.index')}}" class="nav-link {{Request::is('chinhanh/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Chi Nhánh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('chinhanh.create')}}" class="nav-link {{Request::is('chinhanh/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Chi Nhánh</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('chucvu.index')}} class="nav-link {{Request::is('chucvu') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Chức Vụ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('chucvu.index')}}" class="nav-link {{Request::is('chucvu/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Chức Vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('chucvu.create')}}" class="nav-link {{Request::is('chucvu/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Chức Vụ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('vitri.index')}} class="nav-link {{Request::is('vitri') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Vị Trí
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vitri.index')}}" class="nav-link {{Request::is('vitri/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Vị Trí</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('vitri.create')}}" class="nav-link {{Request::is('vitri/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Vị Trí</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('phongban.index')}} class="nav-link {{Request::is('phongban') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Phòng Ban
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('phongban.index')}}" class="nav-link {{Request::is('phongban/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Phòng Ban</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('phongban.create')}}" class="nav-link {{Request::is('phongban/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Phòng Ban</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('loaiphong.index')}} class="nav-link {{Request::is('loaiphong') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Phòng Ban - Loại Hồ Sơ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('loaiphong.index')}}" class="nav-link {{Request::is('loaiphong/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Phòng Ban - Loại Hồ Sơ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('loaiphong.create')}}" class="nav-link {{Request::is('loaiphong/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Phòng Ban - Loại Hồ Sơ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('nhanvien.index')}} class="nav-link {{Request::is('nhanvien') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Nhân Viên
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('nhanvien.index')}}" class="nav-link {{Request::is('nhanvien/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Nhân Viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nhanvien.create')}}" class="nav-link {{Request::is('nhanvien/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Nhân Viên</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('loaihoso.index')}} class="nav-link {{Request::is('loaihoso') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Vị Trí
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('loaihoso.index')}}" class="nav-link {{Request::is('loaihoso/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Vị Trí</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('loaihoso.create')}}" class="nav-link {{Request::is('loaihoso/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Vị Trí</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>