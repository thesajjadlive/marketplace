<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 order-sm-1 order-2 primary-menu-tm">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/img/logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index-2.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a class="dropdown-item" href="home.html">Home (Without Login)</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-item" href="index-2.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="financial-dashboard.html">Financial Dashboard</a></li>
                            <li><a class="dropdown-item" href="chatting-page.html">Live Chat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Hire Freelancer<span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="post-project.html">Post a Project</a>
                            </li>
                            <li><a class="dropdown-item" href="find-freelancer.html">Find Freelancer</a></li>
                            <li><a class="dropdown-item" href="chatting-page.html">Live Chat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="job-search.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Work</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a class="dropdown-item" href="job-search.html">Browse Projects</a></li>
                            <li><a class="dropdown-item" href="bidding-page.html">Project Bidding</a></li>
                            <li><a class="dropdown-item" href="project-awarded.html">Project Awarded</a></li>
                            <li><a class="dropdown-item" href="project-in-progress.html">Project In Progress</a></li>
                            <li><a class="dropdown-item" href="milestone-request.html">Milestone Request</a></li>
                            <li><a class="dropdown-item" href="freelancer-profile-portfolio.html">Freelancer Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog-page-right-sidebar.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a class="dropdown-item" href="blog-page-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="blog-page-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a class="dropdown-item" href="single-post-left-sidebar.html">Single Post Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="single-post-right-sidebar.html">Single Post Right Sidebar</a></li>

                        </ul>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="&#xed60; &#xeb25;  Find Freelancer" aria-label="Search" data-toggle="modal" data-target="#search-freelancer">
                </form>
            </div>
        </nav>
    </div>


    <div class="col-sm-12 col-md-4 col-lg-4 order-sm-2 order-1 header-notification">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav ml-auto ymp-right">
                <li class="nav-item menu-button">
                    <a class="nav-link" href="post-project.html">Post A Project</a>
                </li>
                <li class="nav-item menu-bar">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#sign-up-page">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#sign-in-page">Sign Up</a>
                </li>
            </ul>
        </nav>
    </div>



   {{-- <div class="col-sm-12 col-md-4 col-lg-4 order-sm-2 order-1 header-notification">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav ml-auto ymp-right-menu">
                <li class="nav-item">
                    <a href="financial-dashboard.html" class="nav-link usd">USD $350 <span>32</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon heart" href="#" data-toggle="modal" data-target="#followed"><i class="far fa-heart"></i><span>1</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon bell" href="#" data-toggle="modal" data-target="#notification"><i class="far fa-bell"></i><span>1</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon envolope" href="#" data-toggle="modal" data-target="#unread-messages"><i class="far fa-envelope"></i><span>1</span></a>
                </li>
                <li class="menu-bar dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/profile-img.jpg" alt="">
                        <span>Hi Sasha</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-item" href="freelancer-profile-portfolio.html">My Profile</a></li>
                        <li><a class="dropdown-item" href="chatting-page.html">Message</a></li>
                        <li><a class="dropdown-item" href="financial-dashboard.html">Financial Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>--}}


</div>