<div class="w-full m-3 text-gray-800">
    <div class="flex flex-row justify-between">
        <h1 class="text-4xl font-semibold">Ajouter un utilisateur</h1>
        <a href="?page=users" class="flex flex-row gap-2 items-center bg-orange-700 text-white px-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
            Annuler 
        </a>
    </div>
    <form method="POST" action="/" class="mt-10 mb-8 flex flex-col gap-4">
        <div class="flex flex-col gap-2">
            <label for="name">Nom <span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md p-2" placeholder="Nom" required>
        </div>
        <div class="flex flex-col gap-2">
            <label for="prenom">Prénom <span class="text-red-500">*</span></label>
            <input type="text" name="prenom" id="prenom" class="w-full border border-gray-300 rounded-md p-2" placeholder="Prénom" required>
        </div>
        <div class="flex flex-col gap-2">
            <label for="mail">Adresse e-mail</label>
            <input type="text" name="mail" id="mail" class="w-full border border-gray-300 rounded-md p-2" placeholder="Adresse e-mail">
            <p class="text-sm text-gray-500">Entrez une adresse valide</p>
        </div>
        <div class="flex flex-col gap-2">
            <label for="date">Date de naissance</label>
            <input type="text" name="date" id="date" class="w-full border border-gray-300 rounded-md p-2" placeholder="Date de naissance">
        </div>
        <div class="flex flex-col gap-2">
            <label for="role">Rôle <span class="text-red-500">*</span></label>
            <select type="text" name="role" id="role" class="w-full border border-gray-300 rounded-md p-2" placeholder="Rôle">
                <option>Administrateur</option>
                <option>Éditeur</option>
            </select>
        </div>
        <div class="flex flex-row gap-2">
            <input type="checkbox" name="active" id="active">
            <label for="active">Activé</label>
        </div>
        <div class="flex flex-row gap-2">
            <input class="bg-pink-700 text-white rounded-md px-4 py-2 cursor-pointer" type="submit" value="Valider">
        </div>
    </form>
</div>