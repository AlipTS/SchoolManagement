<!------------------------------------------------------ SIDEBAR ------------------------------------------------------>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/index.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-city menu-icon"></i>
                    <span class="menu-title">Sekolah</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/buttons">Informasi Sekolah</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/buttons">Akreditasi</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/dropdowns">Daftar Pegawai</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/typography">Daftar Siswa</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/typography">Pengumuman</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                    <i class="mdi mdi-briefcase menu-icon"></i>
                    <span class="menu-title">Pegawai & Guru</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="/pages/forms/basic_elements">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/forms/basic_elements">Kelas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/forms/basic_elements">Mata Pelajaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/forms/basic_elements">Materi</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/forms/basic_elements">Jadwal Pelajaran</a></li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-face menu-icon"></i>
                <span class="menu-title">Siswa</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="$('#sub-sub-menu').toggleClass('show')">
                            <span class="menu-title">Ruang Belajar</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sub-sub-menu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/siswa/ruangbelajar/item-1">Materi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/siswa/ruangbelajar/item-2">Ujian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/siswa/ruangbelajar/item-2">Forum Diskusi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/siswa/ruangbelajar/item-2">Penilaian</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="/pages/siswa/ekstrakurikuler">Ekstrakurikuler</a></li>
                </ul>
            </div>
        </li>

        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                    <i class="mdi mdi-calendar-clock menu-icon"></i>
                    <span class="menu-title">Manajemen Waktu</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/pages/icons/mdi">Absensi</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/icons/mdi">Kegiatan Tambahan</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/icons/mdi">Cuti</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/icons/mdi">Overtime</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="mdi mdi-star menu-icon"></i>
                    <span class="menu-title">Sarana Prasarana</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/login">Transportasi</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/login">Daftar Ruangan</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/register">Perpustakaan </a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/register">Laboratorium </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                    <i class="mdi mdi-cash-multiple menu-icon"></i>
                    <span class="menu-title">Keuangan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/error-404"> Pembayaran Iuran Sekolah </a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/error-500"> Penggajian </a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/samples/error-500"> Usaha Sekolah </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                    <i class="mdi mdi-archive menu-icon"></i>
                    <span class="menu-title">Inventaris</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/pages/inventaris/daftarInventaris">Daftar Inventaris</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/inventaris/peminjamanInventaris">Peminjaman Inventaris</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/documentation/documentation">
                    <i class="mdi mdi-human-male-female menu-icon"></i>
                    <span class="menu-title">BP/BK</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/documentation/documentation">
                    <i class="mdi mdi-school menu-icon"></i>
                    <span class="menu-title">Ruang Alumni</span>
                </a>
            </li>

        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="/pages/documentation/documentation">
                <i class="mdi mdi-comment-multiple-outline menu-icon"></i>
                <span class="menu-title">Ruang Diskusi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pages/documentation/documentation">
                <i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Pengaturan</span>
            </a>
        </li>
    </ul>
</nav>