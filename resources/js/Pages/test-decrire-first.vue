<template>
    <h1>Quoicubeh</h1>
    <div v-for="choise in user_choises" :key="choise.id">
        <p>{{ choise.firstChoise }}</p>
        <p>{{ choise.secondChoise }}</p>
        <p>{{ choise.thirdChoise }}</p>


        <div class="btn-test" @click="setFirstChoise"><p>Emotion</p></div>
        <Link href="global" class="btn-test"><p>Emotion</p></Link>
        <div class="btn-test"><p>Emotion</p></div>
    </div>
    <!-- <div class="btn btn-primary"><p>Emotion1</p></div>
    <div class="btn btn-primary"><p>Emotion2</p></div>
    <div class="btn btn-primary"><p>Emotion3</p></div> -->
</template>

<script setup>
import { defineProps, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { firstChoise, updateFirstChoise } from '../global.js';

components:{
    Link
}

defineProps({
    user_choises: Array
});

// onMounted(() => {
//     router.post('/uniqueid');
    
// });

function setFirstChoise() {
    updateFirstChoise("Quoicubeh"); 
    console.log(firstChoise); 

    router.post('/uniqueid', {
        first: firstChoise
    });
}


</script>
