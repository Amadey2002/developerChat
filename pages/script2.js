let check = document.querySelectorAll('input[type="checkbox"]');
let select = document.querySelector('#select');
console.log(select);
let k = 0;

addEventListener('click', () => {
   for(let i = 0; i <= check.length-1; i++){
    if(check[i].checked){
        k++;
        // selectedPeople.textContent = "Выбрано людей: " + k;
        select.removeAttribute('disabled');
    }else if(k < 1){
        selectedPeople.textContent = "";
    }
   }

    k = 0;
})

let buttonAdd = document.querySelector("input[type=button]");

buttonAdd.addEventListener('click', () => { 
    window.location.href = 'private.html';
});



