jQuery(function($) {
    var mq = window.matchMedia( "(max-width: 1024px)" );

    // Si la medida es de 0 a 768px hace lo siguiente
    if (mq.matches) {
        console.log('si');
    } else {
        console.log('no');
    }

});
