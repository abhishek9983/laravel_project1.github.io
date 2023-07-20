

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Abhishek singh</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('/deshbord')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/formshow')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listshow')}}" class="dropdown-item">List</a>
                            <a href="{{url('/Editshow')}}" class="dropdown-item">Edit</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Bainner</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/formbanner')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listbanner')}}" class="dropdown-item">List</a>
                            <a href="{{url('//editbannerlist/{id}')}}" class="dropdown-item">Edit</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>CMS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('formcms.index')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listcms')}}" class="dropdown-item">List</a>
                            <a href="{{url('/editcmslist')}}" class="dropdown-item">Edit</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Courses</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/formCourses')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listCourses')}}" class="dropdown-item">List</a>
                            
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Trainers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/formTrainers')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listTrainers')}}" class="dropdown-item">List</a>
                            
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Event</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/formEvents')}}" class="dropdown-item">Form</a>
                            <a href="{{url('/listEvents')}}" class="dropdown-item">List</a>
                            
                        </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                    
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->