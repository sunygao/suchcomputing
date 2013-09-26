/*! about class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * @depends jquery/jquery-1.9.1.min.js
 */
var SG = SG || {};
SG.about = function () {
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function () {

			debug.group("# [about.js]");

				debug.log('[about.js] - initialized'); 

				//--> sof private functions

				//--> eof private functions

			debug.groupEnd();

		}
		
	};
	
	return self;
	
	// ================================================
	// = Private functionse (function _private () {}) =
	// ================================================
	
}();
//SG.main.queue(SG.about.init);


