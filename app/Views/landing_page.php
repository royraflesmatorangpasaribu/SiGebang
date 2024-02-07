<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGEBANG - Sistem Informasi Gebang</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href=<?=base_url("assets/css/styles.css")?>>
    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">
    <!-- Blue navbar at the top (fixed) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <span style="background: linear-gradient(135deg, #FF0000, #FFFFFF); -webkit-background-clip: text; color: transparent; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">SIGEBANG</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home" style="color: black">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#modul" style="color: black">Tentang Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#solve" style="color: black">Visi Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="color: black">Data Penduduk</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Rest of your content -->

    <!-- Image slider in the "home" section -->
    <section id="home">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src=<?=base_url("assets/images/1.jpg")?> class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src=<?=base_url("assets/images/2.png")?> class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src=<?=base_url("assets/images/3.jpg")?> class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Add a section for the "Modul" page -->
    <section id="modul">
        <div class="container">
            <br><br>
            <h2 class="text-center">Tentang Desa</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/KadesGebang.jpg" class="img-fluid rounded-circle" alt="My Photo" style="height: 250px; width: 250px; border-radius: 50%; object-fit: cover; object-position: 0 -8px;"  border="2px" >
                </div>
                <br><br>
                <div class="col-md-6">
                    <P align="justify">Desa Gebang Desa Gebang Kecamatan Teluk Pandan Kabupaten Pesawaran Lampung dulu dikenal sebagai bagian dari Kecamatan Padang Cermin Desa Gebang sangat terkenal dengan obyek wisata dan konservasi bakau yang luas. Kondisi demikain ditunjang oleh ketersediaan track pengamatan di sepanjang pantai dan bahkan masuk ke area hutan bakau, menjadikan daerah ini menjadi salah satu destinasi wisata alam/edukasi penting di provinsi lampung.WIsata adalah tentang membangun hal yang unik, berbeda, dan indah. Seluruhnya ada di desa ini wisata yang unik, berbeda dengan banyak obyek wisata lain dan juga sangat indah. Laut yang tenang, hutan bakau tersusun rapi, track pengamatan panjang dan pengelolaan wisata yang profesional menjadi salah satu keunggulan desa ini.</P>
                </div>
                <br>
                <div class="col-md-6">
                    <h3>Kepala Desa Gebang</h3>
                        <li>Nama    : </li>
                        <li>Periode : </li>    
                    </ul>
                </div>
            </div>
            <br><br><br>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/4.jpg" class="card-img-top" alt="Material 1">
                        <div class="card-body">
                            <h5 class="card-title">Berita 1</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/5.jpg" class="card-img-top" alt="Material 2">
                        <div class="card-body">
                            <h5 class="card-title">Berita 2</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/dutapancasila.jpg" class="card-img-top" alt="Material 3">
                        <div class="card-body">
                            <h5 class="card-title">Berita 3</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                           
                        </div>
                    </div>
                </div>
                <!-- Add more cards for materials here -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/7.jpg" class="card-img-top" alt="Material 4">
                        <div class="card-body">
                            <h5 class="card-title">Berita 4</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/8.jpg" class="card-img-top" alt="Material 5">
                        <div class="card-body">
                            <h5 class="card-title">Berita 5</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="assets/images/9.jpg" class="card-img-top" alt="Material 6">
                        <div class="card-body">
                            <h5 class="card-title">Berita 6</h5>
                            <p class="card-text" style="text-align: justify;">Gebang</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hoax -->
    <div class="modal fade" id="hoaxModal" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail Berita 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;">Gebang</p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- hoax sila 1-->
    <div class="modal fade" id="hoaxsila1" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail HOAX pada Sila ke-1 Pancasila</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;">Sejumlah akun Facebook melalui unggahannya mengklaim  sila pertama Pancasila diubah dari "Ketuhanan yang Maha Esa" menjadi "Ketuhanan yang Berkebudayaan". Salah satu akun turut mengunggah foto siaran program Kabar Petang di stasiun televisi TvOne. Topik yang dibahas dalam siaran itu adalah "RUU Pancasila Buka Pintu Komunisme?". Dikutip dari cekfakta.tempo.co, klaim bahwa di RUU HIP sila pertama Pancasila diubah menjadi "Ketuhanan yang Berkebudayaan", menyesatkan. Frasa itu memang disebutkan sebagai ciri pokok Pancasila dalam Pasal 7 RUU HIP. Namun, dalam RUU tersebut tidak tercantum narasi bahwa sila pertama Pancasila diubah dari sebelumnya berbunyi “Ketuhanan Yang Maha Esa” menjadi "Ketuhanan yang Berkebudayaan". TvOne dalam siaran program dengan narasumber anggota Komisi III DPR dari Fraksi PDIP, Masinton Pasaribu, pada tanggal 13 Juni 2020 turut menyinggung frasa "Ketuhanan yang Berkebudayaan" yang tertera dalam Pasal 7 RUU HIP. Frasa ini menuai kontroversi karena dianggap mereduksi arti ketuhanan. Namun hal itu dibantah Masinton. Menurutnya, frasa itu muncul dalam pidato Bung Karno di Sidang BPUPKI pada 1 Juni 1945.</p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- duta pancasila -->
    <div class="modal fade" id="dutapancasila" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail Duta Pancasila</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;">Beredar sebuah informasi yang menyebut YouTuber Muhammad Kece didapuk menjadi Duta Pancasila. Setelah dilakukan penelusuran, isu bahwa Youtuber Muhammad Kece didapuk menjadi Duta Pancasila adalah salah. Faktanya, Badan Pembinaan Ideologi Pancasila (BPIP) telah memberikan klarifikasi. Pelaksana Tugas Sekretaris Utama BPIP Karjono menegaskan justru perilaku Muhammad Kece tidak sejalan dengan nilai-nilai Pancasila.

                    </p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- pengguna internet -->
    <div class="modal fade" id="penggunainternet" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail Penggunaan Internet berdasarkan Pekerejaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;">
                        ss
                    </p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- hoax pemecah -->
    <div class="modal fade" id="hoaxpemecah" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail Hoax pemecah persatuan bangsa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;"> Pengaruh berita hoax terhadap bangsa Indonesia sangat lah berbahaya karena dapat memecah belah kesatuan dan persatuan bangsa Indonesia. Karna masyarakat Indonesia masih terbiasa percaya terhadap berita yang belum jelas sumbernya berasal, masyarakat seringkali terbawa berita hoax juga karna tidak membaca keseluruhan isi di dalam berita, hal ini sangat berbahaya bagi persatuan dan kesatuan bangsa Indonesia karna masyarakat jadi mudah terprovokasi setelah melihat berita yang belum jelas sumbernya yang mengakibatkan kesalah pahaman antar pihak. Dari berbagai sumber ini bisa disimpulkan bahwa masyarakat Indonesia masih rentan terhadap berita palsu dengan adanya dukungan tentang isu yang bercerita dari mulut ke mulut tentang isu yang tidak ada sumbernya. Berita hoax juga mampu memicu terjadinya konflik terhadap suku, ras, agama, dan politik di Indonesia. Ini harus segara di atasi oleh masyarakat itu sendiri agar tidak mudah terpengaruh oleh berita hoax. Hoax menimbukan kekacauan di masyarakat dan dapat memperuntuh masyarakat di Indonesia solusi untuk mengatasi berita hoax dengan cara literasi media sosial dan daya pikir masyarakat untuk teliti dalam membaca berita di internet agar tidak mudah terprovokasi.

                    </p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- temuan hoax -->
    <div class="modal fade" id="temuanhoax" tabindex="-1" role="dialog" aria-labelledby="hoaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan class modal-dialog-centered dan modal-lg -->
            <div class="modal-content" style="background: rgb(255, 255, 255);"> <!-- Tambahkan background transparan -->
                <div class="modal-header">
                    <h5 class="modal-title" id="hoaxModalLabel">Detail Temuan isu Hoax</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal dengan informasi lebih detail -->
                    <p style="text-align: justify;"> Jakarta (ANTARA) - Kementerian Komunikasi dan Informatika (Kemenkominfo) mengungkapkan selama periode Januari-Mei 2023 pihaknya menemukan sebanyak 710 konten hoaks yang beredar di ruang digital Indonesia. "Berdasarkan hasil penelusuran Tim AIS Kementerian Kominfo, jumlah total konten hoaks, disinformasi dan misinformasi pada periode Januari hingga Mei 2023 cenderung meningkat jika dibandingkan dengan periode yang sama pada 2022," ungkap Kemenkominfo dalam siaran persnya yang diterima di Jakarta, Selasa. Pada periode yang sama di 2022 konten hoaks yang teridentifikasi oleh Kemkominfo tercatat berjumlah 675 temuan. Berdasarkan dari data tersebut terdapat peningkatan temuan sebanyak 35 konten hoaks untuk periode yang sama di 2023. Untuk periode Januari-Mei 2023, Kemenkominfo mencatat hoaks yang mendominasi saat ini berkaitan dengan pemerintahan seperti pencatutan nama pejabat publik serta penipuan.

                    </p>
                    <!-- Tambahkan konten tambahan sesuai kebutuhan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <section id="solve">
        <div class="container">
            <h2 class="text-center">Visi Misi</h2>
            <div class="toggle-switch">
                <!-- <button id="powerpoint-button" class="active">Power Point</button>
                <button id="video-button">Video</button> -->
            </div>
            
            <div id="content-container">
                <div id="powerpoint-content">
                    <!-- <p style="text-align: justify;"><b>Note</b> : Pada Power Point jika menggunakan handphone(HP) swipe layar di slide untuk ke slide berikutnya, namun jika mengakses dengan komputer atau labtop cukup clik di area slide untuk pindah ke slide berikutnya.</p> -->
                    <iframe src="https://docs.google.com/presentation/d/1wsgmz6hMMyJ9LfR5BsaIm634vJbk9VtSFGROHhSVcKY/embed?start=false&loop=false&delayms=3000" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen></iframe>
                </div>
                <div id="video-content">
                    <video id="video" controls width="100%" height="100%">
                        <source src="assets/images/GMML6786.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            
                        
        </div>
    </section>


    <!-- <section id="solve">
        <div class="container">
            <h2 class="text-center">Penyelesaian Masalah</h2> -->
            <!-- Include your Canva presentation using an iframe -->
            <!-- <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.canva.com/design/DAFw66ZVG2I/view" width="100%" height="600"></iframe>
            </div> -->
            <!-- <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
            padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
            border-radius: 8px; will-change: transform;">
             <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
               src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFw6XgMI48&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
             </iframe>
           </div>
           <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFw6XgMI48&#x2F;view?utm_content=DAFw6XgMI48&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> oleh tester roxlyyy
    </section> -->

   <!-- Add a section for the "Contact" page -->
    <section id="contact">
        <div class="container">
        <center><h3>Untuk Melihat Data Penduduk Silahkan Login</h3></center>
            <div class="card p-3 shadow">
            <div class="login-container">
        <img src="assets/images/data.jpg" alt="Logo" />
        <form>
            <input type="text" placeholder="Username" required><br>
            <input type="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        </div>
                   
               
            </div>
        </div>
    </section>

    <footer class="text-center py-3">
        <p>&copy; KKN Universitas Lampung 2024 Periode 1</p>
    </footer>

    <!-- Include Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include your custom JavaScript for the scrolling effect (see below) -->
    <script src="<?=base_url("assets/js/custom.js")?>></script>
</body>
</html>
