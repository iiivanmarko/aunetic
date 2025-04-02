
  
const faqboxs = document.querySelectorAll('.faqbox')
    
    



faqboxs.forEach(fbox => {
    const q = fbox.querySelector(".q")


    const a = fbox.querySelector(".a")

    q.addEventListener("click",()=>{
       const actives = document.querySelectorAll('.active')
       actives.forEach(a => {

        if(a == fbox) return
        a.classList.remove("active")
        
       });

        if(q.parentNode.classList.contains("active")) {
            
            q.parentNode.classList.remove("active")
            
            return}

        q.parentNode.classList.add("active")

        
        // gsap.delayedCall(.3,()=>{

        //     const header = document.querySelector('.desktopmenu').getBoundingClientRect().height
        //     const top = document.querySelector('.top').getBoundingClientRect().height
            
        //     let space = header;
        //     if(header == 0){
        //         space = top
        //     }
            
        //     const scrollAmm = (window.scrollY + q.getBoundingClientRect().top) - space
            
            
        //     window.scrollTo(0,scrollAmm)
        // })

    })



});




const opened = new URLSearchParams(window.location.search).get("q")


if(opened != undefined){
    const q = faqboxs[opened].querySelector(".q")
    q.click()

            gsap.delayedCall(.3,()=>{

            const header = document.querySelector('.desktopmenu').getBoundingClientRect().height
            const top = document.querySelector('.top').getBoundingClientRect().height
            
            let space = header;
            if(header == 0){
                space = top
            }
            
            const scrollAmm = (window.scrollY + q.getBoundingClientRect().top) - space
            
            
            window.scrollTo(0,scrollAmm)
        })
}

