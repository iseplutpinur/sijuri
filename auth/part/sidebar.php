    <div class="sidebar" data-color="purple" data-image="<?php echo $config['base_url'] ?>assets/media/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="media.php?ref=dashboard" class="simple-text">
                    <i class="pe-7s-home"></i> Administrator
                </a>
            </div>

            <ul class="nav">
                <li <?= in_array($title, ['Dashboard']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?= in_array($title, ['User Profile']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=profile">
                        <i class="pe-7s-user"></i>
                        <p>Profile User</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Data Mahasiswa', 'Tambah Mahasiswa', 'Edit Mahasiswa', 'Hapus Mahasiswa']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=data-mahasiswa">
                        <i class="pe-7s-study"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>
                </li>
                <li <?= in_array($title, ['Data Dosen', 'Tambah Dosen', 'Edit Dosen', 'Hapus Dosen']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=data-dosen">
                        <i class="pe-7s-study"></i>
                        <p>Data Dosen</p>
                    </a>
                </li>

                <li <?= in_array($title, ['Fakultas', 'Tambah Fakultas', 'Edit Fakultas']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=fakultas">
                        <i class="pe-7s-study"></i>
                        <p>Fakultas</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Jurusan', 'Tambah Jurusan', 'Edit Jurusan']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=jurusan">
                        <i class="pe-7s-study"></i>
                        <p>Jurusan</p>
                    </a>
                </li>
                <li <?= in_array($title, ['dosen-pembimbing']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=dosen-pembimbing">
                        <i class="pe-7s-study"></i>
                        <p>Dosen Pembimbing</p>
                    </a>
                </li>
                <li <?= in_array($title, ['Informasi']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=informasi">
                        <i class="pe-7s-note"></i>
                        <p>Informasi</p>
                    </a>
                </li>
                <li <?= in_array($title, ['pengaturan']) ? 'class="active"' : '' ?>>
                    <a href="media.php?action=pengaturan">
                        <i class="pe-7s-tools"></i>
                        <p>Pengaturan</p>
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