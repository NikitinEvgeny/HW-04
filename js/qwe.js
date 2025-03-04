let left = document.querySelector('.pointers_left');
let right = document.querySelector('.pointers_right');
let conteinerBloc = document.querySelector('.conteiner_bloc');
let conteiner = document.querySelector('.conteiner');
let conteinerImg =  document.querySelectorAll('.conteiner_img');
let closeModalB = document.querySelector('.closeModalB');
let modalBFit = document.querySelector('.modalB_fit');
let modal = document.querySelector('.modal');
let imgFit = document.querySelectorAll('.img_fit');
let imgModal = document.querySelector('.img_modal');
let modalBig = document.querySelector('#modalB');
let modalBImg = document.querySelector('.modalB_img');
let modalBPointersleft = document.querySelector('.modalB_pointers_left');
let modalBPointersRight = document.querySelector('.modalB_pointers_right');   
let number = document.querySelector('#number');                                            
let modalBpointersblocleft = document.querySelector   (".modalB_pointers_bloc_left")


const slide = (slider,step,period) => () => {
    
    const startTime = Date.now()
    const startLeft = slider.scrollLeft
    const render = () => {
        const dt = Date.now() - startTime
        if(dt < period){
            slider.scrollLeft = startLeft + step * dt / period 
            requestAnimationFrame(render)
        }
    }
    requestAnimationFrame(render)
    
}

right.addEventListener("click", slide(conteinerBloc,150,200))
left.addEventListener("click", slide(conteinerBloc, -150,200))
modal.addEventListener("click", sholBig)
closeModalB.addEventListener("click", closeSholBig)
modalBpointersblocleft.addEventListener("click", modalleft)
modalBPointersRight.addEventListener("click", modalRigh)



for (let imgs of imgFit) {
  imgs.addEventListener("click", shol);
}

function  shol (event) {
let img_img_Fit = modal.querySelector('img');
let array1 = Array.from(imgFit)
let img = document.createElement('img');
img.src = array1[event.target.id -1].src
img.id = event.target.id;
img.classList.add('img_modal')
img_img_Fit.parentNode.removeChild(img_img_Fit)
modal.appendChild(img)
number.textContent = event.target.id
/*добавления рамки при клике*/
for (const x of conteinerImg)
{
   x.classList.remove('new_class');
}
let y = array1[event.target.id -1];
y.parentNode.classList.add("new_class")
};



function  sholBig (event) {
let modalBImgFit = modalBImg.querySelector('img');
modalBig.classList.remove('hide'); 
let modalImg =  modal.querySelector('img');
let img = document.createElement('img');
img.src = modalImg.getAttribute('src');
img.id = event.target.id;
img.classList.add('modalB_Img_fit');
modalBImgFit.parentNode.removeChild(modalBImgFit)
modalBImg.appendChild(img)
};


function  closeSholBig () {
modalBig.classList.add('hide'); 
}


function  modalleft (){
let modalleftImg = modalBImg.querySelector('img');  
let array2 = Array.from(imgFit)
let index = Number(modalleftImg.id)-2;
let bloc =  array2[index];
if (bloc == undefined)
    {
        bloc =  array2[9]
    }

let img = document.createElement('img'); 
    img.id = bloc.id;
    img.src = bloc.src;;
    img.classList.add('modalB_Img_fit');
    modalleftImg.parentNode.removeChild(modalleftImg);
    modalBImg.appendChild(img);  
   
}


function  modalRigh(){
    let modalleRigh = modalBImg.querySelector('img');   
    let array3 = Array.from(imgFit)
    let index = Number(modalleRigh.id);
    let blo =  array3[index]
    if (blo == undefined)
    {
        blo =  array3[0]

    }

    let img = document.createElement('img');
        img.id = blo.id;     
        img.src = blo.src;
        img.classList.add('modalB_Img_fit');
        modalleRigh.parentNode.removeChild(modalleRigh)
        modalBImg.appendChild(img)

    }
       
  
    



