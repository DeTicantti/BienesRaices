document.addEventListener('DOMContentLoaded',()=>{
    eventListener();
    darkmode();
});
function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);

}
function navegacionResponsive(){
    const navegacion = document.querySelector('.nav');
    /*if (navegacion.classList.contains('mostrar')){        todo esto se cambia por un toggle
        navegacion.classList.remove('mostrar');
    }else navegacion.classList.add('mostrar');*/
    navegacion.classList.toggle('mostrar');
}

function darkmode(){

    const preferDark = window.matchMedia('(prefers-color-scheme: dark)');
    //console.log(preferDark.matches); conoce las preferencias del usuario
    

    preferDark.addEventListener('change',()=>{
        if(preferDark.matches){
            document.body.classList.add('dark');
        }else{
            document.body.classList.remove('dark');
        }
    });
    const btn = document.querySelector('.dark');
    btn.addEventListener('click',()=>{
        document.body.classList.toggle('dark-mode');


    });

    
}