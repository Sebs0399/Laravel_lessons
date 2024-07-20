<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        header h1 {
            margin: 0;
            font-size: 3rem;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 30px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.8;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>¡Bienvenido a Nuestra Página!</h1>
    </header>
    <main>
        <section>
            <h2>Sobre Nosotros</h2>
            <p>Somos una empresa dedicada a...</p>
            <a href="about.html" class="btn">Más sobre nosotros</a>
        </section>
        <section>
            <h2>Nuestros Servicios</h2>
            <p>Ofrecemos una amplia gama de servicios, incluyendo...</p>
            <a href="services.html" class="btn">Ver servicios</a>
        </section>
        <section>
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna pregunta o comentario? ¡No dudes en contactarnos!</p>
            <a href="contact.html" class="btn">Contacto</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Nombre de la Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
