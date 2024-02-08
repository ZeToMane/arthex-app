<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthétique KF<span  class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="content">
            <div class="after-head">
                <div class="text-content">
                    <h1>Examen N°333 : </h1>
                </div>
                <Link href="histoire" class="btn-histoire">
                    <img src="../../content/histoire-icon.svg" alt="" class="">
                </Link>
            </div>
            <div class="text-content text-accueil">
                <p><span>Synthétique KF<span class="insert-synth"></span></span>,</p>

                <p>bienvenue sur notre plateforme d'évaluation semestrielle.</p>

                <p>Votre mission est claire : <span>comprendre</span>, <span>décrire</span> et <span>créer</span>.</p>

                <p>Vous devez <span>assimiler</span> les fondamentaux de l'art baroque, <span>identifier</span> les émotions transmises par les œuvres qui vous entoure, et <span>exprimer</span> votre vision d’une émotion.</p>

                <p>Soyez attentif, chaque détail compte.</p> 

                <p>Nous vous observons, <span>KF<span class="insert-synth"></span></span>.</p>
            </div>
            <div class="button-wrapper">
                <div class="button-content">
                    <Link href="comprendre" class="btn-type-1">
                        <p class="btn-content">commencer</p>
                    </Link>
                    <Link href="" class="btn-type-1 btn-type-1-alt">
                        <p class="btn-content">galerie</p>
                    </Link>
                </div>
            </div>
            <div class="button-wrapper wrapper-right">
                <Link href="credits" class="button-content">
                    <p class="btn-credit">
                        crédits
                    </p>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import { synthName} from '../global.js';

components:{
    Link
}


onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });
});
</script>
