(function($){
	$(window).load(function(){
		var _p="mPS2id",
			_o=mPS2id_params;
		for(i=0; i<_o.total_instances; i++){
			var shortcodeClass=_o.shortcode_class; // Shortcode without suffix 
			//var shortcodeClass=_o.shortcode_class+"_"+(i+1); // Shortcode with suffix 
			$(_o.instances[_p+"_instance_"+i]["selector"]["value"]+",."+shortcodeClass).mPageScroll2id({
				scrollSpeed:_o.instances[_p+"_instance_"+i]["scrollSpeed"]["value"],
				autoScrollSpeed:(_o.instances[_p+"_instance_"+i]["autoScrollSpeed"]["value"] === "true") ? true : false,
				scrollEasing:_o.instances[_p+"_instance_"+i]["scrollEasing"]["value"],
				scrollingEasing:_o.instances[_p+"_instance_"+i]["scrollingEasing"]["value"],
				pageEndSmoothScroll:(_o.instances[_p+"_instance_"+i]["pageEndSmoothScroll"]["value"] === "true") ? true : false,
				layout:_o.instances[_p+"_instance_"+i]["layout"]["value"],
				offset:_o.instances[_p+"_instance_"+i]["offset"]["value"],
				highlightSelector:_o.instances[_p+"_instance_"+i]["highlightSelector"]["value"],
				clickedClass:_o.instances[_p+"_instance_"+i]["clickedClass"]["value"],
				targetClass:_o.instances[_p+"_instance_"+i]["targetClass"]["value"],
				highlightClass:_o.instances[_p+"_instance_"+i]["highlightClass"]["value"],
				forceSingleHighlight:(_o.instances[_p+"_instance_"+i]["forceSingleHighlight"]["value"] === "true") ? true : false
			});
		}
	});
})(jQuery);