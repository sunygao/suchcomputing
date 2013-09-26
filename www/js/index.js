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

			// $('#nav a').on('click', function(e) {
			// 	e.preventDefault();
			// 	self.showSection($(this));
			// });

			// $('#back-to-menu').on('click', function(e) {
			// 	e.preventDefault();
			// 	self.showMenu($(this));
			// });

			// $('#back-to-projects').on('click', function(e) {
			// 	e.preventDefault();
			// 	reset();
			// });

			// $('#project-list ul a').on('click', function(e) {
			// 	e.preventDefault();
			// 	self.showProject($(this));
			// });


		},
		showSection: function($link) {
			$('#main-content').show();
			$($link.attr('href')).show();
			$('#page-wrapper').animate({
				top: '-100%'
			}, 500, 'easeInSine');
		},
		showMenu: function() {
			$('#page-wrapper').animate({
				top: '0%'
			}, 500, 'easeInSine', function() {
				$('#main-content').hide();
				$('#main-content section').hide();
				reset();
			});
		},
		showProject: function($link) {
			$($link.attr('href')).show();
			$('#projects').animate({
				left: '-100%'
			}, 500, 'easeInSine');
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


