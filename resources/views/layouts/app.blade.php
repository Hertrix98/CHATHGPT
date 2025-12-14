<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --text: #0f172a;
            --muted: #475569;
            --bg: #f8fafc;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: var(--text);
            background: var(--bg);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        header {
            background: white;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 1px 10px rgba(15, 23, 42, 0.06);
        }

        .container {
            width: min(1100px, 92vw);
            margin: 0 auto;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }

        .nav .brand {
            font-weight: 700;
            color: var(--primary-dark);
            letter-spacing: -0.01em;
        }

        .nav ul {
            display: flex;
            gap: 1.25rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav a {
            color: var(--muted);
            font-weight: 600;
        }

        .nav a:hover,
        .nav a:focus {
            color: var(--primary);
        }

        main {
            padding: 2.5rem 0 3rem;
        }

        footer {
            background: white;
            border-top: 1px solid #e2e8f0;
            padding: 1.5rem 0;
            color: var(--muted);
        }

        .hero {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            align-items: center;
            padding: 2rem;
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.08), rgba(15, 118, 110, 0.02));
            border-radius: 16px;
            box-shadow: 0 18px 60px rgba(15, 23, 42, 0.08);
        }

        .hero h1 {
            margin-top: 0;
            font-size: clamp(2rem, 3vw, 2.6rem);
            color: var(--primary-dark);
        }

        .hero p {
            color: var(--muted);
            font-size: 1.05rem;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.7rem;
            border-radius: 999px;
            background: white;
            color: var(--primary-dark);
            font-weight: 700;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .card {
            background: white;
            padding: 1.25rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
            border: 1px solid #e2e8f0;
        }

        .card h3 {
            margin-top: 0.2rem;
            margin-bottom: 0.4rem;
            color: var(--primary-dark);
        }

        .card p {
            margin: 0;
            color: var(--muted);
        }

        .section-title {
            font-size: 1.6rem;
            margin: 2.5rem 0 0.75rem;
            color: var(--text);
        }

        .cta {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.75rem 1.4rem;
            border-radius: 10px;
            background: var(--primary);
            color: white;
            font-weight: 700;
            box-shadow: 0 12px 30px rgba(15, 118, 110, 0.25);
        }

        .cta:hover,
        .cta:focus {
            background: var(--primary-dark);
        }

        .muted {
            color: var(--muted);
        }

        @media (max-width: 640px) {
            .nav ul {
                flex-wrap: wrap;
                gap: 0.75rem;
            }

            main {
                padding: 1.5rem 0 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        @include('partials.menu')
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
