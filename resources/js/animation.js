import gsap from 'gsap';
import { TextPlugin } from "gsap/dist/TextPlugin";

export function typeWriterEffect() {
    // Animation for each paragraph
    gsap.registerPlugin(TextPlugin);

    // Select all paragraphs with the class 'anim-typewriter'
    const paragraphs = document.querySelectorAll('.text-content p');


    // Iterate over each paragraph
    paragraphs.forEach((paragraph, index) => {
        // Get the text content of the paragraph
        const textContent = paragraph.innerHTML;
        const text = paragraph.textContent.trim();
        
        // Clear the paragraph's content
        paragraph.textContent = '';

        // Create a new timeline for each paragraph
        const timeline = gsap.timeline({ delay: index * 1.075 }); // Delay each timeline by 0.5 seconds

        // Add the typing animation to the timeline
        timeline.to(paragraph, {
            duration: 1, // Adjust the duration as needed
            text: text, // Set the text using TextPlugin
            ease: "power4.out", // Adjust the easing as needed
            onComplete(){
                timeline.to(paragraph, {
                    text: textContent
                });
            }
        });
    });
}
