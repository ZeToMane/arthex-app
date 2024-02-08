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

        <div class="content content-unset-justify">
            <div class="text-content">
                <p>Le tableau de <span>Rubens</span> dépeint le <span>martyre de Saint Georges</span>, qui refuse de sacrifier aux idoles malgré les tortures infligées par <span>Dioclétien</span>. La composition présente le saint sans armure, entouré d'un prêtre et de putti offrant une couronne de laurier, symbole du triomphe sur <span>le mal et la mort</span>.</p>
            </div>
            <div class="after-head img-container flex-grow-1">
                <img src="../../content/logo.svg" alt="" class="img-painting height-100">
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
