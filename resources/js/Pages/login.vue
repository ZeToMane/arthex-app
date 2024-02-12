<template>
    <div class="main-container">

        <div class="content content-intro">
            <div class="button-wrapper wrapper-right">
                <Link href="credits" class="button-content">
                    <p class="btn-credit">
                        crédits
                    </p>
                </Link>
            </div>
            <div>
                <div class="after-head img-container">
                    <img src="../../content/logo.svg" alt="" class="logo-index">
                </div>
                <div class="form-serie">
                    <form id="myForm">
                        <label for="">Entrez votre numéro de série à 4 chiffres</label>
                        <input type="text" id="inputField" name="inputField"  placeholder="Ex : 4565" pattern="[0-9]{4}" maxlength="4" required>
                        <div class="btn-type-1">
                            <button class="btn-content" type="submit">connexion</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="button-wrapper">
                <!-- <div class="button-content">
                    <Link href="" class="btn-type-1 btn-type-1-alt">
                        <p class="btn-content">galerie</p>
                    </Link>
                </div> -->
            </div>
        </div>

        

    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Link, router} from '@inertiajs/vue3';
import { synthName, updateSynthName } from '../global.js';




components:{
    Link
}
console.log(synthName); 

onMounted(() => {
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevents the default form submission behavior
        // Get the value of the input field
        const inputData = document.getElementById('inputField').value;
        updateSynthName(inputData); 
        console.log(synthName);
        
        router.get('/accueil');
    });
});
</script>
