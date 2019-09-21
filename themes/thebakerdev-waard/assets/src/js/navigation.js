import zenscroll from 'zenscroll';

let navigation = (function(zenscroll){

    function toggleActive() {

        let nav_link = $('.nav-link');

        nav_link.click(function(){

            let self = $(this);

            nav_link.removeClass('active');

            self.addClass('active');
        });
    }

    function init() {

        toggleActive();

        zenscroll.setup(null, -1);
    }

    return {
        init
    }
})(zenscroll);

export default navigation;