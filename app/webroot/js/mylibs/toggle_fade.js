(function($){ $.fn.toggleFade = function(speed, callback){ speed = ~~speed || 400; callback = callback || jQuery.noop; return this.each(function() { var $this = jQuery(this); $this[$this.is(':hidden') ? 'fadeIn' : 'fadeOut'](speed, callback);})}})(jQuery);
	