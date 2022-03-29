let check = document.querySelectorAll('input[type="checkbox"]');
let select = document.querySelector('#select');
let selectNo = document.querySelector('#selectNo');
let k = 0;

addEventListener('click', () => {
   for(let i = 0; i <= check.length-1; i++){
    if(check[i].checked){
        k++;
        selectedPeople.textContent = "Выбрано людей: " + k;
        selectNo.removeAttribute('disabled');
    }else if(k < 1){
        selectedPeople.textContent = "";
        selectNo.setAttribute("disabled", "disabled");
    }
   }

    k = 0;
})

let buttonAdd = document.querySelector("input[type=button]");

buttonAdd.addEventListener('click', () => { 
    window.location.href = 'private.html';
});

function selectPeople(){
    for(let k = 0; k <= check.length - 1; k++){
        check[k].checked = 'true';
    }   
}


function selectPeopleNo(){
    for(let k = 0; k <= check.length - 1; k++){
        check[k].checked = 0
        console.log("wdef");
    }   
}

    
// console.log(adsfg);
