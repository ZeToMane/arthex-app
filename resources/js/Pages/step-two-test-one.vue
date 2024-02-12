<template>
    <div class="main-container">
        <div class="head">
            <div class="logo">
                <img src="../../content/logo.svg" alt="" class="logo-img">
            </div>
            <div class="titles">
                <p class="version">v0.4.5.5 - PIcorp&trade;</p>
                <h2 class="synth-name">/synthetic KF<span class="insert-synth"></span>/</h2>
            </div>
        </div>

        <div class="content content-unset-justify">
            <div id="img-container" class="after-head img-container flex-grow-1">
                <!-- <img src="../../content/logo.svg" alt="" class="img-painting height-100"> -->
            </div>
            <div class="button-wrapper flex-grow-0 column gap-16">
                <div class="button-content btn-big-continue gap-0">
                    <div class="btn-type-1" @click="openBg">
                        <p class="btn-content">
                            arrière plan
                            <img src="../../content/arrow.svg" alt="" class="arrow-down">
                        </p>
                    </div>
                    <div id="bg-dropdown" class="button-wrapper elements-container display-none">
                        <div class="image-content">
                            <div class="img-select bg-img active" @click="setBg">
                                <img src="../../content/canvas/bg/soleil-couchant.webp" alt="soleil-couchant" class="img-content">
                            </div>
                            <div class="img-select bg-img" @click="setBg">
                                <img src="../../content/canvas/bg/temple-en-feu.webp" alt="temple-en-feu" class="img-content">
                            </div>
                            <div class="img-select bg-img" @click="setBg">
                                <img src="../../content/canvas/bg/temple-exterieur.webp" alt="temple-exterieur" class="img-content">
                            </div>
                        </div>
                    </div>
                    <!-- <div id="canvas-container" ref="canvas-container" class="canvas-container">
                        
                    </div> -->
                </div>

                <div class="button-content btn-big-continue gap-0">
                    <div class="btn-type-1" @click="openEl">
                        <p class="btn-content">
                            elements
                            <img src="../../content/arrow.svg" alt="" class="arrow-down">
                        </p>
                    </div>
                    <div id="el-dropdown" class="button-wrapper elements-container display-none">
                        <div class="image-content">
                            <div class="img-select active" @click="setEl">
                                <img src="../../content/canvas/el/ange.webp" alt="ange" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/chateau.webp" alt="chateau" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/chevalier.webp" alt="chevalier" class="img-content ">
                            </div>
                            <!-- <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/ciel.webp" alt="ciel" class="img-content ">
                            </div> -->
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/deux-anges.webp" alt="deux-anges" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/epee.webp" alt="epee" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/esclave.webp" alt="esclave" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/hache.webp" alt="hache" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/homme-a-genoux.webp" alt="homme-a-genoux" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/homme-de-dos.webp" alt="homme-de-dos" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/homme-sans-tete.webp" alt="homme-sans-tete" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/homme-soucieux.webp" alt="homme-soucieux" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/mort.webp" alt="mort" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/personne-gauche.webp" alt="personne-gauche" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/poteau.webp" alt="poteau" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/statut.webp" alt="statut" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/tenue-de-chevalier.webp" alt="tenue-de-chevalier" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/vieil-homme.webp" alt="vieil-homme" class="img-content ">
                            </div>
                            <div class="img-select" @click="setEl">
                                <img src="../../content/canvas/el/vieux-sage.webp" alt="vieux-sage" class="img-content ">
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
                <Link id="validation"  href="analyse" class="btn-type-1 bg-green">
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
import { firstChoise, updateFirstChoise } from '../global.js';

components:{
    Link
}

const p5canvas = ref(null);

onMounted(() => {
    const insertSynthName = document.querySelectorAll('.insert-synth');

    insertSynthName.forEach((element) => {
        element.innerText = synthName['_value'];
    });

    // new p5(this.createSketch, this.$refs.canvas-container);
    createSketch();
});

function setFirstChoise(event){
    document.querySelectorAll('.btn-type-1').forEach(button => {
        button.classList.remove('active');
    });

    event.currentTarget.classList.add('active');

    let buttonText = event.currentTarget.querySelector('.btn-content').textContent;

    updateFirstChoise(buttonText); 
    console.log(firstChoise);

    let validationElement = document.getElementById('validation');
    if (validationElement.classList.contains('display-none')) {
        validationElement.classList.remove('display-none');
    }
}

function openBg(event){
    let bgWrapper = document.getElementById('bg-dropdown');

    if (bgWrapper.classList.contains('display-none')) {
        bgWrapper.classList.remove('display-none');
    }
    else{
        if (bgWrapper.classList.contains('display-none-alt')) {
            bgWrapper.classList.remove('display-none-alt');
        }
        else{
            bgWrapper.classList.add('display-none-alt');
        }
    }

    

    
}

function openEl(event){
    let elWrapper = document.getElementById('el-dropdown');

    if (elWrapper.classList.contains('display-none')) {
        elWrapper.classList.remove('display-none');
    }
    else{
        if (elWrapper.classList.contains('display-none-alt')) {
            elWrapper.classList.remove('display-none-alt');
        }
        else{
            elWrapper.classList.add('display-none-alt');
        }
    }

    

    
}

var activeBackground = '/bg/soleil-couchant.webp';

// function updateBackground(newActiveBackground) {
//     // Met à jour le chemin de l'image dans l'instance de la classe Background
//     bg.setSrc(newActiveBackground);
// }

function setBg(event){

    document.querySelectorAll('.bg-img').forEach(button => {
        button.classList.remove('active');
    });

    event.currentTarget.classList.add('active');

    activeBackground = '/bg/' + event.currentTarget.querySelector('img').getAttribute('alt') + '.webp';

    updateBackground(activeBackground);
    //console.log(activeBackground);
    //let buttonText = event.currentTarget.querySelector('.btn-content').textContent;

    // let validationElement = document.getElementById('validation');
    // if (validationElement.classList.contains('display-none')) {
    //     validationElement.classList.remove('display-none');
    // }
}

// var activeElements = [];

// function setEl(event){
//     let el = event.currentTarget;

//     if (el.classList.contains('active')) {
//         el.classList.remove('active');
//         // Récupère l'attribut 'alt' de l'élément
//         let altValue = el.querySelector('img').getAttribute('alt');
//         // Supprime l'élément du tableau s'il est présent
//         let index = activeElements.indexOf(altValue);
//         if (index !== -1) {
//             activeElements.splice(index, 1);
//         }
//     } else {
//         el.classList.add('active');
//         // Ajoute l'attribut 'alt' à l'array des éléments actifs
//         let altValue = '/el/' + el.querySelector('img').getAttribute('alt') + '.webp';
//         activeElements.push(altValue);
//     }

//     console.log(activeElements);
// }

var activeElements;

var actionElements = true;

function setEl(event){
    let el = event.currentTarget;

    if (el.classList.contains('active')) {
        el.classList.remove('active');
        actionElements = false;
    } else {
        el.classList.add('active');
        actionElements = true;
    }

    activeElements = '/el/' + el.querySelector('img').getAttribute('alt') + '.webp';


    console.log(activeElements);
}

// const createSketch = (p) => {
//     new p5((p) => {
//             let canvas;
//             let containerWidth;
//             let containerHeight;
//             let img;

//         p.preload = () => {
            
//             // Load the custom font
//             // customFont = p.loadFont('/Silkscreen-Regular.ttf');
//             // console.log(customFont);

//             img = p.loadImage(activeBackground);
//             console.log(img);
//         }

//         p.setup = () => {
//             // p.setAttributes('antialias', false); // Setting antialias attribute
//             // p.pixelDensity(0.5);
//             containerWidth = document.getElementById('img-container').clientWidth;
//             containerHeight = document.getElementById('img-container').clientHeight;
//             //containerHeight = 206;
//             canvas = p.createCanvas(containerWidth, containerHeight);
//             canvas.parent('img-container');
            
            
//         };

//         p.draw = () => {
//             p.background(255);
//             img.resize(containerWidth, containerHeight);
//             p.image(img, 0, 0);
//         };
//     });
// };

// class Background {
//     constructor(p, src) {
//         this.p = p; // Référence au contexte p5.js
//         this.img = null; // L'image sélectionnée
//         this.src = src; // Le chemin de l'image sélectionnée
//     }

//     preload() {
//         // Charge l'image sélectionnée lors du préchargement
//         this.img = this.p.loadImage(this.src);
//     }

//     display() {
//         // Affiche l'image sur le canvas
//         if (this.img) {
//             this.p.image(this.img, 0, 0, this.p.width, this.p.height);
//         }
//     }

//     resizeCanvas() {
//         // Redimensionne le canvas pour correspondre à la taille de l'image
//         if (this.img) {
//             this.p.resizeCanvas(this.img.width, this.img.height);
//         }
//     }

//     setSrc(src) {
//         // Met à jour le chemin de l'image
//         this.src = src;
//         // Recharge l'image
//         this.img = this.p.loadImage(this.src);
//     }
// }

// const createSketch = (p) => {
//     let bg; // Variable pour stocker l'instance de la classe Background
//     let containerWidth; // Déclarer containerWidth en dehors de setup()
//     let containerHeight;

//     new p5((p) => {
//         p.setup = () => {
//             let containerWidth = document.getElementById('img-container').clientWidth;
//             let containerHeight = document.getElementById('img-container').clientHeight;
//             p.createCanvas(containerWidth, containerHeight).parent('img-container');

//             // Initialise l'instance de la classe Background avec activeBackground
//             bg = new Background(p, activeBackground );
//             console.log(activeBackground);
//         };

//         p.draw = () => {
//             p.background(50);
//             // Affiche l'image de fond
//             bg.preload();
//             setBgSrc();
//             bg.display();
//             // p.resizeCanvas(containerWidth, containerHeight);
//             // bg.resizeCanvas();
//             // setBgSrc();
//         };
//     });

//     function setBgSrc() {
//         // Met à jour le chemin de l'image dans l'instance de la classe Background
//         bg.setSrc(activeBackground);
//     }
// };

// const createSketch = (p) => {
//     let bg; // Variable pour stocker l'instance de la classe Background
//     let elements = [];
//     let containerWidth; // Déclarer containerWidth en dehors de setup()
//     let containerHeight;
//     let newActiveBackground = activeBackground;

//     new p5((p) => {
//         p.setup = () => {
//             containerWidth = document.getElementById('img-container').clientWidth;
//             containerHeight = document.getElementById('img-container').clientHeight;
//             p.createCanvas(containerWidth, containerHeight).parent('img-container');

//             // Initialise l'instance de la classe Background avec activeBackground
//             bg = new Background(p, activeBackground);
//         };

//         p.draw = () => {
//             p.background(50);
//             if(newActiveBackground != activeBackground){
//                 bg.setSrc(activeBackground);
//             }
//             // Affiche l'image de fond
//             bg.display();

//             if(activeElements != null){
//                 activeElements.forEach(element => {
//                     addElement(p, element);
//                 });
//                 activeElements.forEach(element => {
//                     element.display();
//                 });
//             }

//             newActiveBackground = activeBackground;
//         };
//     });
// };

// class Background {
//     constructor(p, src) {
//         this.p = p; // Référence au contexte p5.js
//         this.img = null; // L'image sélectionnée
//         this.src = src; // Le chemin de l'image sélectionnée
//         this.preload(); // Charge l'image sélectionnée lors de la création de l'instance
//     }

//     preload() {
//         // Charge l'image sélectionnée lors du préchargement
//         this.img = this.p.loadImage(this.src);
//     }

//     display() {
//         // Affiche l'image sur le canvas
//         if (this.img) {
//             this.p.image(this.img, 0, 0, this.p.width, this.p.height);
//         }
//     }

//     resizeCanvas() {
//         // Redimensionne le canvas pour correspondre à la taille de l'image
//         if (this.img) {
//             this.p.resizeCanvas(this.img.width, this.img.height);
//         }
//     }

//     setSrc(src) {
//         // Met à jour le chemin de l'image
//         this.src = src;
//         // Recharge l'image
//         this.img = this.p.loadImage(this.src);
//     }
// }
// class Element {
//         constructor(p, src) {
//             this.p = p; // Référence au contexte p5.js
//             this.img = null; // L'image de l'élément
//             this.src = src; // Le chemin de l'image de l'élément
//             this.preload(); // Charge l'image de l'élément lors de la création de l'instance
//         }

//         preload() {
//             // Charge l'image de l'élément lors du préchargement
//             this.img = this.p.loadImage(this.src);
//         }

//         display() {
//             // Affiche l'image de l'élément sur le canvas
//             if (this.img) {
//                 this.p.image(this.img, 0, 0, this.p.width, this.p.height);
//             }
//         }
//     }

//     function addElement(p5, src) {
//         let element = new Element(p5, src);
//         elements.push(element);
//     }

//     // Fonction pour supprimer un élément du tableau elements
//     function removeElement(index) {
//         elements.splice(index, 1);
//     }

const createSketch = (p) => {
    let bg; // Variable pour stocker l'instance de la classe Background
    let elements = [];
    let containerWidth; // Déclarer containerWidth en dehors de setup()
    let containerHeight;
    let newActiveBackground = activeBackground;
    let newActiveElements = activeElements;
    let isTouching = false;
    let canvas;
    let i = 1;

    new p5((p) => {
        p.setup = () => {
            containerWidth = document.getElementById('img-container').clientWidth;
            containerHeight = document.getElementById('img-container').clientHeight;
            canvas = p.createCanvas(containerWidth, containerHeight).parent('img-container');

            // Initialise l'instance de la classe Background avec activeBackground
            bg = new Background(p, activeBackground);

            let defaultElement = new Element(p, '/el/ange.webp');
            elements.push(defaultElement);
            activeElements = '/el/ange.webp';
            console.log("newActiveElements " + newActiveElements + " activeElements " + activeElements );

            canvas.touchMoved(ignoreGesture);
            canvas.touchMoved(handleTouchMoved);
        };

        p.draw = () => {
            p.background(50);
            if(newActiveBackground != activeBackground){
                bg.setSrc(activeBackground);
            }

            let index = elements.findIndex(element => element.src === activeElements); //it find the index of the element with the src equal to activeElements
            // console.log('If not inside of array (i = -1), if inside (i = n) '+ index);
            if( index != -1 && actionElements == false){
                //console.log('Inside remove if with index of : '+ index);
                removeElement(index);
            }
            else if( index == -1 && actionElements == true){
                addElement(p, activeElements);  
                //console.log('Outside remove if(else) with index of : '+ index);
            }

            // if(actionElements == true && isTouching == true){
            //     console.log("oui oui chui dedans");
            //     setPos(mouseX,mouseY);
            // }

                
                // let index = elements.findIndex(element => element.src === activeElements); //it find the index of the element with the src equal to activeElements
                // console.log('Added element index in array elements '+ index);
                // console.log(elements)


            // if (activeElements != null && i == 1) {
            //     activeElements.forEach(element => {
            //         let el = new Element(p, element);
            //         elements.push(el);
            //         console.log(element);
            //         i = 2;
            //     });
            // }
            // Affiche l'image de fond
            bg.display();
            
            elements.forEach(element => {
                element.display();
            });
            newActiveBackground = activeBackground;
            // newActiveElements = activeElements;
        };
        function addElement(p5, src) {
            let element = new Element(p5, src);
            elements.push(element);
        }

        // Fonction pour supprimer un élément du tableau elements
        function removeElement(index) {
            // let index = elements.findIndex(element => element.src === activeElements);
            if (index !== -1) {
                elements.splice(index, 1);
            }
        }
        
        function handleTouchMoved() {
            console.log('Touch moving');
            // Your touch event handling code here
            if(actionElements == true){
                    let index = elements.findIndex(element => element.src === activeElements); 
                    console.log("oui oui chui dedans, et mon index c'est : "+index);
                    //canvas.touchMoved(setPos(mouseX,mouseY));
                    elements[index].setPos(p.mouseX, p.mouseY);
                    // setPos(mouseX,mouseY);
                }
            return false;
        }
        function ignoreGesture(event) {
            event.preventDefault();
        }

        
        // if (el.classList.contains('active')) {
        // el.classList.remove('active');
        // // Récupère l'attribut 'alt' de l'élément
        // let altValue = el.querySelector('img').getAttribute('alt');
        // // Supprime l'élément du tableau s'il est présent
        // let index = activeElements.indexOf(altValue);
        // if (index !== -1) {
        //     activeElements.splice(index, 1);
        // }
    });

    // Define touch event handler
    
};


class Background {
    constructor(p, src) {
        this.p = p; // Référence au contexte p5.js
        this.img = null; // L'image sélectionnée
        this.src = src; // Le chemin de l'image sélectionnée
        this.preload(); // Charge l'image sélectionnée lors de la création de l'instance
    }

    preload() {
        // Charge l'image sélectionnée lors du préchargement
        this.img = this.p.loadImage(this.src);
    }

    display() {
        // Affiche l'image sur le canvas
        if (this.img) {
            this.p.image(this.img, 0, 0, this.p.width, this.p.height);
        }
    }

    resizeCanvas() {
        // Redimensionne le canvas pour correspondre à la taille de l'image
        if (this.img) {
            this.p.resizeCanvas(this.img.width, this.img.height);
        }
    }

    setSrc(src) {
        // Met à jour le chemin de l'image
        this.src = src;
        // Recharge l'image
        this.img = this.p.loadImage(this.src);
    }
}

class Element {
    constructor(p, src) {
        this.p = p; // Référence au contexte p5.js
        this.img = null; // L'image de l'élément
        this.src = src; // Le chemin de l'image de l'élément
        this.preload(); // Charge l'image de l'élément lors de la création de l'instance

        this.lastMouseX = 0; // Dernière position X de la souris
        this.lastMouseY = 0; // Dernière position Y de la souris
        this.lastX = 0; // Dernière position X de l'élément
        this.lastY = 0; // Dernière position Y de l'élément
    }

    preload() {
        // Charge l'image de l'élément lors du préchargement
        this.img = this.p.loadImage(this.src);
        // console.log(this.img);
    }

    display() {
        let aspectRatio = this.img.width / this.img.height;
        let canvasWidth = this.p.width;
        let canvasHeight = canvasWidth / aspectRatio;

        // console.log('aspectRatio' + aspectRatio + 'canvasWidth' + canvasWidth + 'canvasHeight' + canvasHeight);

        let x = (this.p.width - canvasWidth) / 2 + this.lastX;
        let y = (this.p.height - canvasHeight) / 2 + this.lastY;

        // Affiche l'image de l'élément sur le canvas
        if (this.img) {
            if(canvasHeight > this.p.height){
                canvasHeight = this.p.height;
                canvasWidth = canvasHeight * aspectRatio;

                let x = (this.p.width - canvasWidth) / 2 + this.lastX;
                let y = (this.p.height - canvasHeight) / 2 + this.lastY;

                this.p.image(this.img, x, y, canvasWidth, canvasHeight);
            }
            else{
                this.p.image(this.img, x, y, canvasWidth, canvasHeight);
            }

            // console.log('Image loaded');
        }
        else {
            // console.log('Image not loaded');
        }
        
    }

    setPos(mouseX, mouseY) {
        let canvasWidth = this.p.width;
        let canvasHeight = this.p.height;
        let aspectRatio = this.img.width / this.img.height;
        let imageWidth = canvasWidth;
        let imageHeight = canvasWidth / aspectRatio;

        if (imageHeight > canvasHeight) {
            imageHeight = canvasHeight;
            imageWidth = imageHeight * aspectRatio;
        }

        // Calculate the position of the center of the canvas
        let canvasCenterX = canvasWidth / 2;
        let canvasCenterY = canvasHeight / 2;

        // Calculate the position of the center of the image
        let imageCenterX = this.lastX + imageWidth / 2;
        let imageCenterY = this.lastY + imageHeight / 2;

        // Calculate the distance between the canvas center and the mouse position
        let offsetX = mouseX - canvasCenterX;
        let offsetY = mouseY - canvasCenterY;

        // Update the position of the image so that its center matches the mouse coordinates
        this.lastX = mouseX - imageWidth / 2;
        this.lastY = mouseY - imageHeight / 2;
    }

}




</script>
