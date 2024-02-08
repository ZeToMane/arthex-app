<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthétique KF<span class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="content content-unset-justify ">
            <div class="after-head">
                <div class="text-content">
                    <h1>Test N°1 : </h1>
                </div>
            </div>
            <div class="text-content">
                <p>Vous devrez <span>localiser le tableau</span> décrit et affiché à l'écran.</p>

                <p>Une fois sur place, <span>imprégnez-vous</span> du tableau et <span>sélectionnez</span> l'émotion qui en ressort.</p>
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-one-desc" class="btn-type-1">
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
