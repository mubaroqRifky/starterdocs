<div class="sidebar-inner">
    <div class="sidebar-logo">
        <i class="bi bi-amd"></i>
        <h1>My Starter</h1>
    </div>

    <ul class="sidebar-lists custom-scroll">
        <span>
           <i class="bi bi-grid"></i>
            Main
            <i class="flex-grow-1 border-bottom" style="transform: translateY(-50%)"></i>
        </span>
        <li class='menu-list'>
            <a href="{{ route('home') }}">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class='menu-list'>
            <a href="{{ route('get-started') }}">
                <i class="bi bi-rocket-takeoff"></i>
                <span>Getting Started</span>
            </a>
        </li>

        <li class='menu-list'>
            <a href="#">
                <i class="bi bi-code-slash"></i>
                <span>Code Crumbs</span>
            </a>
        </li>

        <li class='menu-list'>
            <a data-bs-toggle="collapse" class="collapsed" href="#docs_menu">
                <i class="bi bi-journal-code"></i>
                <span class="flex-grow-1">Docs</span>
                <i style="font-size: .55rem">►</i>
            </a>
        </li>

        <div class="collapse" id="docs_menu">
            <ul class="d-flex flex-column gap-2" >
                <li class='menu-list'>
                    <a href="#">
                        <i class="bi bi-filetype-js"></i>
                        <span>Vue</span>
                    </a>
                </li>
                <li class='menu-list'>
                    <a href="#">
                        <i class="bi bi-filetype-php"></i>
                        <span>Laravel</span>
                    </a>
                </li>
                <li class='menu-list'>
                    <a href="#">
                       <i class="bi bi-filetype-css"></i>
                        <span>Tailwind</span>
                    </a>
                </li>
                <li class='menu-list'>
                    <a href="#">
                       <i class="bi bi-filetype-css"></i>
                        <span>Bootsrap</span>
                    </a>
                </li>
                <li class='menu-list'>
                    <a href="#">
                        <i class="bi bi-git"></i>
                        <span>Git</span>
                    </a>
                </li>
            </ul>
        </div>

        <span>
           <i class="bi bi-grid"></i>
            Component
            <i class="flex-grow-1 border-bottom" style="transform: translateY(-50%)"></i>
        </span>
        <div class="d-grid gap-2">
            <li class='menu-list'>
                <a href="{{ route('forms.index') }}">
                    <i class="bi bi-ui-checks"></i>
                    <span>Forms</span>
                </a>
            </li>
            <li class='menu-list'>
                <a href="{{ route('tables.index') }}">
                    <i class="bi bi-table"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class='menu-list'>
                <a href="#">
                    <i class="bi bi-menu-button"></i>
                    <span>Buttons</span>
                </a>
            </li>
            <li class='menu-list'>
                <a href="#">
                    <i class="bi bi-pip"></i>
                    <span>Modals</span>
                </a>
            </li>
            <li class='menu-list'>
                <a href="#">
                    <i class="bi bi-layout-sidebar"></i>
                    <span>Sidebars</span>
                </a>
            </li>
        </div>

        <span>
           <i class="bi bi-grid"></i>
            Master
            <i class="flex-grow-1 border-bottom" style="transform: translateY(-50%)"></i>
        </span>
        <div class="d-grid gap-2">
            <li class='menu-list'>
                <a href="{{ route('users.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class='menu-list'>
                <a href="{{ route('roles.index') }}">
                    <i class="bi bi-award"></i>
                    <span>Roles</span>
                </a>
            </li>
        </div>

        <span>
           <i class="bi bi-grid"></i>
            Setting
            <i class="flex-grow-1 border-bottom" style="transform: translateY(-50%)"></i>
        </span>
        <div class="d-grid gap-2">
            <li class='menu-list'>
                <a data-bs-toggle="collapse" class="collapsed" href="#collapseExample1">
                    <i class="bi bi-card-list"></i>
                    <span class="flex-grow-1">List Parent 1</span>
                    <i style="font-size: .55rem">►</i>
                </a>
            </li>

            <div class="collapse" id="collapseExample1">
                <ul class="d-flex flex-column gap-2" >
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 1</span>
                        </a>
                    </li>
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 1</span>
                        </a>
                    </li>
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="d-grid gap-2">
            <li class='menu-list'> 
                <a data-bs-toggle="collapse" class="collapsed" href="#collapseExample3">
                    <i class="bi bi-card-list"></i>
                    <span class="flex-grow-1">List Parent 2</span>
                    <i style="font-size: .55rem">►</i>
                </a> 
            </li>
`
            <div class="collapse" id="collapseExample3">
                <ul class="d-flex flex-column gap-2" >
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 2</span>
                        </a>
                    </li>
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 2</span>
                        </a>
                    </li>
                    <li class='menu-list'>
                        <a href="#">
                            <i class="bi bi-view-list"></i>
                            <span>List Child 2</span>
                        </a>
                    </li>
                </ul>
            </div> 
        </div>
    </ul>
</div> 