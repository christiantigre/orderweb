<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                @if( (Auth::user()->perfil) == "")
                <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                @else
                <img src="{{  Auth::user()->perfil }}" class="img-circle" alt="User Image" />
                @endif
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('admin/home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <!-- Item usuarios -->
            <li><a href="{{ url('admin/users') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.users') }}</span></a></li>
            <!-- Item Products -->
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.products') }}</span></a></li>
            <!-- Item subList Config -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.config') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/config') }}">{{ trans('adminlte_lang::message.config') }}</a></li>
                    <li><a href="{{ Route('Categories.index') }}">{{ trans('adminlte_lang::message.category') }}</a></li>
                    <li><a href="{{ Route('subcategories.index') }}">{{ trans('adminlte_lang::message.subcategory') }}</a></li>
                    <li><a href="{{ Route('status.index') }}">{{ trans('adminlte_lang::message.status') }}</a></li>

                    <li class="treeview">
                      <a href="#">
                          <i class="fa fa-share"></i> <span>Localidades</span>
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                      <ul class="treeview-menu">
                          <li><a href="{{ Route('countries.index') }}">{{ trans('adminlte_lang::message.country') }}</a></li>
                          <li><a href="{{ Route('provinces.index') }}">{{ trans('adminlte_lang::message.province') }}</a></li>
                          <li><a href="{{ Route('cantones.index') }}">{{ trans('adminlte_lang::message.city') }}</a></li>
                          <li><a href="{{ Route('parroquias.index') }}">{{ trans('adminlte_lang::message.parroq') }}</a></li>
                      </ul>
                  </li>







                  
              </ul>
          </li>

      </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
