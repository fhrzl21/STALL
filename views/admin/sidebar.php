        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('asset/'); ?>img/logo.png" height="50px" width="50px">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">STALL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php
            if ($this->session->userdata('level') == "1" || $this->session->userdata('level') == "2") {
            ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Watermark
                </div>

                <!-- Nav Item - Utilities Collapse Menu -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-database"></i>
                        <span>Cover</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_monitoring_cover') ?>">Monitoring Cover</a>
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_cover') ?>">List Cover</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-dice"></i>
                        <span>Master Dies</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_monitoring_dies') ?>">Monitoring Dies</a>
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_master_dice') ?>">List Dies</a>
                        </div>
                    </div>
                </li>

                <?php if ($this->session->userdata('username') == "wm" || $this->session->userdata('username') == "admin") { ?>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-database"></i>
                            <span>Cylinder</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url('Admin/list_monitoring_cylinder') ?>">Monitoring Cylinder</a>
                                <!-- <a class="collapse-item" href="<//?php echo base_url('Admin/list_cylinder') ?>">List Cylinder</a> -->
                            </div>
                        </div>
                    </li>
                <?php } ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pasang_cover') ?>">
                        <i class="fas fa-database"></i>
                        <span>Pemasangan cover</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pelepasan_cover') ?>">
                        <i class="fas fa-database"></i>
                        <span>Pelepasan cover</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pengiriman') ?>">
                        <i class="fas fa-truck"></i>
                        <span>Pengiriman</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_penerimaan_pm3_pm10') ?>">
                        <i class="fas fa-hands"></i>
                        <span>Penerimaan</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pemusnahan') ?>">
                        <i class="fas fa-dumpster-fire"></i>
                        <span>Pemusnahan</span></a>
                </li>
                <hr class="sidebar-divider">

            <?php
            }
            ?>
            <!-- Divider -->
            <?php
            if ($this->session->userdata('level') == "1" || $this->session->userdata('level') == "3") {
            ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Produksi
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-database"></i>
                        <span>Cylinder</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_monitoring_cylinder') ?>">Monitoring Cylinder</a>
                            <a class="collapse-item" href="<?php echo base_url('Admin/list_cylinder') ?>">List Cylinder</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_monitoring_validasi') ?>">
                        <i class="fas fa-check-circle"></i>
                        <span>Monitoring Validasi QC</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_penerimaan') ?>">
                        <i class="fas fa-hands"></i>
                        <span>Penerimaan</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pemasangan_cylinderMesin') ?>">
                        <i class="fas fa-wrench"></i>
                        <span>Install Cylinder Cover</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_pengiriman_PM3_PM10') ?>">
                        <i class="fas fa-truck"></i>
                        <span>Pengiriman</span></a>
                </li>
                <hr class="sidebar-divider">
            <?php
            }
            ?>

            <?php
            if ($this->session->userdata('level') == "1" || $this->session->userdata('level') == "4") {
            ?>
                <div class="sidebar-heading">
                    QC
                </div>
                <?php if ($this->session->userdata('username') == "qc3" || $this->session->userdata('username') == "admin") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Admin/list_validasi_pm3') ?>">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Validasi QC PM3</span></a>
                    </li>
                <?php
                }
                ?>

                <?php if ($this->session->userdata('username') == "qc10" || $this->session->userdata('username') == "admin") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Admin/list_validasi_pm10') ?>">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Validasi QC PM10</span></a>
                    </li>
                <?php
                }
                ?>
                <hr class="sidebar-divider">

            <?php
            }
            ?>

            <!-- Divider -->
            <?php
            if ($this->session->userdata('level') == "1") {
            ?>

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>


                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Admin/list_user') ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-cogs"></i>
                        <span>Settings</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

            <?php
            }
            ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->