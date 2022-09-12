<template>
        <div class="offcanvas offcanvas-start sidebar-offcanvas m-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
            <div class="offcanvas-header">
                <div class="d-flex">
                    <div style="margin-top: -4px; margin-right: 6px;"><img height="25" width="25" src="/assets/img/logo.png" alt="Logo"></div>
                    <div>Tenants System</div>
                </div>
                <div class="offcanvas-btn" data-bs-dismiss="offcanvas"><i class="bi bi-x"></i></div>
            </div>

            <hr class="horizontal light mt-0 mb-2">

            <div class="offcanvas-body">
                <nav class="nav nav-pills flex-column mb-auto" style="background: transparent;">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <span><i class="bi bi-grid-1x2-fill me-2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span><i class="bi bi-people me-2"></i></span>
                            <span>Families</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span><i class="bi bi-person me-2"></i></span>
                            <span>Singles</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span><i class="bi bi-building me-2"></i></span>
                            <span>Department</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span><i class="bi bi-joystick me-2"></i></span>
                            <span>Quaters</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span><i class="bi bi-box-arrow-left me-2"></i></span>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </nav>
            </div>
        </div>

</template>

<style>
    .sidebar-offcanvas {
        background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
        color: #fff;
        border-radius: 15px;
        width: 250px;
    }

    .offcanvas-btn {
        color: #fff;
        cursor: pointer;
        padding: 2px;
        border: 1px solid #fff
    }

    .offcanvas li a.active {
        color: #fff !important;
        background: #E53471 !important;
    }

    .offcanvas li a {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .offcanvas li a {
        color: #fff !important;
    }

    .offcanvas li a:hover {
        color: #fff !important;
        background: #4E4E52 !important;
    }

    .offcanvas  i.bi {
        font-size: 16px;
    }

</style>