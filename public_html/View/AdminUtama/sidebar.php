<div class="sidebar box">
    <ul class="primary">
        <li><a class="atas has-more" href="">Admin</a>
            <ul class="ul-secondary">
                <li><a href="tambahAdminMasjid.php">Tambah Admin Masjid</a></li>
                <li><a href="ubahAdminMasjid.php">Ubah Admin Masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Masjid</a>
            <ul class="ul-secondary">
                <li><a href="konfirmasiMasjid.html">Konfirmasi Masjid</a></li>
                <li><a href="aturDataMasjid.html">Atur Data Masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Berita Masjid</a>
            <ul class="ul-secondary">
                <li><a href="tambahBeritaMasjid.php">Tambah Berita Masjid</a></li>
                <li><a href="aturBeritaMasjid.html">Atur Berita Masjid</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Berita Umum</a>
            <ul class="ul-secondary">
                <li><a href="tambahBeritaUmum.html">Tambah Berita Umum</a></li>
                <li><a href="aturBeritaUmum.html">Atur Berita Umum</a></li>
            </ul>
        </li>
        <li><a class="has-more" href="">Video</a>
            <ul class="ul-secondary">
                <li><a href="tambahVideo.html">Tambah Video</a></li>
                <li><a href="aturVideo.html">Atur Video</a></li>
            </ul>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function() {

        //admin umum sidebar
        $('.sidebar').find('.has-more').on('click', function(e) {
            $(this).parent().find('.ul-secondary').slideToggle();
            $(this).parent().siblings().find('.ul-secondary').slideUp();
            e.preventDefault();
        });
    });
</script>