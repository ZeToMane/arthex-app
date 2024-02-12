<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/Synthetic KF<span class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="content content-unset-justify">
            <div class="after-head img-container">
                <img src="../../content/img/Le Martyre de saint Georges.webp" alt="" class="img-painting img-slider">
            </div>
            <div class="text-content">
                <h3>Voici quelques informations qu’il vous faut assimiler :</h3>

                <p>Le baroque émerge en <span>Italie</span> au début du <span>17e siècle</span>. Il touche peinture, sculpture, architecture et musique.</p>

                <p>Il vise à intensifier les <span>émotions</span> et à transmettre des <span>messages</span>. </p>

                <p>Caractérisé par des expressions dramatiques, des jeux de lumière et des détails, il a pour but d’<span>émouvoir les spectateurs</span>.</p>
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-one-intro" class="btn-type-1">
                    <p class="btn-content">
                        continuer
                        <img src="../../content/arrow.svg" alt="" class="">
                    </p>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { synthName} from '../global.js';
import { typeWriterEffect } from '../animation';

components:{
    Link
}


onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });

    const animatedBackground = document.querySelector('.img-painting');
    let imageIndex = 0;
    const images = ['/img/Le Martyre de saint Georges.webp', '/img/Le Martyre de saint Laurent.webp', '/img/Le Miracle de saint Just.webp'];

    function changeBackground() {
        animatedBackground.src = images[imageIndex];
        imageIndex = (imageIndex + 1) % images.length;
    }

    setInterval(changeBackground, 1000); // Change every 5 seconds (adjust timing as needed)

    typeWriterEffect();
});
</script>
