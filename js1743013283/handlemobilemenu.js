import { getLng } from "./getlng.js";
import { structure } from "./structure.js";

const lng = getLng()

const sandwich = document.querySelector("[data-sandwich]");
const mobilemenu = document.querySelector("[data-mobilemenu]");
const mobilemenucontent = document.querySelector("[data-mobilemenucontent]");
const mobilemenuclose = document.querySelector("[data-mobilemenuclose]");



export class mobileMenu {
  constructor() {
    this.initopener();
    this.additems();
  }

  initopener() {
    sandwich.addEventListener("click", () => {
      mobilemenu.classList.add("open");
    });
    mobilemenuclose.addEventListener("click", () => {
      mobilemenu.classList.remove("open");
    });
  }

  additems() {
    structure.forEach((item) => {
      if (item.type == "product") {
        this.addProduct(item);
        this.add("hr")
      }
      if (item.type == "language") {
        this.addProduct(item);
        this.add("hr")
      }
      if (item.type == "single") {
        this.addanchor(item[lng].replace("<br>",""), "mobilesingle", "a");
        this.add("hr")
        
      }
      if (item.type == "newsletter") {
        this.adddialog(item[lng].replace("<br>",""), item.dialog, "a","newsletter");
        this.add("hr")
        
      }
      if (item.type == "dialog") {
        this.adddialog(item[lng].replace("<br>",""), item.dialog, "a");
        this.add("hr")
      }
      if (item.type == "button") {
        // this.addButton(item[lng], "mobilesingle", "a");
        this.addanchor(item[lng], "invert", "button");
      }
      if (item.type == "regular") {
        this.additem(item[lng], "invert", "a");
      }
    });
  }

  addProduct(item) {
    this.addanchor(item[lng].replace("<br>",""), "mobileproduct", "p");
    
    if(item.type == "language"){
      item.subpages[lng].forEach(lng => {
        this.addLng(lng);
        
      });
      return
    } 
    item.subpages.forEach((subpage) => {
      this.addanchor(subpage[lng], "mobilesubpage", "a");
    });
  }

  addButton(item){

const button = document.createElement('button')
button.classList.add("invert")
button.textContent = item

mobilemenucontent.append(button);

  }

  add(item){

    const i = document.createElement(item)
    mobilemenucontent.append(i);

  }

  addanchor(text, cls, type) {
    const elm = document.createElement(type);

    if (cls != "") {
      elm.classList.add(cls);
    }
    if(type == "a"){
      elm.href =text
      .replace("<br>","")
      .replace("/","")
      .replace(/\s+/g,"-")+"-"+lng
    }
    elm.innerHTML = text;
    mobilemenucontent.append(elm);
  }

  adddialog(text, dialog, type,cls) {
    const elm = document.createElement(type);

elm.classList.add(cls)

    elm.innerHTML = text;
 elm.dataset.dialog = dialog
 mobilemenucontent.append(elm);

  }
  addLng(text) {
    const elm = document.createElement("a");

    elm.href = "./?lng="+text
    elm.innerHTML = text;
    mobilemenucontent.append(elm);
  }
}
