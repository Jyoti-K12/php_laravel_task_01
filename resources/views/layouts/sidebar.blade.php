<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('languages.list') }}"  class="nav-link">
                        <i class="fas fa-language nav-icon"></i>
                        <p>
                            Languages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('classes.list') }}"  class="nav-link">
                        <i class="fas fa-chalkboard nav-icon"></i>
                        <p>
                            Classes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subjects.list') }}"  class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>
                            Subjects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('students.list') }}" class="nav-link">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>
                            Students
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('teachers.list') }}" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                            Teachers
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard  nav-icon"></i>
                        <p>
                            Classes
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>