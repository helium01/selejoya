<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li class="active"><a href="{{ route('categories') }}"><i class="fa fa-link"></i> <span>Category</span></a></li>
            <li class="active"><a href="{{ route('products.index') }}"><i class="fa fa-link"></i> <span>Product</span></a></li>
            <li class="active"><a href="{{ route('customers') }}"><i class="fa fa-link"></i> <span>Customer</span></a></li>
            <li class="active"><a href="{{ route('sales') }}"><i class="fa fa-link"></i> <span>Sales</span></a></li>
            <li class="active"><a href="{{ route('suppliers') }}"><i class="fa fa-link"></i> <span>Supplier</span></a></li>
            <li class="active"><a href="{{ route('productsOut') }}"><i class="fa fa-link"></i> <span>Product Out</span></a></li>
            <li class="active"><a href="{{ route('productsIn') }}"><i class="fa fa-link"></i> <span>Product In</span></a></li>







        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
