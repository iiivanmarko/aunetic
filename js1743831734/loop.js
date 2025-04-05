export function looping(){
    
const loops = document.querySelectorAll('[data-loop]')
if(loops.length == undefined) return

loops.forEach(loopdiv => {
    
    {
        
        let x = 0
        const one = loopdiv.querySelector('[data-one]')
        const mover = loopdiv.querySelector('.mover')
        gsap.ticker.add(loop)
        
        function loop() {
            
            x-=1
            if( x <= one.getBoundingClientRect().width*-1){
                
                x=0
                
            }
            gsap.set(mover,{x:x,ease:Linear.easeInOut,repeat:-1})
        }
    }
    
});
}