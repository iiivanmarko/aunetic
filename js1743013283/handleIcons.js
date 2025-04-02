export function addIcons(){

   const Icons =  ['settings_accessibility', 'ios_share', 'file_open', 'add_task', 'token', 'view_timeline', 'dynamic_form', 'swipe_right', 
        'install_desktop', 'browse_activity', 'send_time_extension', 'quick_reference_all', 'acute', 'sweep', 'rule_settings', 'drag_click',
        'send_time_extension', 'quick_reference_all', 'acute', 'sweep', 'rule_settings', 'drag_click',
        'send_time_extension', 'quick_reference_all', 'acute', 'sweep', 'rule_settings', 'drag_click'
      ]

    const holders = document.querySelectorAll('.icon span')
    const usedItems = []

    holders.forEach(h => {
        let rndItem = Icons[Math.floor(gsap.utils.random(0,Icons.length)) ]
        while(usedItems.includes(rndItem)){
          rndItem = Icons[Math.floor(gsap.utils.random(0,Icons.length)) ]
        }

        usedItems.push(rndItem)
        
        
        h.textContent = rndItem

        
    });


}