<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Klinik Sehat - Gading</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-hospital"></i> Klinik dexpie
            </a>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid mb-0 bg-light">
        <div class="container text-center">
            <h1 class="display-4">Layanan Pasien Online</h1>
            <p class="lead">Contoh implementasi Bootstrap 4 icon untuk website klinik/BPJS.</p>
            <a href="#fitur" class="btn btn-primary mr-2">
                <i class="bi bi-hospital"></i> Layanan
            </a>
            <a href="#kontak" class="btn btn-outline-secondary">
                <i class="bi bi-clipboard2-pulse"></i> Daftar
            </a>
        </div>
    </header>

    <main class="container py-5">
        <section id="fitur">
            <h2 class="mb-4">Layanan Utama</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-check text-primary mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Booking Antrian</h5>
                            <p class="card-text">Pasien bisa ambil nomor antrian dari HP sebelum datang.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-person-vcard text-success mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Verifikasi BPJS</h5>
                            <p class="card-text">Input nomor kartu BPJS untuk cek data kepesertaan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-file-medical text-warning mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Riwayat Kunjungan</h5>
                            <p class="card-text">Riwayat pemeriksaan dan resep bisa dilihat kembali.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4" id="kontak">
            <div class="alert alert-info" role="alert">
                <i class="bi bi-info-circle"></i>
                made by dexpie - gading
            </div>

            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pasien">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Nomor BPJS</label>
                        <input type="text" class="form-control" id="email" placeholder="Contoh: 0001234567890">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-send"></i> Daftar Antrian
                </button>
            </form>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <small>&copy; Gading Putra Priyanto - 5026241129 - Pertemuan 3</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>