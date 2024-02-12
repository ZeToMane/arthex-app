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
            <div class="after-head">
                <div class="text-content">
                    <h1>Test N°2 : </h1>
                </div>
            </div>
            <div class="text-content">
                <p>Vous devez <span>générer un tableau</span> suscitant une émotion familière à partir des éléments précédemment observés.</p>

                <p>Veuillez sélectionner des <span>fragments visuels</span> tirés d'œuvres baroques et les assembler de manière à représenter de façon claire et concise <span>cette émotion</span>.</p>

                <p>Choisissez un <span>arrière-plan</span> puis disposez plusieurs <span>éléments</span> des tableaux à l'aide de votre <span>doigt</span></p>
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-two-test-one" class="btn-type-1">
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

    typeWriterEffect();
});
</script>
