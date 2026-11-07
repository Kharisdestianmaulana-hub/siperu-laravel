<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Ruangan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-shadow: none !important;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            line-height: 1.5;
        }
        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        .navbar {
            max-width: 1000px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1d4ed8;
            text-decoration: none;
        }
        .navbar-menu {
            display: flex;
            gap: 1.5rem;
        }
        .navbar-link {
            text-decoration: none;
            color: #475569;
            font-size: 0.95rem;
            font-weight: 500;
        }
        .navbar-link:hover, .navbar-link.active {
            color: #1d4ed8;
        }
        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
        .page-header {
            margin-bottom: 2rem;
        }
        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }
        .page-subtitle {
            color: #64748b;
            font-size: 0.95rem;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-header {
            margin-bottom: 1rem;
        }
        .card-title {
            font-size: 1.15rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.6rem;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 4px;
        }
        .badge-available {
            background-color: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
        }
        .badge-unavailable {
            background-color: #f1f5f9;
            color: #64748b;
            border: 1px solid #cbd5e1;
        }
        .card-body {
            margin-bottom: 1.5rem;
        }
        .card-info {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.9rem;
        }
        .card-info:last-child {
            border-bottom: none;
        }
        .info-label {
            color: #64748b;
        }
        .info-value {
            font-weight: 600;
            color: #1e293b;
        }
        .card-actions {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
        .btn {
            display: inline-block;
            text-align: center;
            padding: 0.55rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid transparent;
            width: 100%;
        }
        .btn-primary {
            background-color: #1d4ed8;
            color: #ffffff;
            border-color: #1d4ed8;
        }
        .btn-primary:hover {
            background-color: #1e40af;
            border-color: #1e40af;
        }
        .btn-outline {
            background-color: #ffffff;
            color: #1d4ed8;
            border-color: #bfdbfe;
        }
        .btn-outline:hover {
            background-color: #eff6ff;
            border-color: #93c5fd;
        }
        .text-disabled {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 0.85rem;
            font-weight: 500;
            color: #64748b;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 0.55rem 1rem;
            border-radius: 4px;
        }
        .detail-panel {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        .detail-list {
            margin: 1.5rem 0;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f5f9;
        }
        .form-panel {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.4rem;
        }
        .form-control {
            width: 100%;
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            background-color: #ffffff;
            color: #1e293b;
        }
        .form-control:focus {
            outline: none;
            border-color: #1d4ed8;
        }
        .form-control[readonly] {
            background-color: #f8fafc;
            color: #64748b;
        }
        textarea.form-control {
            resize: vertical;
            min-height: 80px;
        }
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        footer {
            margin-top: 4rem;
            border-top: 1px solid #e2e8f0;
            background-color: #ffffff;
            padding: 1.5rem 0;
            text-align: center;
            font-size: 0.85rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="{{ route('ruangan.index') }}" class="navbar-brand">SIPERU</a>
            <nav class="navbar-menu">
                <a href="{{ route('ruangan.index') }}" class="navbar-link">Daftar Ruangan</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>Sistem Peminjaman Ruangan &bull; Praktikum PBO</p>
    </footer>
</body>
</html>
