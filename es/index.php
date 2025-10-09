<?php
// index.php para AI Learner en Español
session_start();
include '../db.php';
include '../page_visit.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../layout/head.php'; ?>
    <title>AI Learner – Aprendizaje de IA Gratis para Niños, Estudiantes y Principiantes</title>
    <link rel="canonical" href="https://ailearner.free.nf/es/" />
    <meta name="description" content="AI Learner es un sitio web gratuito que enseña Inteligencia Artificial a niños, estudiantes y principiantes sin conocimientos técnicos — con capítulos paso a paso, visuales y lenguaje sencillo." />
    <meta name="keywords" content="IA para niños, aprender IA gratis, IA para principiantes, tutoriales IA simples, proyectos IA para estudiantes, herramientas IA sin código, aprendizaje visual IA" />
    <meta name="author" content="Equipo AI Learner">
</head>
<body>
<?php include '../layout/header.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>¡Bienvenido a AI Learner – Aprende IA de Forma Fácil y Divertida!</h1>
        <p>AI Learner es un sitio web gratuito y fácil para principiantes que enseña Inteligencia Artificial (IA) a niños, estudiantes y usuarios sin conocimientos técnicos. Nuestros capítulos fáciles de seguir usan lenguaje sencillo, ejemplos reales y visuales divertidos para que aprender IA sea emocionante y comprensible. ¡Ya sea que solo tengas curiosidad o quieras crear tu primer proyecto de IA sin programar, este es el lugar perfecto para comenzar tu viaje en IA!</p>
        <a href="/es/ai-course.php" class="btn">Comenzar a Aprender</a>
    </div>
</section>

<section id="chapter-carousel" class="chapter-carousel" style="margin: 2em auto; max-width: 900px;">
    <h2 style="text-align:center;">Explora los Capítulos del Curso de IA</h2>
    <div class="carousel-container">
        <button class="carousel-btn prev">&#8592;</button>
        <div class="carousel-track">
            <a class="carousel-slide" href="/es/introduction-to-ai-1.php"><span class="carousel-icon">🤖</span><span class="carousel-label">Introducción a la IA</span></a>
            <a class="carousel-slide" href="/es/where-ai-shows-up-in-everyday-life-2.php"><span class="carousel-icon">🏠</span><span class="carousel-label">IA en la Vida Cotidiana</span></a>
            <a class="carousel-slide" href="/es/how-to-write-a-prompt-3.php"><span class="carousel-icon">✍️</span><span class="carousel-label">Cómo Escribir Prompts</span></a>
            <a class="carousel-slide" href="/es/how-ai-learns-from-data-4.php"><span class="carousel-icon">📊</span><span class="carousel-label">Cómo Aprende la IA de los Datos</span></a>
            <a class="carousel-slide" href="/es/types-of-ai-tools-and-how-to-use-them-5.php"><span class="carousel-icon">🛠️</span><span class="carousel-label">Tipos de Herramientas de IA</span></a>
            <a class="carousel-slide" href="/es/create-your-first-ai-project-6.php"><span class="carousel-icon">🚀</span><span class="carousel-label">Crea tu Primer Proyecto de IA</span></a>
            <a class="carousel-slide" href="/es/future-of-ai-7.php"><span class="carousel-icon">🔮</span><span class="carousel-label">El Futuro de la IA</span></a>
            <a class="carousel-slide" href="/es/how-to-make-your-resume-8.php"><span class="carousel-icon">📄</span><span class="carousel-label">Crea tu Currículum con IA</span></a>
            <a class="carousel-slide" href="/es/ai-creativity-art-music-storytelling-9.php"><span class="carousel-icon">🎨</span><span class="carousel-label">IA y Creatividad</span></a>
            <a class="carousel-slide" href="/es/learn-a-new-language-using-ai-10.php"><span class="carousel-icon">🗣️</span><span class="carousel-label">Aprende un Nuevo Idioma con IA</span></a>
            <a class="carousel-slide" href="/es/cooking-and-fashion-using-ai-11.php"><span class="carousel-icon">👗</span><span class="carousel-label">Cocina y Moda con IA</span></a>
            <a class="carousel-slide" href="/es/islamic-ai-12.php"><span class="carousel-icon">☪️</span><span class="carousel-label">IA Islámica y Ética</span></a>
            <a class="carousel-slide" href="/es/ai-for-developers.php"><span class="carousel-icon">💻</span><span class="carousel-label">IA para Desarrolladores</span></a>
            <a class="carousel-slide" href="/es/ai-for-healthcare.php"><span class="carousel-icon">🏥</span><span class="carousel-label">IA en Salud</span></a>
            <a class="carousel-slide" href="/es/ai-for-teachers.php"><span class="carousel-icon">👩‍🏫</span><span class="carousel-label">IA para Profesores</span></a>
            <a class="carousel-slide" href="/es/ai-in-marketing.php"><span class="carousel-icon">���</span><span class="carousel-label">IA en Marketing</span></a>
            <a class="carousel-slide" href="/es/coming-soon.php"><span class="carousel-icon">⏳</span><span class="carousel-label">Próximamente</span></a>
        </div>
        <button class="carousel-btn next">&#8594;</button>
    </div>
    <style>
    .carousel-container { display: flex; align-items: center; justify-content: center; }
    .carousel-btn { background: #1a73e8; color: #fff; border: none; border-radius: 50%; width: 2.5em; height: 2.5em; font-size: 1.5em; cursor: pointer; margin: 0 0.5em; z-index: 2; }
    .carousel-track { display: flex; overflow-x: auto; scroll-behavior: smooth; gap: 1em; padding: 1em 0; max-width: 700px; }
    .carousel-slide {
        flex: 0 0 auto;
        background: #e3f2fd;
        border-radius: 16px;
        width: 120px;
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: bold;
        color: #1a73e8;
        text-decoration: none;
        box-shadow: 0 2px 6px rgba(0,0,0,0.07);
        transition: background 0.2s, transform 0.2s;
        font-size: 1em;
        position: relative;
    }
    .carousel-slide:hover { background: #bbdefb; transform: scale(1.07); }
    .carousel-icon {
        font-size: 2.2em;
        margin-bottom: 0.3em;
        display: block;
    }
    .carousel-label {
        font-size: 1em;
        margin-top: 0.2em;
        display: block;
    }
    @media (max-width: 600px) {
        .carousel-track { max-width: 90vw; }
        .carousel-slide { width: 90px; height: 90px; font-size: 0.95em; }
        .carousel-icon { font-size: 1.5em; }
    }
    </style>
    <script>
    const track = document.querySelector('.carousel-track');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    let autoScrollInterval;
    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            track.scrollBy({left: 1, behavior: 'smooth'});
            if (track.scrollLeft + track.offsetWidth >= track.scrollWidth - 2) {
                track.scrollTo({left: 0, behavior: 'smooth'});
            }
        }, 30);
    }
    function stopAutoScroll() { clearInterval(autoScrollInterval); }
    prevBtn.onclick = () => { track.scrollBy({left: -250, behavior: 'smooth'}); stopAutoScroll(); startAutoScroll(); };
    nextBtn.onclick = () => { track.scrollBy({left: 250, behavior: 'smooth'}); stopAutoScroll(); startAutoScroll(); };
    track.addEventListener('mouseenter', stopAutoScroll);
    track.addEventListener('mouseleave', startAutoScroll);
    startAutoScroll();
    </script>
</section>

<?php include '../layout/footer.php'; ?>
</body>
</html>
