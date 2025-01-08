
(function ( $ ) {

    $.fn.modal = function() {
        this.css({'z-index': 99999}).slideDown(function () {
            $(this).addClass('show');
        });
        let modal = this;
        this.after('<div class="modal-backdrop fade show wpdm-mbd" style="z-index: 9999;transition: all ease-in-out 400ms"></div>');
        modal.trigger('shown.bs.modal');
        this.find('[data-dismiss="modal"]').on('click', function(e) {
            modal.removeClass('show').slideUp(function () {
                modal.trigger('hidden.bs.modal');
            });
            jQuery('.wpdm-mbd').remove();
        })
    };

    $.fn.tooltip = function() {};

}( jQuery ));

jQuery(function($) {
    $body = $('body');
    $body.on('click', '[data-toggle="collapse"]', function(e) {
        e.preventDefault();
        $($(this).attr('href')).slideToggle();
    });
    $body.on('click', '[data-toggle="modal"]', function(e) {
        e.preventDefault();
        $($(this).data('target')).modal('show');
    });
    $body.on('click', '[data-toggle="tab"]', function(e) {
        e.preventDefault();
        const $tabs = $(this).parents('.nav-tabs');
        $tabs.find('a').each(function() {
            $(this).removeClass('active');
            $($(this).attr('href')).removeClass('active');
        });
        $(this).addClass('nav-link active');
        $($(this).attr('href')).addClass('active');
    });
});
