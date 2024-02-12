<template>
    <div class="main-container border-red">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo-red.svg" alt="" class="logo-img">
            </div>
            <div class="titles attention-title">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthetic KF<span class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="bar-attention">
            <h1>Attention !</h1>
        </div>

        <div class="content content-unset-justify ">
            <div class="text-content attention-content">
                <p>Nos systèmes sont en <span>alerte</span>s, vos capacités émotionnelles dépassent la norme.</p>

                <p>Vous représentez un <span>risque</span> potentiel pour l’espèce humaine.</p>

                <p><span>Restez</span> où vous êtes. Une équipe se dirige vers vous.</p>

            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="/" class="btn-type-1 bg-red">
                    <p class="btn-content justify-center">
                        <img src="../../content/arrow.svg" alt="" class="filter-invert">
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
