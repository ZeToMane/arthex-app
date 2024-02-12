<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthetic KF<span class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="content content-unset-justify ">
            <div class="text-content">
                <p>Vos résultats sont en train d'être analysés.</p> 
                <br>
                <p>Veuillez patienter...</p>
            </div>
            <div class="loading">
                <div class="bar"></div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { synthName} from '../global.js';
import { typeWriterEffect } from '../animation';
import gsap from 'gsap';

components:{
    Link
}


onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });

    typeWriterEffect();

    const bar = document.querySelector('.bar');

// Utilisez GSAP pour animer la largeur de la barre de 0% à 100% en 5 secondes
    gsap.to(bar, { 
        duration: 4, // Durée de l'animation en secondes
        width: "100%", // La valeur cible de la largeur
        ease: "power2.out", // Fonction d'assouplissement (facultatif)
        onComplete(){
            router.get('/attention');
        }
    });
});
</script>
