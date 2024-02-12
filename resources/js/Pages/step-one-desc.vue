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
                <p><span>"Le Miracle de Saint Just"</span> est une peinture de Rubens réalisée vers 1629. L'œuvre dépeint le martyr de Saint Just, un <span>jeune garçon décapité</span> à neuf ans pour sa foi chrétienne lors des persécutions de Dioclétien au IIIe siècle. Rubens parvient à représenter habilement un <span>corps décapité mais encore animé</span>, avec un expressionnisme remarquable.</p>
            </div>
            <div class="after-head img-container flex-grow-1">
                <img src="../../content/img/Le Miracle de saint Just.webp" alt="" class="img-painting height-100">
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-one-test-one" class="btn-type-1">
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
