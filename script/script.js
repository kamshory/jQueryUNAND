(function($){
	$.fn.shareToNetwork = function(options){
		this.url = document.location + '';
		if(this.url.indexOf('#')>-1)
		this.url = this.url.split('#')[0];
		this.urlEncoded = encodeURI(this.url);
		this.title = encodeURI(document.title);
		this.init = function(selector){
			var html = '<a href="http://www.planetbiru.com/share.php?url='+thisPlugin.urlEncoded+'&t='+thisPlugin.title+'" title="Planet Biru" target="_blank"><span aria-hidden="true" class="icon planetbiru-circle"></span></a> ';
			html+= '<a href="http://www.facebook.com/sharer/sharer.php?u='+thisPlugin.urlEncoded+'&t='+thisPlugin.title+'" title="Facebook" target="_blank"><span aria-hidden="true" class="icon facebook-circle"></span></a> ';
			html+= '<a href="http://twitter.com/intent/tweet?source=sharethisPlugincom&url='+thisPlugin.urlEncoded+'&text='+thisPlugin.title+'" title="Twitter" target="_blank"><span aria-hidden="true" class="icon twitter-circle"></span></a> ';
			html+= '<a href="https://plus.google.com/up/?continue=https://plus.google.com/share?'+thisPlugin.urlEncoded+'&t='+thisPlugin.title+'" title="Google+" target="_blank"><span aria-hidden="true" class="icon googleplus-circle"></span></a> ';
			html+= '<a href="https://delicious.com/post?url='+thisPlugin.urlEncoded+'&title='+thisPlugin.title+'" title="Delicious+" target="_blank"><span aria-hidden="true" class="icon delicious-circle"></span></a> ';
			html+= '<a href="http://linkedin.com/shareArticle?mini=true&url='+thisPlugin.urlEncoded+'&title='+thisPlugin.title+'" title="Delicious+" target="_blank"><span aria-hidden="true" class="icon linkedin-circle"></span></a> ';
			$(selector).html(html);
		}
		var thisPlugin = this;
		return this.each(function(index){
			var _thisCtrl = this;
			var dm = new thisPlugin.init(_thisCtrl);
		});
	}

})(jQuery);

$(document).ready(function(){
	$(document).scroll(function(){
		var st = parseFloat($(document).scrollTop());
		var mt = parseFloat($('.menu').offset().top);
		if(st>mt)
		{
			$('.menu').addClass('menu-fixed').removeClass('menu-rounded');
		}
		else
		{
			$('.menu').removeClass('menu-fixed').addClass('menu-rounded');
		}
	});
	$('.share-to-network').shareToNetwork();
});
