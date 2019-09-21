import AOS from 'aos';

let team = (function(AOS){

    function toggleActive() {

        let member      = $('.team-member__item'),
            team_toggle = $('.team-toggle');

        member.click(function(){

            let self        = $(this),
                target      = self.attr('data-target'),
                toggle = $('.team-toggle[data-toggle="'+target+'"]');

            team_toggle.removeClass('active');

            toggle.addClass('active');
        });
    }


    function init() {
        
        toggleActive();
    }

    return {
        init 
    }
})(AOS);

export default team;