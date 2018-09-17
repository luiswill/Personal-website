!function($){"use strict";biotope.configuration.set("initElementFunctions",function(){var $elementsWithDataInit=$("[data-init]");$elementsWithDataInit.each(function(){if($(this).data("init")){var initFunction=eval($(this).attr("data-init"));initFunction($(this))}})})}(jQuery);
//# sourceMappingURL=initElementScripts.js.map
