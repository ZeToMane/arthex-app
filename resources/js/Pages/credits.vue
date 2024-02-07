<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/mmi-bordeaux-icon.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthétique KF406/</h2>
            </div>
        </div>

        <div class="content">
            <div class="text-content">
                <p>Arthex est le fruit d'une collaboration créative impliquant <span>six étudiants</span> de <span>l'IUT Bordeaux Montaigne</span>, tous en deuxième année du cursus BUT MMI.</p>

                <p><span>Goufrane BENAZZA</span> - Wireframing / Prototypage / UX</p>

                <p><span>Pedro BARROS PARENTE</span> - Développement (Front-end et Back-end) / Direction Artistique / UI</p>

                <p><span>Maïlys CURTAT</span> - Storytelling / Recherche / Écriture</p>

                <p><span>Kévin IMART</span> - Recherche / Organisation / Préparation de Contenu</p>

                <p><span>Charles NEVEU</span> - Recherche / Préparation de Contenu / Exploitation d'Images</p>

                <p><span>Lamia ZIACHI</span> - Storytelling / Recherche / Écriture</p>
            </div>
            <div class="button-wrapper">
                <div class="button-content">
                    <Link href="accueil" class="btn-type-1 btn-type-1-alt">
                        <p class="btn-content">retour</p>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

components:{
    Link
}
</script>
