import { initDialogs } from "./dialogs.js";
import { desktopMenu } from "./handlemainmenu.js";
import { mobileMenu } from "./handlemobilemenu.js";
import { looping } from "./loop.js";
import { loadvideos } from "./videos.js";


loadvideos()
new mobileMenu()
new desktopMenu()

initDialogs()

looping()

window.addEventListener("load",()=>{
    gsap.to('.loader',{duration:1,autoAlpha:0})
})
