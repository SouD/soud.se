
/**
 * TODO: Minimize
 */

$(document).ready(function() {

    $('.projects').infinitescroll({

        loading: {

            finished: undefined,
            finishedMsg: '',
            img: 'img/white-snake-loader.gif',
            msg: null,
            msgText: '<em style="color:#fff">Loading...</em>',
            selector: null,
            speed: 'fast',
            start: undefined

        },

        navSelector  : '.pagination',
        nextSelector : '.pagination a:last',
        itemSelector : '.projects .project',

    }, function(elements) {

        Holder.run(); // Redraw potential placeholders

    });

});
