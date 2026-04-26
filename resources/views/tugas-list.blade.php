<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { 
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); 
            min-height: 100vh;
            padding: 40px 15px; 
            font-family: 'Inter', sans-serif;
        }
        .container-box {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            padding: 30px;
        }
        .list-group-item {
            border-radius: 8px !important;
            margin-bottom: 8px;
            border: 1px solid #eaeaea;
            transition: all 0.2s ease-in-out;
            font-weight: 500;
        }
        .list-group-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-color: #0d6efd;
            background-color: #f8fbff;
            color: #0d6efd;
        }
        .icon-box {
            display: inline-block;
            width: 30px;
            text-align: center;
            margin-right: 10px;
            color: #6c757d;
        }
        .list-group-item:hover .icon-box {
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto container-box">
                <div class="text-center mb-4">
                    <h2 class="font-weight-bold" style="color: #2c3e50;">Kumpulan Tugas Pemrograman Web</h2>
                    <p class="text-muted">Gading Putra Priyanto - 5026241129</p>
                    <hr>
                </div>
                <div class="list-group border-0">
                    <a href="{{ url('tugas/index') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-file-earmark-code"></i></span> 1. Index
                    </a>
                    <a href="{{ url('tugas/linktree') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-link-45deg"></i></span> 2. Linktree
                    </a>
                    <a href="{{ url('pertemuan5') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-laptop"></i></span> 3. Pertemuan 5 (Dell)
                    </a>
                    <a href="{{ url('tugas/5026241129') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-chat-quote"></i></span> 4. 5026241129 (Testimonial)
                    </a>
                    <a href="{{ url('tugas/contoh') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-hospital"></i></span> 5. Contoh (Layanan Klinik)
                    </a>
                    <a href="{{ url('tugas/intro') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-building"></i></span> 6. Intro (ITS)
                    </a>
                    <a href="{{ url('tugas/news') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-newspaper"></i></span> 7. News (RoboDog)
                    </a>
                    <a href="{{ url('tugas/news1') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-newspaper"></i></span> 8. News 1
                    </a>
                    <a href="{{ url('tugas/responsive') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-aspect-ratio"></i></span> 9. Responsive Web
                    </a>
                    <a href="{{ url('tugas/template') }}" class="list-group-item list-group-item-action border">
                        <span class="icon-box"><i class="bi bi-layout-text-window-reverse"></i></span> 10. Template (Jumbotron)
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
