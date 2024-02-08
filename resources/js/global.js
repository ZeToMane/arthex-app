import { ref } from 'vue';

export const firstChoise = ref(null);
console.log(firstChoise)

// Mettre à jour la variable globale
export function updateFirstChoise(value) {
    firstChoise.value = value;
}


export const synthName = ref(0);

// Mettre à jour la variable globale
export function updateSynthName(value) {
    synthName.value = value;
}