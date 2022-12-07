<nav id="sidebar">

    <div class="navbar-nav theme-brand flex-row  text-center">
        <div class="nav-logo">
            <div class="nav-item theme-logo">
                <a href="/public-home">
                    <img src="/assets/page-image/page-icon.png"  alt="logo">
                </a>
            </div>
            <div class="nav-item theme-text">
                <a href="/public-home" class="nav-link"> Techno </a>
            </div>
        </div>

        <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
            </div>
        </div>
    </div>


    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu <?= ($current_page == '') ? 'active' : '' ?>">
            <a href="/public-home" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Home</span>
                </div>
            </a>
        </li>

        <li class="menu <?= ($current_page == '| Exhibition') ? 'active' : '' ?>">
            <a href="/exhibition" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span>Exhibition</span>
                </div>
            </a>
        </li>

        

        <li class="menu">
            <a href="#admin" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                    <span>Admin</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="admin" data-bs-parent="#accordionExample">
                <li>
                    <a href="/admin/category/list"> List Category </a>
                </li>
                <li>
                    <a href="/admin/category/create"> Create Category </a>
                </li>
                <li>
                    <a href="/admin/news/list"> List News </a>
                </li>
                <li>
                    <a href="/admin/news/create"> Create News </a>
                </li>
                <li>
                    <a href="/admin/period/list"> List Period </a>
                </li>
                <li>
                    <a href="/admin/period/create"> Create Period </a>
                </li>
                <li>
                    <a href="/admin/team/list"> List Team Leader </a>
                </li>
                <li>
                    <a href="/admin/team/create"> Create Team Leader </a>
                </li>
            </ul>
        </li>

        <li class="menu">
            <a href="#student" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                    <span>Student</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="student" data-bs-parent="#accordionExample">
                <li>
                    <a href="/student/profile/1"> Profile </a>
                </li>
                <li>
                    <a href="/student/category/list/1"> Category List </a>
                </li>
                <li>
                    <a href="/student/documents"> Upload Document </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<?php /**PATH D:\lama\Project\techno\development\resources\views/public/sidebar.blade.php ENDPATH**/ ?>