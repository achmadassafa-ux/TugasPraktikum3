<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - LaporBanjir</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #1e3a5f;
            color: white;
            padding: 20px 40px;
        }

        header h1 {
            margin: 0 0 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #1e3a5f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .status {
            font-weight: bold;
        }

        footer {
            margin-top: 40px;
            padding: 20px;
            text-align: center;
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <header>
        <h1>LaporBanjir</h1>

        <nav>
            <a href="{{ route('laporan.form') }}">Form Laporan</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 LaporBanjir - Achmad Habibi Assafa</p>
    </footer>

</body>

</html>