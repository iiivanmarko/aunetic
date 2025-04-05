import { getLng } from "./getlng.js";
import { structure } from "./structure.js";

const lng = getLng()


const desktopmenu = document.querySelector("[data-desktopmenu]");


export class desktopMenu {
  constructor() {
    this.additems();


    window.addEventListener("scroll",()=>{
      if(window.scrollY != 0){
        document.body.classList.add("scrolled")
      }else{
        document.body.classList.remove("scrolled")

      }
    })


  }


  additems() {
    structure.forEach((item) => {

      if(item.type =="logo"){
        this.addLogo()
      }
  
  
      if (item.type == "product" || item.type == "language" ) {
        this.addProduct(item);
        
      }
      if (item.type == "single") {
        this.addanchor(item[lng].replace("<br>",""), "single", "a");
      }
      if (item.type == "newsletter") {
        this.adddialog(item[lng].replace("<br>",""), item.dialog, "a","newsletter");
      }
      if (item.type == "dialog") {
        this.adddialog(item[lng].replace("<br>",""), item.dialog, "a");
      }
      if (item.type == "button") {
        this.addanchor(item[lng], "", "button");
      }
    //   if (item.type == "regular") {
    //     this.addanchor(item[lng], "invert", "a");
    //   }
    });
  }

  addClass(cls){

this.item.classList.add(cls)

  }
  addProduct(item) {
    const holder = document.createElement('div')

    holder.classList.add("product")
    const product = document.createElement('div')
    product.innerHTML = item[lng]
    holder.append(product)
    const subpages = document.createElement('div')
    subpages.classList.add("subpage")
    holder.append(subpages)
    desktopmenu.append(holder)

    if(item.type == "language"){
      item.subpages[lng].forEach(lng => {
        this.addLng(lng,subpages);
        
      });
      return
    } 

    item.subpages.forEach((subpage) => {

        this.addanchor(subpage[lng].replace("<br>",""), "single", "a",subpages,item);

        
        
    });
    

  }

  addButton(item){

const button = document.createElement('button')
button.classList.add("invert")
button.textContent = item

desktopmenu.append(button);



  }

  add(item){

    const i = document.createElement(item)
    desktopmenu.append(i);

  }

  addanchor(text, cls, type,container) {
    const elm = document.createElement(type);

    if (cls != "") {
      elm.classList.add(cls);
    }



    if(type == "button"){
      
      elm.addEventListener("click",()=>{
        location.href = `Book-a-demo-${lng}`
      })

    }
    
    if(type == "a"){
      elm.href =text
      .replace("<br>","")
      .replace("/","")
      .replace(/\s+/g,"-")+"-"+lng
    }



$.post("php/createPage.php",{page:text.replace("<br>","")
  .replace("/","")
  .replace(/\s+/g,"-")+"-"+lng})


    elm.innerHTML = text;
    if(container == undefined){
        desktopmenu.append(elm);
    }else{
     
        container.append(elm);

    }
  }
  adddialog(text, dialog, type,cls) {
    const elm = document.createElement(type);


    elm.classList.add(cls)
    elm.innerHTML = text;
 elm.dataset.dialog = dialog
        desktopmenu.append(elm);

  }

  addLng(text,container) {
    const elm = document.createElement("a");

    elm.href = "./?lng="+text
    elm.innerHTML = text;
    container.append(elm);
  }

  addLogo(){

    const logo = document.createElement('img')
    logo.src = "img/logo.svg";
    logo.classList.add("menulogo")
    desktopmenu.append(logo);
      logo.addEventListener("click",()=>{
        if(lng == "en"){
          window.location.href = "./"
        }else{
          window.location.href = "./?lng="+lng
          
        }
      })

  }
}
