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
                    <h1>Contexte : </h1>
                </div>
            </div>
            <div class="text-content height-100">
                    <p>Nous sommes en 2089, l'<span>évolution technologique</span> a pris le dessus sur notre civilisation, tissant un monde où les contrastes s'affrontent. </p>
                    
                    <p>Ici, la richesse et la pauvreté se livrent un duel, où les <span>bâtiments high-tech</span> côtoient les <span>ruines</span>.</p>

                    <p>
                        Dans cette ère nouvelle, l'humanité n'est plus seule. Elle partage désormais son existence avec des <span>créatures artificielles</span> innovantes : les <span>synthétiques</span>. Ces êtres, distincts des humains par leur nature, possèdent une capacité étonnante à se fondre dans la masse, à s'intégrer à notre quotidien sans éveiller de soupçons.
                        Pourtant, malgré les avancées fascinantes, une ombre plane sur cette ère de renouveau.
                    </p>
<p></p>
                    <p>Le doute s'installe : Si les synthétiques parviennent à <span>imiter</span> les traits distinctifs de <span>l'humanité</span>, <span>que va t-il nous arriver ?</span></p>
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
import { Link } from '@inertiajs/vue3';

components:{
    Link
}
</script>
