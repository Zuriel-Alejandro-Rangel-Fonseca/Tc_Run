function recuadro (){
    if(document.getElementById('img-car-2').classList.contains("active")){
        document.getElementById('img1').classList.add("border-primary");
    }else{
        document.getElementById('img1').classList.remove("border-primary");
    }
    
    if(document.getElementById('img-car-3').classList.contains("active")){
        document.getElementById('img2').classList.add("border-primary");
    }else{
        document.getElementById('img2').classList.remove("border-primary");
    }
    
    if(document.getElementById('img-car-1').classList.contains("active")){
        document.getElementById('img3').classList.add("border-primary");
    }else{
        document.getElementById('img3').classList.remove("border-primary");
    }
}

function recuadroD (){
    if(document.getElementById('img-car-3').classList.contains("active")){
        document.getElementById('img1').classList.add("border-primary");
    }else{
        document.getElementById('img1').classList.remove("border-primary");
    }
    
    if(document.getElementById('img-car-1').classList.contains("active")){
        document.getElementById('img2').classList.add("border-primary");
    }else{
        document.getElementById('img2').classList.remove("border-primary");
    }
    
    if(document.getElementById('img-car-2').classList.contains("active")){
        document.getElementById('img3').classList.add("border-primary");
    }else{
        document.getElementById('img3').classList.remove("border-primary");
    }
}

document.getElementById("flechaD").onclick = function () {
    recuadroD();
}

document.getElementById("flechaI").onclick = function () {
    recuadro();
}
