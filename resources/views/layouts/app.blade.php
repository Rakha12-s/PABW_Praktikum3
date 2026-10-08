<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Lapor Banjir BPBD</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; }
        header { background: #0056b3; color: white; padding: 15px 20px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; font-weight: bold; }
        .container { padding: 20px; }
        .card { background: white; padding: 15px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        footer { text-align: center; padding: 10px; background: #ddd; position: fixed; bottom: 0; width: 100%; }
        .alert { padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; }
    </style>
</head>
<body>
    <header>
        <h2>Lapor Banjir BPBD Kab. Bandung</h2>
        <nav>
            <a href="{{ route('lapor.create') }}">Form Lapor</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 BPBD Kabupaten Bandung
    </footer>
</body>
</html>