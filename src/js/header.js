(function(){

    let closes = Array.from(document.querySelectorAll('.aside_close')),
        burger = document.querySelector('#burger'),
        aside = document.querySelector('aside');

    burger.addEventListener('click', (e) => {
        e.preventDefault();
        aside.classList.toggle('active');
    })

    closes.forEach(close => {
        close.addEventListener('click', (e)=>{
            e.preventDefault();
            aside.classList.toggle('active');
        })
    })

})();