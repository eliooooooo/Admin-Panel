<?php 
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../dist/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <title>Admin panel</title>
</head>
<body class="min-h-[100vh]" 
    x-data="{ menuOpen: window.innerWidth >= 768, loginOpen: false, searchOpen: window.innerWidth >= 640 }"
    x-init="
        window.addEventListener('resize', () => {
        menuOpen = window.innerWidth >= 768;
        searchOpen = window.innerWidth >= 640;
        });
    " >
    <header class="bg-pink-700 w-full min-h-20 flex items-center justify-between text-white sticky px-8 py-4">
        <div class=" flex flex-row gap-4 items-center">
            <svg @click="menuOpen = !menuOpen" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list cursor-pointer" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
            <h1 class="text-xl md:text-2xl select-none">Admin Panel</h1>
        </div>

        <div class="flex flex-row gap-3 items-center">
            <div class="absolute top-20 sm:top-auto sm:block sm:relative p-2 bg-pink-700 right-0 rounded-b-md" :class="searchOpen ? 'block' : 'hidden'">
                <input type="text" placeholder="Recherche" class="p-2 rounded-md">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search sm:hidden" viewBox="0 0 16 16" @click="searchOpen = !searchOpen">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
            <div class="flex flex-row gap-3 items-center relative select-none">
                <span class="hidden md:block">Eliott BURKLE</span>
                <svg @click="loginOpen = !loginOpen" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill cursor-pointer" viewBox="0 0 16 16" x-show="!loginOpen">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
                <svg @click="loginOpen = !loginOpen" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill cursor-pointer" viewBox="0 0 16 16" x-show="loginOpen">
                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                </svg>
                <div @click.away="loginOpen = false" class="absolute bg-white overflow-hidden rounded-sm border border-gray-300 w-40 -left-32 md:-left-10 text-gray-800 mt-56 md:mt-48 py-2 select-none" x-show="loginOpen" x-transition>
                    <ul>
                        <li class="py-1 px-4 md:hidden">
                            <a href="#">Eliott BURKLE</a>
                        </li>
                        <li class="py-1 px-4">
                            <a href="#" >Mon profil</a>
                        </li>
                        <li class="py-1 px-4 mb-2">
                            <a href="#" >
                                Mes messages
                                <span class="text-sm bg-pink-700 p-0.5 rounded-sm py-0 text-white">18</span>
                            </a>
                        </li>
                        <hr>
                        <li class="py-1 px-4 mt-1">
                            <a href="#" >
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="flex flex-row min-h-[calc(100vh-150px)]">
        <aside class="flex flex-col w-60 bg-gray-700" x-show="menuOpen"
            x-transition:enter="transition transform duration-400"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-400"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full">
            <ul>
                <li class="relative">
                    <a href="/" class="<?php if($page == "dashboard"){ echo 'active'; } ?> flex flex-row gap-3 text-white items-center px-3 py-2 hover:bg-gray-900 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                        </svg>
                        Tableau de bord
                    </a>
                </li>
                <li class="relative">
                    <a href="#" class="<?php if($page == "pages"){ echo 'active'; } ?> flex flex-row gap-3 text-white items-center px-3 py-2 hover:bg-gray-900 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
                        </svg>
                        Pages
                    </a>
                </li>
                <li class="relative">
                    <a href="#" class="<?php if($page == "articles"){ echo 'active'; } ?> flex flex-row gap-3 text-white items-center px-3 py-2 hover:bg-gray-900 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                        </svg>
                        Articles
                    </a>
                </li>
                <li class="relative">
                    <a href="?page=users" class="<?php if($page == "users"){ echo 'active'; } ?> flex flex-row gap-3 text-white items-center px-3 py-2 hover:bg-gray-900 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        Utilisateurs
                    </a>
                </li>
                <li class="relative">
                    <a href="#" class="<?php if($page == "params"){ echo 'active'; } ?> flex flex-row gap-3 text-white items-center px-3 py-2 hover:bg-gray-900 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                        Paramètres
                    </a>
                </li>
            </ul>
        </aside>
        <section class="flex flex-col md:flex-row pt-5 w-full mb-5">
            <?php 
                $filePath = './pages/' . $page . '.php';
                
                if (file_exists($filePath)) {
                    include $filePath;
                } else {
                    echo "<div class='w-full text-center mt-10'>Page non trouvée.</div>";
                }
            ?>
        </section>
    </main>

    <footer class="text-center text-white bg-gray-700 p-6 bottom-0 w-full">
        Admin Panel - 2024 - Développé par Eliott BURKLE
    </footer>

    <script src="./../dist/main.js"></script>
</body>
</html>