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
            <div class="after-head">
                <div class="text-content">
                    <h1>Contexte : </h1>
                </div>
            </div>
            <div class="text-content height-100">
                <p>Nous sommes en <span>2089</span>, l'évolution technologique a pris le dessus sur notre civilisation, tissant un monde où les contrastes s'affrontent.</p>
                
                <p>Ici, la richesse et la pauvreté se livrent un duel, où les bâtiments high-tech côtoient les ruines.</p>
                
                <p>Dans cette ère nouvelle, <span>l'humanité n'est plus seule</span>.</p>

                <p>
                    Elle partage désormais son existence avec des créatures artificielles innovantes : les synthétiques.
                    Ces êtres, distincts des humains par leur nature, possèdent une <span>capacité étonnante</span> à se fondre dans la masse, à s'intégrer à notre quotidien sans éveiller de soupçons.
                </p>
                
                <p>Pourtant, malgré les avancées fascinantes, une <span>ombre</span> plane sur cette ère de renouveau.</p>
                
                <p>Le doute s'installe : Si les synthétiques parviennent à imiter les traits distinctifs de l'humanité, <span>que va t-il nous arriver</span> ? </p>
            </div>
            <div class="button-wrapper">
                <div class="button-content">
                    <Link href="accueil" class="btn-type-1 btn-type-1-alt">
                        <p class="btn-content">retour</p>
                    </Link>
                </div>
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
