
import { initDialogs } from "./dialogs.js";
import { addIcons } from "./handleIcons.js";
import { desktopMenu } from "./handlemainmenu.js";
import { mobileMenu } from "./handlemobilemenu.js";
import { looping } from "./loop.js";


new mobileMenu()
new desktopMenu()

// addInterest()
// addIcons()
initDialogs()
console.log(page);

looping()
window.addEventListener("load",()=>{
    gsap.to('.loader',{duration:1,autoAlpha:0})

    const menus = document.querySelectorAll('.menu button')
    
    
    menus.forEach(btn => {
        console.log(btn);
        
        btn.dataset.demo = page
    });

})