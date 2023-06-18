        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                    <a href="/" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item {{ Request::is('product') ? 'active' : '' }}">
                                    <a href="/product" class="nav-link">Product</a>
                                </li>
                                <li class="nav-item {{ Request::is('program') ? 'active' : '' }}">
                                    <a href="/program" class="nav-link">Program</a>
                                </li>
                                <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
                                    <a href="/news" class="nav-link">News</a>
                                </li>
                                <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                                    <a href="/about-us" class="nav-link">About</a>
                                </li> 
                                <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                                    <a href="/contact-us" class="nav-link">Contact</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>