import { ref } from 'vue';

export const firstChoise = ref(null);
console.log(firstChoise);

// Mettre à jour la variable globale
export function updateFirstChoise(value) {
    firstChoise.value = value;
}

export const secondChoise = ref(null);
console.log(secondChoise);

// Mettre à jour thirda variable globale
export function updateSecondChoise(value) {
    secondChoise.value = value;
}

export const thirdChoise = ref(null);
console.log(thirdChoise);

// Mettre à jour la variable globale
export function updateThirdChoise(value) {
    thirdChoise.value = value;
}


export const synthName = ref(0);

// Mettre à jour la variable globale
export function updateSynthName(value) {
    synthName.value = value;
}