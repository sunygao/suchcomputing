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

			self.scrollPanes = [];

			self.setWidth();

			//self.initScrollbars();

			$(window).on('resize', function() {
				$.each(self.scrollPanes, function(index, pane) {
					var pane = pane.data('jsp');
					pane.reinitialise();
				});
			});

			$('#project_list a').on('click', function(e) {
				e.preventDefault();

				var pos = $($(this).attr('href')).position().left - parseFloat($('#projects').css('paddingLeft').split('px')[0]);
				$('body').scrollTo(pos, { axis:'x', duration: 500, easing: 'easeOutSine' });
			});

		},
		setWidth: function() {
			$('#projects').css('width', ($('#projects').children().size() * $('#projects').children().outerWidth()));
		},
		initScrollbars: function() {
		

			$('#projects .images').each(function(i) {

				var $this = $(this);
				$(this).imagesLoaded(function() {
					var scrollpane = $this.jScrollPane();
					self.scrollPanes.push(scrollpane);
					if(i === $('#projects .images').size() - 1) {
						var pageScrollpane = $('#main-content').jScrollPane();
						self.scrollPanes.push(pageScrollpane);
					}
				});


			});
		}
		
	};
	
	return self;

	
	
	// ================================================
	// = Private functionse (function _private () {}) =
	// ================================================

	function _setupBinds () {

		$(document.body).on('click', '.show-modal', function (e) {
			e.preventDefault();
			SG.modal.show('hi! this is a modal!', 'hello-modal');
		});

	}
	
}();
//SG.main.queue(SG.index.init);


