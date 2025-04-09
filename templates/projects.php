
<?php

/**
 * Page des projets à partir du fichier
 * '/assets/projects.json
 * API des icones : https://devicon.dev/
 */

$data = file_get_contents('./assets/projects.json'); // Récupération du contenu d'un fichier
$projects = json_decode($data, true); // Décodage du JSON en tableau associatif

function toSlug(string $stackIcon): string
{
    $stackIcon = strtolower($stackIcon);
    $stackIcon = preg_replace('/[^a-z0-9-]/', '', $stackIcon);
    $stackIcon = preg_replace('/-+/', '', $stackIcon);
    return $stackIcon;
}
?>

<h1 class="bg-clip-text bg-gradient-to-br from-slate-300 to-white text-6xl font-bold text-transparent text-center mb-10">
    Mes projets
</h1>

<?php foreach ($projects as $item): ?>
    <div class="p-4 flex flex-col md:flex-row border-b border-slate-600 text-white">
        <div class="md:w-1/2 border-b md:border-b-0 md:border-r border-slate-600 p-4">
            <h3 class="text-2xl font-bold mb-3"><?= $item['title'] ?></h3>
            <p class="text-slate-200"><?= $item['description'] ?></p>
        </div>
        <div class="md:w-1/2 p-4 border-b md:border-b-0 md:border-r border-slate-600">
            <h3 class="text-2xl font-bold mb-3">Stack</h3>
            <ul class="flex flex-wrap gap-4">
                <?php foreach ($item['stack'] as $icon): ?>
                    <li class="h-10 w-10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= toSlug($icon) ?>/<?= toSlug($icon) ?>-original.svg" alt="<?= "Logo " . $icon ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="w-full md:w-24 text-slate-300 flex items-center justify-center p-4">
            <a href="https://www.google.fr/" target="_blank" rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" class="hover:text-white transition">
                    <path fill="currentColor" d="m8.006 21.308l-1.064-1.064L15.187 12L6.942 3.756l1.064-1.064L17.314 12z" />
                </svg>
            </a>
        </div>
    </div>
<?php endforeach; ?>









































