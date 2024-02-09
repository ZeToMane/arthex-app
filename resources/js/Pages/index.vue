<template>
    <div class="main-container">

        <div class="content content-intro index">
            <div class="loading">
                <div class="bar"></div>
            </div>
            
            <div class="after-head img-container">
                <img src="../../content/logo.svg" alt="" class="logo-index">
            </div>
            <div class="text-content text-accueil">
                <p class="anim-typewriter">Nous sommes le 26 mars 2089 à Bordeaux.</p> 

                <p class="anim-typewriter">Vous êtes un être artificiel.</p>
                
                <p class="anim-typewriter">Vous devez passer un examen obligatoire pour mesurer vos capacités à vous adapter à l’espèce humaine.</p>
            </div>

            <div class="button-wrapper display-none">
                <div class="button-content">
                    <Link href="login" class="btn-type-1 btn-type-1-alt">
                        <p class="btn-content">login</p>
                    </Link>
                </div>
            </div>
        </div>

        

    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Link, router} from '@inertiajs/vue3';
import gsap from 'gsap';
import { TextPlugin } from "gsap/dist/TextPlugin";
import { typeWriterEffect } from '../animation';




components:{
    Link
}

onMounted(() => {
    // router.get('/login');
    // Delay the redirection by 5 seconds
    // setTimeout(() => {
    //     // Redirect to the login page
    //     router.get('/login');
    // }, 1000); // 5000 milliseconds = 5 seconds
    typeWriterEffect();

    const bar = document.querySelector('.bar');

// Utilisez GSAP pour animer la largeur de la barre de 0% à 100% en 5 secondes
    gsap.to(bar, { 
        duration: 3.75, // Durée de l'animation en secondes
        width: "100%", // La valeur cible de la largeur
        ease: "power2.out", // Fonction d'assouplissement (facultatif)
        onComplete(){
            //router.get('/login');
            document.querySelector('.button-wrapper').classList.remove('display-none');

        }
    });
});





</script>
