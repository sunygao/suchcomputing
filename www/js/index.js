/*! index class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * 
 */
var SG = SG || {};
SG.index = function () {
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================

	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function () {

			debug.group("# [index.js]");

				debug.log('[index.js] - initialized'); 

				//--> sof private functions

					_setupBinds();

				//--> eof private functions

			debug.groupEnd();

			self.setWidth();

			$('#project_list a').on('click', function(e) {
				e.preventDefault();
				var pos = $($(this).attr('href')).position().left - parseFloat($('#projects').css('paddingLeft').split('px')[0]);
				debug.log(pos)
				$('#main-content').scrollTo(pos, { axis:'x', duration: 500, easing: 'easeOutSine' });
			});

		},
		setWidth: function() {
			$('#projects').css('width', ($('#projects').children().size() * $('#projects').children().outerWidth()));
		}
		
	};
	
	return self;

	
	
	// ================================================
	// = Private functionse (function _private () {}) =
	// ================================================
	function reset() {		
		$('#projects').animate({
			left: '0%'
		}, 500, 'easeInSine', function() {
			$('.project').hide();
		});
	}

	function _setupBinds () {

		$(document.body).on('click', '.show-modal', function (e) {
			e.preventDefault();
			SG.modal.show('hi! this is a modal!', 'hello-modal');
		});

	}
	
}();
//SG.main.queue(SG.index.init);


