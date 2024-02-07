<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthétique KF406/</h2>
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
            <div class="text-content">
                <p>Bienvenue, <span>Synthétique KF406</span>,sur notre plateforme d'évaluation périodique.</p>
                <p>Votre mission est claire : <span>comprendre, décrire et créer</span>.</p>
                <p>Vous devrez assimiler les fondamentaux de l'art baroque, analyser les émotions véhiculées par les œuvres qui vous seront présentées, et enfin, exprimer votre propre vision émotionnelle à travers une création artistique originale.</p>
                <p>Soyez attentif, car chaque détail compte.</p>
                <p>Nous vous observons, KF406.</p>
            </div>
            <div class="button-wrapper">
                <div class="button-content">
                    <Link href="" class="btn-type-1">
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
import { Link } from '@inertiajs/vue3';

components:{
    Link
}
</script>
