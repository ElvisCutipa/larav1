<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ?? 'Panel Académico' }}</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f4f8; color: #333; }
        header { background: #1e3a8a; color: white; padding: 18px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header h1 { font-size: 1.2rem; font-weight: bold; letter-spacing: 0.5px; }
        nav a { color: #bfdbfe; text-decoration: none; margin-left: 24px; font-size: 0.95rem; transition: color 0.2s; }
        nav a:hover { color: white; text-decoration: underline; }
        main { max-width: 1000px; margin: 40px auto; padding: 0 20px; min-height: 65vh; }
        h1 { color: #1e3a8a; margin-bottom: 20px; font-size: 1.8rem; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        th { background: #1e3a8a; color: white; padding: 14px; text-align: left; font-size: 0.95rem; }
        td { padding: 12px 14px; border-bottom: 1px solid #e2e8f0; color: #4a5568; font-size: 0.9rem; }
        .card { background: white; border-radius: 8px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); max-width: 550px; border-top: 4px solid #1e3a8a; }
        .card dl { display: grid; grid-template-columns: 160px 1fr; gap: 12px; }
        .card dt { font-weight: 600; color: #4a5568; }
        .card dd { color: #2d3748; }
        .btn { display: inline-block; background: #1e3a8a; color: white; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: 500; font-size: 0.9rem; transition: background 0.2s; border: none; cursor: pointer; }
        .btn:hover { background: #172554; }
        .btn-volver { background: #4a5568; margin-top: 15px; }
        .btn-volver:hover { background: #334155; }
    </style>
</head>
<body>

<header>
    <h1>Control Académico USFA</h1>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('estudiantes.index') }}">Estudiantes</a>
    </nav>
</header>

<main>
    @yield('contenido')
</main>

<footer style="background: #1e3a8a; color: #93c5fd; text-align: center; padding: 20px; margin-top: 60px; font-size: 0.85rem;">
    <p>&copy; {{ date('Y') }} — Laboratorio Práctico MVC Dinámico • SIS-500</p>
</footer>

</body>
</html>