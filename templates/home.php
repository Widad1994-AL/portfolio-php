<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- important pour Tailwind -->
</head>

<body class="bg-black">


<div class="bento-container relative bg-black">
<h1 class="text-3xl font-semibold text-white text-center mb-4 hover:scale-105 transition duration-300 ease-in-out transform">Bienvenue sur mon Portfolio</h1>
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
        <!-- Bento 1 : Image + texte -->
        <div class="md:col-span-2 bg-white border border-slate-200 rounded-xl p-4 hover:scale-105 transition duration-300 ease-in-out transform">
            <img src="./images/home_1.png" alt="Chat tech 1" class="w-full h-48 object-cover rounded-lg mb-4">
            <h2 class="text-2xl font-semibold">Découvrez mon profil</h2>
            <p class="text-slate-600">Apprenez-en plus sur moi, mon parcours et mes compétences.</p>
        </div>

        <!-- Bento 2 : Image + texte -->
        <div class="bg-white border border-slate-200 rounded-xl p-4 hover:scale-105 transition duration-300 ease-in-out transform">
            <img src="./images/home_2.png" alt="Chat tech 2" class="w-full h-48 object-cover rounded-lg mb-4">
            <h2 class="text-2xl font-semibold">Regarder mon travail</h2>
            <p class="text-slate-600">Explorez mes projets récents et mes réalisations.</p>
        </div>

        <!-- Bento 3 : Image + texte -->
        <div class="bg-white border border-slate-200 rounded-xl p-4 hover:scale-105 transition duration-300 ease-in-out transform">
            <div class="flex gap-4 home-img h-52 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><!-- Icon from SVG Logos by Gil Barbara - https://raw.githubusercontent.com/gilbarbara/logos/master/LICENSE.txt --><path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"/><path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 256 256"><!-- Icon from Skill Icons by tandpfun - https://github.com/tandpfun/skill-icons/blob/main/LICENSE --><g fill="none"><rect width="256" height="256" fill="#fff" rx="60"/><rect width="256" height="256" fill="#1D9BF0" rx="60"/><path fill="#fff" d="M199.572 91.411c.11 1.587.11 3.174.11 4.776c0 48.797-37.148 105.075-105.075 105.075v-.03A104.54 104.54 0 0 1 38 184.677q4.379.525 8.79.533a74.15 74.15 0 0 0 45.865-15.839a36.98 36.98 0 0 1-34.501-25.645a36.8 36.8 0 0 0 16.672-.636c-17.228-3.481-29.623-18.618-29.623-36.198v-.468a36.7 36.7 0 0 0 16.76 4.622c-16.226-10.845-21.228-32.432-11.43-49.31a104.8 104.8 0 0 0 76.111 38.582a36.95 36.95 0 0 1 10.683-35.283c14.874-13.982 38.267-13.265 52.249 1.601a74.1 74.1 0 0 0 23.451-8.965a37.06 37.06 0 0 1-16.234 20.424A73.5 73.5 0 0 0 218 72.282a75 75 0 0 1-18.428 19.13"/></g></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><!-- Icon from Skill Icons by tandpfun - https://github.com/tandpfun/skill-icons/blob/main/LICENSE --><g fill="none"><rect width="256" height="256" fill="#fff" rx="60"/><rect width="256" height="256" fill="#0A66C2" rx="60"/><path fill="#fff" d="M184.715 217.685h29.27a4 4 0 0 0 4-3.999l.015-61.842c0-32.323-6.965-57.168-44.738-57.168c-14.359-.534-27.9 6.868-35.207 19.228a.32.32 0 0 1-.595-.161V101.66a4 4 0 0 0-4-4h-27.777a4 4 0 0 0-4 4v112.02a4 4 0 0 0 4 4h29.268a4 4 0 0 0 4-4v-55.373c0-15.657 2.97-30.82 22.381-30.82c19.135 0 19.383 17.916 19.383 31.834v54.364a4 4 0 0 0 4 4M38 59.628c0 11.864 9.767 21.626 21.632 21.626c11.862-.001 21.623-9.769 21.623-21.631C81.253 47.761 71.491 38 59.628 38C47.762 38 38 47.763 38 59.627m6.959 158.058h29.307a4 4 0 0 0 4-4V101.66a4 4 0 0 0-4-4H44.959a4 4 0 0 0-4 4v112.025a4 4 0 0 0 4 4"/></g></svg>
            </div>

            <h2 class="text-2xl font-semibold">Me contacter</h2>
            <p class="text-slate-600">Envie de collaborer ? Contactez-moi facilement.</p>
        </div>

        <!-- Bento 4 : sans image -->
        <div class="md:col-span-2 bg-white border border-slate-200 rounded-xl p-4 hover:scale-105 transition duration-300 ease-in-out transform">
            <h2 class="text-2xl font-semibold mb-2">Blog & Inspirations</h2>
            <p class="text-slate-600">Découvrez mes dernières idées, pensées et inspirations créatives.</p>
        </div>
    </section>
</div>

</body>
</html>




















































