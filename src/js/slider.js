(function(){

    if(document.querySelector('#main')){
        new Splide('#main', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: 5000,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: false,
            pagination: true
        }).mount();
    }

    if(document.querySelector('#similares')){
        new Splide('#similares', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            autoplay: true,
            gap: '1.8rem',
            interval: 5000,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: false,
            pagination: false
        }).mount();
    }

    if(document.querySelector('#productos')){
        new Splide('#productos', {
            type: 'loop',
            perPage: 2,
            perMove: 1,
            autoplay: true,
            interval: 5000,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: false,
            gap: '2rem',
            pagination: true
        }).mount();
    }

    if(document.querySelector('#partners')){
        new Splide('#partners', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
            autoplay: true,
            interval: 5000,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: false,
            gap: '1.2rem',
            pagination: true
        }).mount(window.splide.Extensions);
    }

})();