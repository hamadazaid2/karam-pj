<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('admin-styles/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Hamada Zaid</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            <a href="{{ route('site.config.show') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Site
                Configuration</a>
            <a href="{{ route('site.header.show') }}" class="nav-item nav-link"><i
                    class="fa fa-keyboard me-2"></i>Header Section</a>
            {{-- <a href="" class="nav-item nav-link"><i class="fa fa-table me-2"></i>About
                Section</a> --}}
                 <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>About Section</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('site.about.title.show') }}" class="dropdown-item">Update Titles</a>
                    <a href="{{ route('site.about.divs.show') }}" class="dropdown-item">Divs</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Feature Section</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('site.feature.titles.show') }}" class="dropdown-item">Update Titles</a>
                    <a href="{{ route('site.feature.divs.show') }}" class="dropdown-item">Divs</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>How To Order Section</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('site.howToOrder.titles.show') }}" class="dropdown-item">Update Titles</a>
                    <a href="{{ route('site.how-to-order.divs.show') }}" class="dropdown-item">Divs</a>
                </div>
            </div>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Order Section</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Customer Section</a>
            <a href="{{ route('contact.us.messages.show') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Contact Messages</a>
        </div>
    </nav>
</div>
