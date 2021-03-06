    <div class="sidebar" data-color="purple" data-image="<?php echo $config['base_url'] ?>assets/media/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="media.php?action=dashboard" class="simple-text">
                    <i class="pe-7s-home"></i> Mahasiswa
                </a>
            </div>

            <ul class="nav">
                <li <?= in_array($title, ['Dashboard']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Profile Mahasiswa']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=profile-mahasiswa">
                        <i class="pe-7s-user"></i>
                        <p>Profile Mahasiswa</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Judul Skripsi', 'Edit Judul 1', 'Edit Judul 2', 'Ajukan Judul']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=judul-skripsi">
                        <i class="pe-7s-note2"></i>
                        <p>Judul Saya</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Dosen Pembimbing']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=dosen-pembimbing">
                        <i class="pe-7s-users"></i>
                        <p>Daftar Pembimbing </p>
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