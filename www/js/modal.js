/*! modal class
 * @depends plugins/handlebars-1.0.rc.1.js
 */

var SG = SG || {};
SG.modal = function () {

	var modal_source   = $('#modal-template').html(),
		modal_template = Handlebars.compile(modal_source);
		
	var self = {
			init: function () {
				debug.log('[modal.js] - initialized');
				setupBinds();
			},
			show: function (content, classes) {
				var data = { 
						'content': content,
						'classes': classes
					},
					modal = modal_template(data);
				$(document.body).append(modal);

				fixFacebookTabPosition();
			},
			close: function () {
				$('.overlay').remove();
				$('.modal').remove();
			}
		};

	return self;

	function setupBinds () {

		$(document.body).on('click', '.overlay, .close', function (e) {
			e.preventDefault;
			SG.modal.close();
		});

		$(document).keyup(function (e) {
			if (e.keyCode == 27) SG.modal.close();
		});
	}

	function fixFacebookTabPosition () {
		if (SG.util.is_tablet && SG.util.is_iframe) {
			FB.Canvas.getPageInfo(function (info) {
				var y_diff = info.scrollTop + 200;
				$('.modal').css('position', 'absolute').css('top', y_diff);
			});
		}
	}
	
}();
SG.main.queue(SG.modal.init);
