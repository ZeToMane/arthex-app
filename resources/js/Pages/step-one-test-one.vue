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
                    <div id="canvas-container" ref="canvas-container" class="canvas-container">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="button-wrapper">
            <div class="button-content btn-big-continue">
                <Link href="step-one-test-one" class="btn-type-1">
                    <p class="btn-content">
                        valider
                        <img src="../../content/arrow.svg" alt="" class="">
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

components:{
    Link
}

const p5canvas = ref(null);

// const createSketch = () => {
//     new p5((p) => {
//         let canvas;
//         let containerWidth;
//         let containerHeight;

//         p.setup = () => {
//             containerWidth = document.getElementById('canvas-container').clientWidth;
//             // containerHeight = document.getElementById('canvas-container').clientHeight;
//             containerHeight = 206;
//             canvas = p.createCanvas(containerWidth, containerHeight);
//             canvas.parent('canvas-container'); // Attach canvas to the container
//             p.background(220);
//         };

//         p.draw = () => {
//             // Drawing logic here
//             p.background(100);
//         };
//     });
// };

const createSketch = (p) => {
    new p5((p) => {
            let canvas;
            let containerWidth;
            let containerHeight;
            let scaleTri = 200;

        p.setup = () => {
            // p.setAttributes('antialias', false); // Setting antialias attribute
            // p.pixelDensity(0.5);
            containerWidth = document.getElementById('canvas-container').clientWidth;
            // containerHeight = document.getElementById('canvas-container').clientHeight;
            containerHeight = 206;
            canvas = p.createCanvas(containerWidth, containerHeight, p.WEBGL);
            canvas.parent('canvas-container');
            p.cam = p.createCamera();
            p.cam.lookAt(scaleTri / 2, -scaleTri/3, -scaleTri / 2);
        };

        p.draw = () => {
            p.orbitControl(1, 0, 1);

            p.background(255);

            //p.fill(0);

            // Draw your 3D scene here
            // First face
            p.fill(255); // Set fill color to yellow
            p.beginShape();
            p.vertex(0, 0, 0);
            p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2);
            p.vertex(scaleTri, 0, 0);
            p.endShape();

            p.beginShape();
            p.vertex(0, 0, -scaleTri);
            p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2);
            p.vertex(scaleTri, 0, -scaleTri);
            p.endShape();

            p.beginShape();
            p.vertex(0, 0, 0);
            p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2);
            p.vertex(0, 0, -scaleTri);
            p.endShape();

            p.beginShape();
            p.vertex(scaleTri, 0, 0);
            p.vertex(scaleTri / 2, -scaleTri, -scaleTri / 2);
            p.vertex(scaleTri, 0, -scaleTri);
            p.endShape();

            // Draw the lines
            p.line(scaleTri, 0, 0, scaleTri, 0, -scaleTri);
            p.line(0, 0, 0, 0, 0, -scaleTri);

            let rectX = 0;
            let rectY = 0;
            let rectZ = 0;

            p.push();
            p.fill(0);
            p.translate(rectX, rectY, rectZ);
            p.rotateY(p.atan2(p.cam.eyeX - rectX, p.cam.eyeZ - rectZ));
            p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX, rectZ)));
            p.rect(0, 0, scaleTri / 2, 50);
            p.pop();

            p.push();
            p.fill(0);
            p.translate(rectX + scaleTri, rectY, rectZ);
            p.rotateY(p.atan2(p.cam.eyeX - rectX + scaleTri, p.cam.eyeZ - rectZ));
            p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX + scaleTri / 2, rectZ)));
            p.rect(0, 0, scaleTri / 2, 50);
            p.pop();

            p.push();
            p.fill(0);
            p.translate(rectX, rectY, rectZ - scaleTri);
            p.rotateY(p.atan2(p.cam.eyeX - rectX, p.cam.eyeZ - rectZ - scaleTri));
            p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX, rectZ - scaleTri)));
            p.rect(0, 0, scaleTri / 2, 50);
            p.pop();

            p.push();
            p.fill(0);
            p.translate(rectX + scaleTri, rectY, rectZ - scaleTri);
            p.rotateY(p.atan2(p.cam.eyeX - rectX + scaleTri, p.cam.eyeZ - rectZ - scaleTri));
            p.rotateX(-p.atan2(p.cam.eyeY - rectY, p.dist(p.cam.eyeX, p.cam.eyeZ, rectX + scaleTri / 2, rectZ - scaleTri)));
            p.rect(0, 0, scaleTri / 2, 50);
            p.pop();
        };
    });
};

onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });

    // new p5(this.createSketch, this.$refs.canvas-container);
    createSketch();
});

</script>
