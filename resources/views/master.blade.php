<html>
    <head>
        <title> BLOG SIMPEL LARAVEL </title>
    </head>
    <body>
        <header>
            <h2>Master Blog Simpel Laravel</h2> 
            <nav>
                <a href="/blog">Beranda</a>
                <a href="/tentang">Tentang</a>
                <a href="/kontak">Kontak</a>
            </nav>
        </header>
        <hr>

        @if(request()->path() == '/' || request()->path() == 'blog')
            <p align="right"><font color="#A9A9A9"><b>Beranda Blog</b></font></p>
            <h3>Selamat Datang di Blog Akmal</h3>
            <p>Ini adalah halaman beranda yang berisi daftar artikel, tutorial, dan dokumentasi project terbaru.</p>

            <hr style="border: 1px solid #eee; margin: 20px 0;">

            <article style="margin-bottom: 25px;">
                <h4><a href="#" style="text-decoration: none; color: #333;">Membangun Sistem SEMAR (Manajemen Seminar dan Sidang)</a></h4>
                <p>Berbagi pengalaman dalam merancang UI/UX dan mengembangkan sistem manajemen akademik. Artikel ini fokus pada pembuatan landing page dan hero section yang interaktif untuk mempermudah proses pendaftaran mahasiswa.</p>
                <small style="color: gray;"><i>Diposting pada: 2 April 2026</i></small>
            </article>

            <article style="margin-bottom: 25px;">
                <h4><a href="#" style="text-decoration: none; color: #333;">Proses Pembuatan Marketplace "PAYU" Menggunakan Laravel</a></h4>
                <p>Langkah-langkah praktis dalam membangun website e-commerce dari nol. Membahas tentang perancangan skema database, pembuatan migration di Laravel, hingga integrasi dengan framework CSS untuk tampilan yang responsif.</p>
                <small style="color: gray;"><i>Diposting pada: 15 Maret 2026</i></small>
            </article>

            <article style="margin-bottom: 25px;">
                <h4><a href="#" style="text-decoration: none; color: #333;">Behind the Scene: Website JKB FESTIVAL</a></h4>
                <p>Dokumentasi project pembuatan website untuk perayaan hari jadi jurusan. Artikel ini mengupas tuntas tentang proses pencarian inspirasi desain, pembuatan visual mockup, hingga implementasi kodenya.</p>
                <small style="color: gray;"><i>Diposting pada: 10 Februari 2026</i></small>
            </article>

        @elseif(request()->path() == 'tentang')
            <p align="right"><font color="#A9A9A9"><b>Tentang</b></font></p>
            <h3>Profil Pembuat</h3>
            <p>Blog ini dibuat oleh mahasiswa Politeknik Negeri Cilacap untuk latihan menggunakan framework Laravel.</p>

            <ul>
                <li><b>Nama    :</b> Akmal Firmansyah</li>
                <li><b>Kelas   :</b> TI 2A</li>
                <li><b>NIM     :</b> 240202001</li>
            </ul>

        @elseif(request()->path() == 'kontak')
            <p align="right"><font color="#A9A9A9"><b>Kontak Kami</b></font></p>
            <h3>Hubungi Kami</h3>
            <p>Punya pertanyaan atau ingin berkolaborasi? Silakan hubungi melalui detail di bawah ini:</p>
            <ul>
                <li><b>Email   :</b> akmalfirmansyah.stu@pnc.ac.id</li>
                <li><b>Telepon :</b> 0882006249931</li>
                <li><b>Alamat  :</b> Jepara Kulon, Binagun, Cilacap</li>
                <li><b>Kampus  :</b> Politeknik Negeri Cilacap</li>
            </ul>
        @endif

        <br><br><br>
        <hr>
        <footer>
            <p>Copyright @Politeknik Negeri Cilacap</p>
        </footer>
    </body>
</html>