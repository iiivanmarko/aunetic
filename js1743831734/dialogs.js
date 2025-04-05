export function initDialogs(){

    const mobilemenu = document.querySelector("[data-mobilemenu]");
const dialogs = document.querySelectorAll('[data-dialog]')
dialogs.forEach(dialog => {
    dialog.addEventListener("click",()=>{
        mobilemenu.classList.remove("open");
        document.querySelector(`[data-${dialog.dataset.dialog}]`).showModal()
    })
});







}