

export function getLng(){
    
    
    const getLng = new URLSearchParams(parent.location.search).get("lng") 
    let lng = getLng == undefined ? "en" : getLng

    if(
        lng == "en" ||
        lng == "de" ||
        lng == "swe"
    ){
    }else{
        lng = "de"
        
    }

if(LANG != ""){
    lng = LANG
}

return lng
}