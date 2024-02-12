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

        <div class="content content-unset-justify">
            <div class="text-content">
                <p>Inspiré par <span>Rubens</span> et <span>Van Dyck</span>, ce tableau montre le martyr de Saint Laurent en 258, condamné par l'empereur Decius. On voit Saint Laurent <span>enchaîné sur un gril</span>, torturé par un <span>soldat avec un fer rouge</span>. Boeckhorst s'inspire de Rubens pour la composition et de Van Dyck pour l'expression <span>dramatique</span>.</p>
            </div>
            <div class="after-head img-container flex-grow-1">
                <img src="../../content/img/Le Martyre de saint Laurent.webp" alt="" class="img-painting height-100">
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-one-test-third" class="btn-type-1">
                    <p class="btn-content">
                        j'y suis
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

    typeWriterEffect();
});
</script>
