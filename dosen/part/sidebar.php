    <div class="sidebar" data-color="purple" data-image="<?php echo $config['base_url'] ?>assets/media/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="media.php?action=dashboard" class="simple-text">
                    <i class="pe-7s-home"></i> Dosen
                </a>
            </div>

            <ul class="nav">
                <li <?= in_array($title, ['Dashboard']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Profile Dosen']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=profile-dosen">
                        <i class="pe-7s-user"></i>
                        <p>Profile Dosen</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Data Pengajuan Judul', 'Lihat Judul']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=data-pengajuan-judul">
                        <i class="pe-7s-server"></i>
                        <p>Data Pengajuan Judul</p>
                    </a>
                </li>


                <li class="active-pro">
                    <a href="conf/logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout System</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>