let msg = "Hello world !";
function hello(){
    let txt ="hi belal"
      alert(txt);
}
// hello();
// alert(msg);
 let el = document.querySelector('h1 i'); //object //  el.oncklick = hello; ----or 
el.onclick = function () {
    el.style.color ="green";
    el.style.backgroundcolor ="#fff";
    el.style.fontSize ="30px";
};
function dbclick(){
    el.style.color="blue";
};
el.ondblclick = dbclick;
//////////////////////////////////////////////////////////////////////////////////////////////////////
//another way to declare lestener like before
let input =document.querySelector('[placeholder=Name]');
input.addEventListener('keyup',function(){
el.textContent =input.value;
});

let form =document.querySelector('#contact-form') ;
let textarea =document.querySelector('textarea');
let err =document.querySelector('.error');
form.addEventListener('submit' , function (event){

        if (msg.value === ''){
            event.preventDefault();
                // alert('please write something');
                err.classList.remove('hide');
                return ;
            }

        });  
        textarea.onkeyup =function(){
        err.classList.add('hide'); 
        }
    