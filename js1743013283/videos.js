export function loadvideos(){

    const rndVid = [0,1,2,4,5,6,7,8];
    const video = document.querySelector('[data-video]')
    video.src = `img/videos/${ gsap.utils.random(rndVid)}.mp4`
    video.load()
    
    
    function loadVideo(nr) {
        video.src = `img/videos/${nr}.mp4`
        video.load()
        
    }


window.addEventListener("keydown",(e)=>{

console.log(rndVid.includes(e.key));


if(rndVid.includes( parseInt(e.key))){
  
    
        console.log(rndVid.indexOf(e.key));

        loadVideo(e.key)


    }


})

}