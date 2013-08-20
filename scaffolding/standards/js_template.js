/*! CLASS_NAME class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * @depends jquery/jquery-1.9.1.min.js
 */
var SG = SG || {};
SG.CLASS_NAME = function () {
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function () {

			debug.group("# [CLASS_NAME.js]");

				debug.log('[CLASS_NAME.js] - initialized'); 

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
//SG.main.queue(SG.CLASS_NAME.init);


