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
            <div class="text-content flex-grow-0">
                <p>Vous avez trouvé l’oeuvre !</p>

                <p>Maintenant , veuillez <span>sélectionner</span> l’émotion correspondante. </p>
            </div>
            <div class="after-head img-container flex-grow-0">
                <img src="../../content/logo.svg" alt="" class="img-painting height-100">
            </div>
            <div class="button-wrapper flex-grow-1">
                <div class="button-content btn-big-continue gap-0">
                    <Link href="step-one-test-one" class="btn-type-1">
                        <p class="btn-content">
                            choix
                            <img src="../../content/arrow.svg" alt="" class="arrow-down">
                        </p>
                    </Link>
                    <div class="button-wrapper canvas-container">
                        <div class="button-content justify-center">
                            <div class="btn-type-1 btn-type-1-alt p-4-8" @click="setSecondChoise">
                                <p class="btn-content">trouble</p>
                            </div>
                            <div class="btn-type-1 btn-type-1-alt p-4-8" @click="setSecondChoise">
                                <p class="btn-content">hostilité</p>
                            </div>
                            <div class="btn-type-1 btn-type-1-alt p-4-8" @click="setSecondChoise">
                                <p class="btn-content">espoir</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="canvas-container" ref="canvas-container" class="canvas-container">
                        
                    </div> -->
                </div>
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link id="validation"  href="step-one-desc-third" class="btn-type-1 display-none bg-green">
                    <p class="btn-content color-white">
                        valider
                        <img src="../../content/arrow.svg" alt="" class="filter-invert">
                    </p>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { synthName} from '../global.js';
import p5 from 'p5';
import { secondChoise, updateSecondChoise } from '../global.js';

components:{
    Link
}

// const p5canvas = ref(null);

// const createSketch = (p) => {
//     new p5((p) => {
//             let canvas;
//             let containerWidth;
//             let containerHeight;
//             let scaleTri = 200;
//             let customFont;
//             let value = 255;

//         p.preload = () => {
            
//             // Load the custom font
//             customFont = p.loadFont('/Silkscreen-Regular.ttf');
//             console.log(customFont);
//             // router.get('/fontCustom').then(response => {
//             //     fontPath.value = response.data.fontPath;php
//             //     customFont = p.loadFont(fontPath.value);
//             // });
//         }

//         p.setup = () => {
//             // p.setAttributes('antialias', false); // Setting antialias attribute
//             // p.pixelDensity(0.5);
//             containerWidth = document.getElementById('canvas-container').clientWidth;
//             // containerHeight = document.getElementById('canvas-container').clientHeight;
//             containerHeight = 206;
//             canvas = p.createCanvas(containerWidth, containerHeight, p.WEBGL);
//             canvas.parent('canvas-container');
//             p.cam = p.createCamera();
//             p.cam.lookAt(scaleTri / 2, -scaleTri/3, -scaleTri / 2 - 500);
//             p.textFont(customFont);
            
            
//         };

//         p.draw = () => {
//             p.clear();
//             p.orbitControl(1, 0, 1);

//             p.background(255);
//             let rectX = 0;
//             let rectY = 0;
//             let rectZ = -500;

            
//             // p.push();
//             // p.fill(0);
//             // p.textSize(20);
//             // p.text("vai", 10, 10);
//             // p.pop();

//             //p.fill(0);

//             // Draw your 3D scene here
//             // First face
//             p.fill(0, 0, 0, 0); // Set fill color to yellow
//             p.beginShape();
//             //p.vertex(0, 0, rectZ);
//             p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2 + rectZ);
//             p.vertex(scaleTri, 0, rectZ);
//             p.endShape();

//             p.push();
//             p.translate(0, 0, -scaleTri / 2 + rectZ);
//             p.fill(0);
//             p.rect(scaleTri / 2, -scaleTri - 30, scaleTri / 2 + 30, 50);

//             p.push();
//             p.translate(scaleTri / 2, -scaleTri - 30, 2);
//             p.fill(255);
//             p.textSize(15);
//             p.text("module emotionnel", 15, 18, -100);
//             p.pop();

//             p.pop();

//             p.beginShape();
//             //p.vertex(0, 0, -scaleTri + rectZ);
//             p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2 + rectZ);
//             p.vertex(scaleTri, 0, -scaleTri + rectZ);
//             p.endShape();

//             p.beginShape();
//             p.vertex(0, 0, rectZ);
//             p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2 + rectZ);
//             p.vertex(0, 0, -scaleTri + rectZ);
//             p.endShape();

//             p.beginShape();
//             p.vertex(scaleTri, 0, rectZ);
//             p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2 + rectZ);
//             p.vertex(scaleTri, 0, -scaleTri + rectZ);
//             p.endShape();

//             // Draw the lines
//             //p.line(scaleTri, 0, rectZ, scaleTri, 0, -scaleTri + rectZ);
//             //p.line(0, 0, rectZ, 0, 0, -scaleTri + rectZ);

//             // let rectX = 0;
//             // let rectY = 0;
//             // let rectZ = -20;

//             p.push();
//             p.fill(0);
//             p.translate(rectX, rectY, rectZ);
//             p.rotateY(p.atan2(p.cam.eyeX - rectX, p.cam.eyeZ - rectZ));
//             p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX, rectZ)));
//             p.rect(0, 0, scaleTri / 2, 50);

//             p.push();
//             p.translate(0, 0, 100);
//             p.fill(value);
//             p.textSize(15);
//             p.text("Joie", 25, 25, -100);
//             p.pop();

//             p.pop();

//             p.push();
//             p.fill(0);
//             p.translate(rectX + scaleTri, rectY, rectZ);
//             p.rotateY(p.atan2(p.cam.eyeX - rectX + scaleTri, p.cam.eyeZ - rectZ));
//             p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX + scaleTri / 2, rectZ)));
//             p.rect(0, 0, scaleTri / 2, 50);
//             p.pop();

//             p.push();
//             p.fill(0);
//             p.translate(rectX, rectY, rectZ - scaleTri);
//             p.rotateY(p.atan2(p.cam.eyeX - rectX, p.cam.eyeZ - rectZ - scaleTri));
//             p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX, rectZ - scaleTri)));
//             p.rect(0, 0, scaleTri / 2, 50);
//             p.pop();

//             p.push();
//             p.fill(0);
//             p.translate(rectX + scaleTri, rectY, rectZ - scaleTri);
//             p.rotateY(p.atan2(p.cam.eyeX - rectX + scaleTri, p.cam.eyeZ - rectZ - scaleTri));
//             p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX + scaleTri / 2, rectZ - scaleTri)));
//             p.rect(0, 0, scaleTri / 2, 50);
//             p.pop();
//         };
//     });
// };





onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });

    // new p5(this.createSketch, this.$refs.canvas-container);
    // createSketch();
});

function setSecondChoise(event){
    document.querySelectorAll('.btn-type-1').forEach(button => {
        button.classList.remove('active');
    });

    event.currentTarget.classList.add('active');

    let buttonText = event.currentTarget.querySelector('.btn-content').textContent;

    updateSecondChoise(buttonText); 
    console.log(secondChoise);

    let validationElement = document.getElementById('validation');
    if (validationElement.classList.contains('display-none')) {
        validationElement.classList.remove('display-none');
    }
}

</script>
