/*
Copyright Planetbiru Studio 2014
Some rights reserved
http://www.planetbiru.net
http://www.kamshory.com
*/

function mobileUI(resources, opt)
{
	String.prototype.rws = function() {
		return this.replace(/^(\s*)|(\s*)$/g, '').replace(/\s+/g, ' ');;
	};
	String.prototype.ftrim = function(){return this.replace(/(?:(?:^|\n)\s+|\s+(?:$|\n))/g,'').replace(/\s+/g,' ');};
	this.animDelay = 200;
	opt = opt || {};
	if(typeof opt.animDelay == 'undefined')
	{
		opt.animDelay = 200;
	}
	this.animDelay = opt.animDelay;
	this.resources = '';
	this.tooltipTimeout;
	this.lastRequestTime = 0;
	this.lastPopupZIndex = 4000;
	this.update = function(resources)
	{
		resources = resources || this.resources;
		this.init(resources);
	}
	
	this.init = function(resources){
		resources = resources || '';
		resources = resources.toLowerCase();
		if(resources == '-all-' || resources == '*')
		{
			resources = 'checkbox dropdown-menu popup-menu menu popup aside tab collapsible accordion slideshow swipe-page swipe-list autocomplete';
		}
		
		resources.rws();
		this.resources = resources;
		var arrres = resources.split(' ');
		
		$(document).on('mouseover', '[data-rel="tooltip"]', function(event){
			clearTimeout(thisPlugin.tooltipTimeout);
			var _trigger = this;
			var _section = $(_trigger).attr('href').substr(1);
			thisPlugin.showTooltip(_section, _trigger);
			return false;
		});
		$(document).on('mouseout', '[data-rel="tooltip"]', function(event){
			var _trigger = this;
			var _section = $(_trigger).attr('href').substr(1);
			thisPlugin.tooltipTimeout = setTimeout(function(){
				thisPlugin.hideTooltip(_section, _trigger);
			}, 1000);
		});
		
		
		$('[data-role="video"]').each(function(index){
			var that = $(this);
			var prov = that.attr('data-provider')||'';
			var vobj = thisPlugin.parse_url(that.attr('data-url'));
			var vid = '';
			var start = '';
			switch(prov.toLowerCase())
			{
				case 'youtube':
				if(vobj.hostname.idexOf('youtu.be') > -1)
				{
					vid = vobj.pathname.substr(1) || '';
					start = vobj.searchObject.t || '';
				}
				else
				{
					vid = vobj.searchObject.v || '';
					start = vobj.searchObject.t || '';
				}
				that.html('<div class="tv-control"><div class="tv-screen icon play"></div></div><img src="https://i1.ytimg.com/vi/'+vid+'/hqdefault.jpg" style="width:inherit; border:none" />').css({'cursor':'pointer'});
				that.find('img').on('click', function(){
					var that2 = $(this);
					var w = that2.width();
					var h = that2.height();
					var rat = w/h;
					that.html('<embed allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="https://www.youtube.com/v/'+vid+'&autoplay=1&start='+start+'" name="plugin" style="height:'+h+'px; max-width:inherit; width:100%; margin:auto">');
				});
				break;
			}		
		});
		
		
		/*popup start*/
		$(document).on('click', '[data-role="navbar"][data-mark-visited="true"] a', function(event){
			$(this).siblings().removeClass('item-selected');
			$(this).addClass('item-selected');
		});
		$(document).off('click', '[data-rel="popup"]');
		$(document).on('click', '[data-rel="popup"]', function(event){
			var that = $(this);
			var _url = that.attr('href') || '';
			var _title = that.attr('data-title') || '';
			if(_url.indexOf('#') == 0)
			_url = _url.substr(1);
			_section = _url;
			// data-title
			if(_title != '')
			{
				$('[data-role="popup"][data-section="'+_section+'"]').attr('data-title', _title);
			}
			// data-close-icon
			if(that.attr('data-close-icon') == 'true')
			{
				$('[data-role="popup"][data-section="'+_section+'"]').attr('data-close-icon', 'true');
			}
			// data-location-async
			if(typeof that.attr('data-location-async') != 'undefined')
			{
				_location = that.attr('data-location-async');
				$('[data-role="popup"][data-section="'+_section+'"]').attr('data-location-async', _location);
			}
			// data-cache
			if(typeof that.attr('data-cache') != 'undefined')
			{
				_cache = that.attr('data-cache');
				$('[data-role="popup"][data-section="'+_section+'"]').attr('data-cache', _cache);
			}
			// data-timeout
			if(typeof that.attr('data-timeout') != 'undefined')
			{
				_timeout = that.attr('data-timeout');
				$('[data-role="popup"][data-section="'+_section+'"]').attr('data-timeout', _timeout);
			}
			thisPlugin.showPopUp(_section);
			return false;
		
		});
		
		/*popup end*/
		/*scroll-up start*/
		$(document).off('click', '[data-rel="scroll-up"]');
		$(document).on('click', '[data-rel="scroll-up"]', function(event){
			$('html, body').animate({
				scrollTop: 0
			}, thisPlugin.animDelay);
			return false;
		});
		/*scroll end*/

		/*scroll-down start*/
		$(document).off('click', '[data-rel="scroll-down"]');
		$(document).on('click', '[data-rel="scroll-down"]', function(event){
			var dh = $(document).height();
			var wh = $(window).height();
			var pos = dh-wh;
			$('html, body').animate({
				scrollTop: pos
			}, thisPlugin.animDelay);
			return false;
		});
		/*scroll-down end*/

		/*back start*/
		$(document).off('click', '[data-rel="back"]');
		$(document).on('click', '[data-rel="back"]', function(event){
			window.history.back();
			return false;
		});
		/*back end*/
		/*forward start*/
		$(document).off('click', '[data-rel="forward"]');
		$(document).on('click', '[data-rel="forward"]', function(event){
			window.history.forward();
			return false;
		});
		/*forward end*/
		$(document).off('click', '[data-role="navbar"][data-rel="swipe-page"] a'); 
		$(document).on('click', '[data-role="navbar"][data-rel="swipe-page"] a', function(event){
			// set siblings
			var that1 = $(this);
			var _tp = that1.parent();
			var _selector = _tp.attr('data-target-selector');
			var _section = _tp.attr('href');
			_tp.find('a').each(function(index1){
				var that2 = $(this);
				that2.attr('data-index', parseInt(index1));
				that2.removeClass('item-selected');
			});
			var index = that1.attr('data-index');
			if(_tp.attr('data-mark-selected') == 'true')
			{
				that1.addClass('item-selected');
			}
			if(typeof _selector != 'undefined')
			{
				thisPlugin.wipePageGoTo(_selector, index);
			}
			else if(typeof _section != 'undefined')
			{
				_section = _section.substr(1);
				thisPlugin.wipePageGoTo($('[data-role="swipe-page"][data-section="'+_section+'"]'), index);
			}
		});
		
		
		/*dynamic select start*/
		$(document).off('change', '[data-rel="dynamic-select"]');
		$(document).on('change', '[data-rel="dynamic-select"]', function(event){
			var url = $(this).attr('data-source');
			var cch = $(this).attr('data-cache');
			var val = $(this).val();
			var tgt = $(this).attr('data-target-selector');
			var lcap = $(this).attr('data-loading-caption') || 'Loading...';
			var ecap = $(this).attr('data-empty-caption') || 'Select';
			$(tgt).empty().append('<option value="">'+lcap+'</option>');
			$.ajax({
			url:url,
			type:'GET',
			data:{'term':val},
			dataType:'json',
			cache:cch,
			success:function(data){
				var i;
				$(tgt).empty().append('<option value="">'+ecap+'</option>');
				for(i in data)
				{
					$(tgt).append('<option value="'+data[i].v+'">'+data[i].l+'</option>');		
				}
			}
			});
		});
		/*dynamic select end*/		
		/*checkbox start*/
		$(document).off('change', '[data-rel="check-all"]');
		$(document).on('change', '[data-rel="check-all"]', function(event){
			var _that = $(this);
			var _sel = _that.attr('data-target-selector');
			if(_that.filter(':checked').length)
			{
				$(_sel).attr('checked', 'checked');
			}
			else
			{
				$(_sel).removeAttr('checked');
			}
		});
		/*checkbox end*/
		
		/*ajax get start*/
		$(document).off('click', '[data-rel="ajax-get"]');
		$(document).on('click', '[data-rel="ajax-get"]', function(event){
			var _this = $(this);
			var _container = _this.attr('data-target-container');
			var _url = _this.attr('data-location-async');
			var _anim = _this.attr('data-loading-anim') || 'false';
			var tm = (new Date()).getTime();
			if((tm-thisPlugin.lastRequestTime)>10)
			{
				if(_anim == 'true')
				{
					$(_container).html('<div class="anim-loader-bg" style="height:16px"></div>');
				}
				$.get(_url, {}, function(answer){
					$(_container).html(answer);
				});
			}
			thisPlugin.lastRequestTime = tm;
			return false;
		})
		/*ajax get end*/
		
		/*autocomplete end*/
		$(document).off('keyup', '[data-role="autocomplete"]');
		$(document).on('keyup', '[data-role="autocomplete"]', function(event){
			if(event.which == 38)
			{
				// arrow up
				event.preventDefault();
			}
			else if(event.which == 40)
			{
				event.preventDefault();
			}
			else if(event.which == 13)
			{
				event.preventDefault();
			}
			else
			{
				var _this = $(this);
				var _left = $(this).offset().left;
				var _top = parseFloat($(this).offset().top) + parseFloat($(this).outerHeight());
				var minlen = $(this).attr('data-min-length') || 0;
				var cache = ($(this).attr('data-cache') == 'true');
				var source = $(this).attr('data-source') || '';
				var _clbk = $(this).attr('data-autocomplete-callback') || '';
				var val = $(this).val();
				if(val.length >= minlen)
				{
					source = source.trim();
					var data = [];
					var i;
					if(source.indexOf('[') == 0)
					{
						var data2 = JSON.parse(source);
						for(i in data2)
						{
							if(typeof data2[i] == 'string')
							{
								data.push({'v':data2[i], 'l':data2[i]});
							}
							else
							{
								data.push(data2[i]);
							}
						}
						thisPlugin.matchArray(data, val, function(res){
							$('.mui-autocomplete').remove();						   
							$('body').append('<div class="mui-autocomplete"></div>');
							var i;
							$('.mui-autocomplete').css({'left':_left+'px','top':_top+'px'});
							$('.mui-autocomplete').html('<ul></ul>');
							for(i in res)
							{
								var html = '<li><a href="#">'+res[i].l+'</a></li>';
								$('.mui-autocomplete > ul').append(html);
								$('.mui-autocomplete > ul > li:last-child a').attr('data-value', res[i].v).attr('data-label', res[i].l).on('click', function(){
									_this.val($(this).attr('data-value'));
									if(_clbk != '')
									{
										var dt = {'v':$(this).attr('data-value'),'l':$(this).attr('data-label')};
										try{eval(_clbk+'(dt)');}catch(e){}
									}
									$('.mui-autocomplete').hide();
									return false;
								});
							}
						});
					}
					else
					{
						$.ajax({
							'url':source, 
							'type':'GET',
							'data':{term:val},
							'dataType':'json',
							'cache':cache,
							'success':function(res){
								$('.mui-autocomplete').remove();						   
								$('body').append('<div class="mui-autocomplete"></div>');
								$('.mui-autocomplete').css({'left':_left+'px','top':_top+'px'});
								var i;
								$('.mui-autocomplete').html('<ul></ul>');
								for(i in res)
								{
									var html = '<li><a href="#">'+res[i]['l']+'</a></li>';
									$('.mui-autocomplete > ul').append(html);
									$('.mui-autocomplete > ul > li:last-child a').attr('data-val', res[i].v).on('click', function(){
										_this.val($(this).attr('data-val'));
										$('.mui-autocomplete').hide();
										return false;
									});
								}
							}
						});
					}
				}
				else
				{
					$('.mui-autocomplete').hide();						   
				}
			}
		});

		$('[data-role="autocomplete"]').keydown(function( event ) {
			var obj = $('.mui-autocomplete');
			var length = obj.find('ul > li').length;
			if(length)
			{
				var seletedIndex = parseInt(obj.attr('data-selected-index') || '-1');
				var currentIndex = seletedIndex;
				if(event.which == 40)
				{
					// arrow down
					currentIndex++;
					event.preventDefault();
					event.stopImmediatePropagation();
				}
				else if(event.which == 38)
				{
					// arrow up
					if(seletedIndex == -1 || seletedIndex == length)
					{
						seletedIndex = length - 1;
					}
					else
					{
						currentIndex--;
					}
					event.preventDefault();
					event.stopImmediatePropagation();
				}
				else if(event.which == 13)
				{
					if(seletedIndex > -1 && seletedIndex < length)
					{
						event.preventDefault();
						event.stopImmediatePropagation();
						
						obj.find('ul > li:nth-child('+(currentIndex+1)+')').find('a').click();
					}
				}
				if(currentIndex >= length)
				{
					currentIndex = currentIndex % length;
				}
				if(currentIndex < 0)
				{
					currentIndex = currentIndex + length;
				}
				obj.attr('data-selected-index', currentIndex);
				obj.find('ul > li').removeClass('mui-autocomplete-seledted');
				obj.find('ul > li:nth-child('+(currentIndex+1)+')').addClass('mui-autocomplete-seledted');
			}
		});
		$('[data-role="autocomplete"]').blur(function( event ) {
			var obj = $('.mui-autocomplete');
			setTimeout(function(){
			obj.fadeOut(100, function(e){
					$(this).remove();
				});
			}, 100);
		});
		/*autocomplete end*/

		/*swipe list start*/
		if($.inArray('swipe-list', arrres) != -1)
		{
			$('[data-role="swipe-list"]').each(function(index){
				var pd = $(this).attr('data-prevent-default') || 'true';
				var pd2 = (pd.toLowerCase()=='true')?true:false;
				$(this).wipetouch({
					wipeLeft: function(result) { 
						thisPlugin.wipeListStatus(result.node, result, -1); 
					},
					wipeRight: function(result) { 
						thisPlugin.wipeListStatus(result.node, result, 1); 
					},
					wipeMove: function(result) { 
						thisPlugin.wipeListMove(result.node, result); 
					},
					preventDefault:pd2
				});
				$(document).on('click', '[data-role="swipe-list"] > li > div > a', function(event){
					window.location = $(this).attr('href');
				});
			});
		}
		/*swipe list end*/

		/*swipe page start*/
		if($.inArray('swipe-page', arrres) != -1)
		{
			$('[data-role="swipe-page"]').each(function(index){
				var pd = $(this).attr('data-prevent-default') || 'true';
				var pd2 = (pd.toLowerCase()=='true')?true:false;
				$(this).wipetouch(
				{
					wipeLeft: function(result) { 
						thisPlugin.wipePageStatus(result.node, result, -1); 
					},
					wipeRight: function(result) { 
						thisPlugin.wipePageStatus(result.node, result, 1); 
					},
					wipeUp:function(result){
						var dy = parseFloat(result.y);
						var st = parseFloat(document.body.scrollTop);
						$('html, body').animate({scrollTop:st+dy}, 100);
						thisPlugin.wipePageStat(result.node, result, null, false)
					},
					wipeDown:function(result){
						var dy = parseFloat(result.y);
						var st = document.body.scrollTop;
						$('html, body').animate({scrollTop:st-dy}, 100);
						thisPlugin.wipePageStat(result.node, result, null, false)
					},
					wipeMove: function(result) { 
						thisPlugin.wipePageMove(result.node, result); 
					},
					preventDefault:pd2
				});
				$(document).on('click', '[data-role="swipe-list"] > section a', function(e){
					window.location = $(this).attr('href');
				});
			});
		};
		/*swipe page end*/
		/*dropdown start*/
		if($.inArray('dropdown-menu', arrres) != -1)
		{
			/*
			arrres.push('popup-menu');
			*/
			$('[data-role="dropdown-menu"]').each(function(index){
				var _that = $(this);
				var _obj = _that.find('> li > ul');
				_obj.find('li ul').each(function(){
					$(this).attr('pos', 'right');
				});
				_that.find('li ul').parent().each(function(){
					var _li = $(this);
					var _ul = $(this).find('> ul');
					var _a = $(this).find('> a');
					_li.addClass('has-children');
					_li.find('> a .dm-ar').remove();
					_li.find('> a .dm-ad').remove();
					if(_ul.attr('pos') == 'right')
					{
						_li.find('> a').prepend('<span class="dm-ar"></a>');
					}
					else
					{
						_li.find('> a').prepend('<span class="dm-ad"></a>');
					}
					//_a.off('click');
					_a.on('click', function(){
						var __a = $(this);
						thisPlugin.hideDropDownMenu();
						thisPlugin.showSubmenu(__a.parent());
						if(_ul.attr('pos') == 'right')
						{
							var _w = parseFloat(__a.parent().outerWidth());
							var _h = parseFloat(__a.parent().outerHeight());
							var _l = parseFloat(__a.parent().offset().left);
							var _t = parseFloat(__a.parent().offset().top);
							var __l = _l + _w;
							var __t = _t + _h;
							_ul.css({'margin-left':_w+'px', 'margin-top':'-'+_h+'px'});	
						}
						_ul.css({'display':'block'});
						return false;
					});
				});
			});			
		}
		/*dropdown end*/
		/* popup menu start*/
		if($.inArray('popup-menu', arrres) != -1)
		{
			var _section;
			$('[data-rel="popup-menu"]').each(function(){
				var domObj;
				var that = $(this);
				if(that.attr('data-target') == 'siblings')
				{
					domObj = that.parent().find('[data-role="popup-menu"]');
				}
				else
				{
					_section = that.attr('href').substr(1);
					domObj = $('[data-role="popup-menu"][data-section="'+_section+'"]');
				}
				that.off('click');
				that.on('click', function(event){
					thisPlugin.togglePopUpMenuDOM(domObj);
					return false;
				});
			});
		}
		/* popup menu end*/
		
		/*aside start*/
		if($.inArray('aside', arrres) != -1)
		{
			$('[data-rel="aside"]').each(function(){
				var _that = $(this);
				var _url = _that.attr('href');
				if(_url.indexOf('#') == 0)
				{
					var _section = _url.substr(1);
					var _behavior = _that.attr('data-behavior');
					_that.off('click');
					_that.on('click', function(event){
						if(_behavior == 'alternate')
						{
							thisPlugin.toggleAside(_section);
						}
						else
						{
							thisPlugin.showAside(_section);
						}
					});
				}
			});
			$('aside[data-transition="left"]').each(function(index){
				var _that = $(this);
				var _width = _that.width();
				_that.css({'margin-left':'-'+_width+'px'});
			});
			$('aside[data-transition="right"]').each(function(index){
				var _that = $(this);
				var _width = _that.width();
				_that.css({'right':'-'+_width+'px'});
			});
			$('aside[data-active="true"]').each(function(index){
				var _that = $(this);
				var _section = _that.attr('data-section');
				thisPlugin.showAside(_section, true);
			});
			
			// find anchor
			var dl = document.location + '';
			if(dl.indexOf('#') != -1)
			{
				var arr = dl.split('#');
				var _section = arr[1];
				if($('aside[data-section="'+_section+'"]').length)
				{
					$('aside[data-section="'+_section+'"][data-visibility!="visible"]').each(function(index){
						thisPlugin.showAside(_section, true);
					});
				}
			}
		}
		/*menu start*/
		if($.inArray('menu', arrres) != -1)
		{
			var _height;
			var _section;
			var domObj = $('[data-role="menu"]');
			domObj.each(function(index){
			var _that = $(this);
			var _url = _that.attr('data-section');
			_section = _url;
				try{
				domObj.attr('data-role', 'menu-resource');
				domObj.css({'position':'', 'display':'block'});
				_height = _that.outerHeight();
				var _html = _that[0].outerHTML;	
				var domObj2 = $('<div />')
				.attr('data-role','menu-container')
				.append('<a name="'+_section+'" id="'+_section+'"></a>')
				.append(_html)
				.css({'height':_height+'px'});
				_that.replaceWith(domObj2);
				}
				catch(e){
				}
			});
			var domObj2 = $('[data-rel="menu"]');
			domObj2.each(function(index){
				var _that = $(this);
				_that.off('click');
				_that.on('click', function(event){
					var _section = _that.attr('href');
					if(_section.indexOf('#') == 0)
					{
						_section = _section.substr(1);
					}
					if(_that.attr('data-active') == 'true')
					{
						$('[data-rel="menu"]').removeAttr('data-active');
						thisPlugin.closeMenu(_section);
						return false;
					}
					var domObj3 = $('[data-role="menu"][data-section="'+_section+'"]');
					if(domObj3.filter(':visible').length)
					{
						$('[data-rel="menu"]').removeAttr('data-active');
						thisPlugin.closeMenu(_section);
						return false;
					}
					else
					{
						thisPlugin.showMenu(_section);
						return false;
					}
				});
			});
			
		}
		/*menu end*/
	
		/*tab start*/
		$('[data-role="tab-content"]').css({'display':'none'});
		
		$('[data-role="tab"] > ul > li > a').off('click');
		$(document).on('click', '[data-role="tab"] > ul > li > a', function(event){			
			var that = $(this);
			var _url = that.attr('href');
			if(_url.indexOf('#') == 0)
			_url = _url.substr(1);
			_section = _url;
			$('[data-role="tab-content"]').css({'display':'none'});
			$('[data-role="tab"] > [data-section="'+_section+'"]').css({'display':'block'});
			that.parent().siblings().find('a').removeAttr('data-active');
			that.attr('data-active', 'true');
			if(that.attr('data-no-change-url') != 'true')
			{
			var dl = '#'+_url;
			try{
				var ttl = document.title+'';
				window.history.replaceState(null, null, dl);
				document.title = ttl;
			}
			catch(e)
			{
				window.location = '#'+_url;
			}
			}
			return false;
		});


		$(document).off('click', '[data-role="tab"] > [data-role="tab-nav"] > a');
		$(document).on('click', '[data-role="tab"] > [data-role="tab-nav"] > a', function(event){			
			var that = $(this);
			var _url = that.attr('href');
			if(_url.indexOf('#') == 0)
			_url = _url.substr(1);
			_section = _url;
			$('[data-role="tab-content"]').css({'display':'none'});
			$('[data-role="tab"] > [data-section="'+_section+'"]').css({'display':'block'});
			that.siblings('a').removeAttr('data-active');
			that.attr('data-active', 'true');
			if(that.attr('data-no-change-url') != 'true')
			{
			var dl = '#'+_url;
			try{
				var ttl = document.title+'';
				window.history.replaceState(null, null, dl);
				document.title = ttl;
			}
			catch(e)
			{
				window.location = '#'+_url;
			}
			}
			return false;
		});


		// find anchor
		var dl = document.location + '';
		if(dl.indexOf('#') != -1)
		{
			var arr = dl.split('#');
			var anc = arr[1];
			$('[data-role="tab"] > ul > li > a[href="#'+anc+'"]').click();	
			$('[data-role="tab"] > [data-role="tab-nav"] > a[href="#'+anc+'"]').click();	
		}
		else
		{
			$('[data-role="tab"] > ul > li > a[data-active="true"]').click();
			$('[data-role="tab"] > [data-role="tab-nav"] > a[data-active="true"]').click();
		}

		/*tab end*/
			
		if($.inArray('collapsible', arrres) != -1)
		{
			$('[data-role="collapsible"]').each(function(event){
				var that = $(this);
				that.find('[data-role="collapsible-header"] h3').prepend('<span class="icon sign-plus"></span> <span class="icon sign-minus"></span>');
								
			});
		}
		$(document).on('click', '[data-role="collapsible"] [data-role="collapsible-header"] a', function(event){
			var par = $(this).parent().parent();
			var col = par.attr('data-collapsed') || 'false';
			if(col == 'false'){
				thisPlugin.collapseCollapsible(par, true);
			}
			else{
				thisPlugin.collapseCollapsible(par, false);
			}
			return false;
		});
		
		/*accordion start*/
		if($.inArray('accordion', arrres) != -1)
		{
			$('[data-role="accordion-section"] h3:nth-child(1) a').each(function(index){
				var that = $(this);
				that.attr('href', '#asection'+index);
			});
			$('[data-role="accordion"]').each(function(event){
				var that = $(this);
				if(that.attr('data-collapsed') == 'all'){
					that.find('[data-role="accordion-content"]').css({'display':'none'});
				}
				else if(that.attr('data-collapsed') == 'yes'){
					that.find('[data-role="accordion-content"]').css({'display':'none'});
				}
				else{
					that.find('[data-role="accordion-content"]').css({'display':'block'});
				}
				
				if(that.attr('data-icon') != 'undefined')
				{
					that.find('.accordion-header-icon').remove();
					that.find('[data-role="accordion-section"]').each(function(index){
						$('<span data-role="accordion-header-icon">').appendTo($(this).find('>h3:first > a'));
				    });
				}
				that.find('[data-role="accordion-section"] h3:nth-child(1) a').off('click');
				that.find('[data-role="accordion-section"] h3:nth-child(1) a').on('click', function(event){
					var obj = $(this).parent().parent();
					if(obj.find('[data-role="accordion-content"]:visible').length)
					{
						obj.find('[data-role="accordion-content"]:visible').animate({'height':'0px'}, thisPlugin.animDelay, function(){
							$(this).css({'display':'none'});
							var dl = document.location+'';
							if(dl.indexOf('#') > -1)
							{
								dl = dl.substr(0,dl.indexOf('#'));
							}
							try{
								var ttl = document.title+'';
								window.history.replaceState(null, null, dl);
								document.title = ttl;
							}
							catch(e)
							{
								window.location = '#';
							}
							$(this).parent().attr('data-visible','false');
						});
					}
					else
					{	
						obj.siblings().find('[data-role="accordion-content"]:visible').animate({'height':'0px'},thisPlugin.animDelay,'swing',function(){
							$(this).css({'display':'none'});					
							$(this).parent().attr('data-visible','false');
						});
						obj.find('[data-role="accordion-content"]').css({'display':'none','height':''});
						var _h = obj.find('[data-role="accordion-content"]').height();
						obj.find('[data-role="accordion-content"]').css({'display':'block','height':'0px'}).animate({'height':_h+'px'},thisPlugin.animDelay,'swing',function(){
							$(this).css({'height':''});
							var _h = obj.find('[data-role="accordion-content"]').height();
							$(this).parent().attr('data-visible','true');
						});
					}
				});
				if(that.attr('data-collapsed') != 'no')
				{
					$('[data-role="accordion"] > [data-role="accordion-section"] h3:nth-child(1) a[data-active="true"]').parent().siblings().css({'display':''});
					that.find('[data-role="accordion-section"]').attr('data-visible','false');
				}
				else
				{
					that.find('[data-role="accordion-section"]').attr('data-visible', 'true');
				}
				that.find('[data-role="accordion-content"]:visible').parent().attr('data-visible', 'true');
			});
			// find anchor
			var dl = document.location + '';
			if(dl.substr(dl.length-1) != '/')
			{
				$('[data-role="accordion"]').each(function(index){
					var that = $(this);
					var _nav = that.attr('data-navigation') || 'false';
					if(_nav == 'true')
					{
						that.find('[data-role="accordion-content"] a').each(function(index2){
							var that2 = $(this);
							var _url = that2.attr('href');
							if(dl.indexOf('/'+_url) != -1 || dl == _url)
							{
								that.find('[data-role="accordion-section"] [data-role="accordion-content"]').css({'display':'none'});
								that2.parent().parent().parent().css({'display':'block'});
								var sec = that2.parent().parent().parent().parent();
								sec.siblings().attr('data-visible','false');
								sec.attr('data-visible','true');
							}
						});
					}
				});
			}
			if(dl.indexOf('#') != -1)
			{
				var arr = dl.split('#');
				var anc = arr[1];
				if($('[data-role="accordion"] > [data-role="accordion-section"] h3:nth-child(1) a[href="#'+anc+'"]').length)
				{
					$('[data-role="accordion"] > [data-role="accordion-section"] > [data-role="accordion-content"]').css({'display':'none'});
					var sec = $('[data-role="accordion"] > [data-role="accordion-section"] h3:nth-child(1) a[href="#'+anc+'"]').parent().siblings();
					sec.css({'display':'block'});
					sec.parent().siblings().attr('data-visible','false');
					sec.parent().attr('data-visible','true');
				}
			}
		}
		/*tab end*/
		
		/*slideshow start*/
		if($.inArray('slideshow', arrres) != -1)
		{
			$('[data-role="slideshow"]').each(function(index){
				var that = $(this);
				var _active = that.attr('data-active-slide') || 1;
				var _num = that.find('li').length;
				that.attr('data-active-slide', _active);
				that.attr('data-num-slide', _num);
				$('<div />').addClass('data-slideshow-nav').addClass('data-slideshow-nav-prev').html('<a href="#">Prev</a>').appendTo(that);
				$('<div />').addClass('data-slideshow-nav').addClass('data-slideshow-nav-next').html('<a href="#">Next</a>').appendTo(that);
				var _width = parseFloat(that.width());
				var _height = parseFloat(that.height());
				var nt = (_height/2) - 20;
				that.find('.data-slideshow-nav').css({'padding-top':nt+'px'});
				that.find('li').each(function(index2){
					var that2 = $(this);
					var _left = _width * index2;
					that2.css({'margin-left':_left+'px'});
					that2.attr('data-slide-index',index2+1);
				});
				var _ns = parseInt(_num);
				that.find('li').css({'display':'none'});
				that.find('li[data-slide-index="'+_active+'"]').css({'display':''});
				that.off('click');
				that.on('click', function(event){
					that.find('.data-slideshow-nav-next a').click();
				});
				that.find('.data-slideshow-nav-next a').off('click');
				that.find('.data-slideshow-nav-next a').on('click', function(event){
					var _width = parseFloat(that.width());
					var _cs = parseInt(that.attr('data-active-slide')) || 1;
					var _fs = _cs;
					var _ss = _cs+1;
					if(_ss > _num) 
					_ss = 1;
					$('body').css({'overflow-x':'hidden'});
					that.find('li[data-slide-index="'+_fs+'"]').css({'display':'', 'margin-left':'0px'});
					that.find('li[data-slide-index="'+_ss+'"]').css({'display':'', 'margin-left':_width+'px'});
					that.find('li[data-slide-index="'+_fs+'"]').animate({'margin-left':'-'+_width+'px'}, 400, 'swing');
					that.find('li[data-slide-index="'+_ss+'"]').animate({'margin-left':'0px'}, 400, 'swing', function(){
						that.find('li').css({'display':'none'});
						that.find('li[data-slide-index="'+_ss+'"]').css({'display':''});					
						$('body').css({'overflow-x':''});
					});
					that.attr('data-active-slide', _ss);
					$(this).blur();
					return false;
				});
				that.find('.data-slideshow-nav-prev a').off('click');
				that.find('.data-slideshow-nav-prev a').on('click', function(event){
					var _width = parseFloat(that.width());
					var _cs = parseInt(that.attr('data-active-slide')) || 1;
					var _fs = _cs;
					var _ss = _cs-1;
					if(_ss < 1) 
					_ss = _num;
					$('body').css({'overflow-x':'hidden'});
					that.find('li[data-slide-index="'+_fs+'"]').css({'display':'', 'margin-left':'0px'});
					that.find('li[data-slide-index="'+_ss+'"]').css({'display':'', 'margin-left':'-'+_width+'px'});
					that.find('li[data-slide-index="'+_fs+'"]').animate({'margin-left':_width+'px'}, 400, 'swing');
					that.find('li[data-slide-index="'+_ss+'"]').animate({'margin-left':'0px'}, 400, 'swing', function(){
						that.find('li').css({'display':'none'});
						that.find('li[data-slide-index="'+_ss+'"]').css({'display':''});					
						$('body').css({'overflow-x':''});
					});
					that.attr('data-active-slide', _ss);
					$(this).blur();
					return false;
				});
			});
		}
		
		if($('[data-filter="true"]').length)
		{
			jQuery.expr[':'].__contains__ = function(a, i, m) {
			  return jQuery(a).text().toUpperCase()
				  .indexOf(m[3].toUpperCase()) >= 0;
			};
		}
		
		$('[data-filter="true"]').each(function(index){
			var that = $(this);
			$('[data-role="filter"][data-filter-id="filter'+index+'"]').remove();
			var placeholder = that.attr('data-filter-placeholder') || '';
			var ff = that.attr('data-filter-focus') || '';
			that.attr('data-filter-id', 'filter'+index);
			$('<input data-role="filter" data-full-width="true" type="text" />')
			.attr('data-filter-id', 'filter'+index)
			.attr('placeholder', placeholder)
			.insertBefore(that);			
			var fob = $('[data-role="filter"][data-filter-id="filter'+index+'"]');
			fob.off('change');
			fob.off('keyup');
			
			fob.on('change keyup', function(index){
				var val = $(this).val() || '';
				if(val.length > 0)
				{
					var role = that.attr('data-role')||'';
					if(role == 'listgroup')
					{
						that.find('li ul li').css({'display':'none'});
						that.find('li ul li:__contains__("'+val+'")').css({'display':''});
						if(that.find('li ul li:visible').length == 0)
						{
							that.css({'visibility':'hidden'});
						}
						else
						{
							that.css({'visibility':'visible'});
						}
					}
					else
					{
						that.find('tbody tr, li').css({'display':'none'});
						that.find('tbody tr:__contains__("'+val+'"), li:__contains__("'+val+'")').css({'display':''});
						if(that.find('tbody tr:visible, li:visible').length == 0)
						{
							that.css({'visibility':'hidden'});
						}
						else
						{
							that.css({'visibility':'visible'});
						}
					}
				}
				else
				{
					that.find('tbody tr, li').css({'display':''});
					that.css({'visibility':'visible'});
				}
			});
			if(ff == 'true')
			{
				fob.select();
			}
		});
		$('[data-sort="true"]').each(function(index){
			var that = $(this);
			var cols = that.attr('data-sort-cols') || '';
			var cs = that.attr('data-case-sensitive') || 'false';
			cs = cs.toLowerCase();
			var arrc = cols.split(',');
			var col, i, obj;
			for(i in arrc)
			{
				arrc[i] = arrc[i].trim();
			}
			that.find('tbody tr').each(function(index){
				var row = index+1;
				$(this).attr('data-row', row);
			});
			for(i in arrc)
			{
				col = arrc[i];
				obj = that.find('thead tr td:nth-child('+col+')');
				obj.find('.sort-control').remove();
				obj.attr('data-col', col).attr('data-sort-order', 'ascending').addClass('sort-trigger-tabel');
				obj.append(' <span class="sort-control icon caret-up"></span>');
				obj.on('click', function(event){
					var that2 = $(this);
					var col2 = that2.attr('data-col');
					var dt = that2.attr('data-type') || 'text';
					var df = that2.attr('data-number-format') || '.,';
					if(that2.attr('data-ordered') == 'true')
					{
						if(that2.attr('data-sort-order') == 'ascending')
						{
							// desc
							thisPlugin.sortTabelData(that, col2, {order:'descending', caseSensitive:cs, dataType:dt, numberFormat:df});
							that2.attr('data-sort-order', 'descending');
							that2.find('.sort-control').removeClass('caret-up').addClass('caret-down');
						}
						else
						{
							// asc
							thisPlugin.sortTabelData(that, col2, {order:'ascending', caseSensitive:cs, dataType:dt, numberFormat:df});
							that2.attr('data-sort-order', 'ascending');
							that2.find('.sort-control').removeClass('caret-down').addClass('caret-up');
						}
					}
					else
					{
						// asc
						thisPlugin.sortTabelData(that, col2, {order:'ascending', caseSensitive:cs, dataType:dt, numberFormat:df});
						that2.attr('data-sort-order', 'ascending').attr('data-ordered', 'true');
						that2.find('.sort-control').removeClass('caret-down').addClass('caret-up');
					}
				});
			}
		});
		
		$(document).on('click', function(){
			if($.inArray('menu', arrres) != -1)
			{
				$('[data-rel="menu"]').each(function(index){
					var that = $(this);
					var _url = that.attr('href');
					if(_url.indexOf('#') == 0)
					_url = _url.substr(1);
					_section = _url;
					if(that.attr('data-active') == 'true')
					{
						domObj = $('[data-role="menu-resource"][data-section="'+_section+'"]');
						_height = domObj.outerHeight();
						domObj.css({'display':'block','margin-top':'0'});
						domObj.animate({'marginTop':'-'+_height+'px'}, thisPlugin.animDelay, 'swing', function(){
							domObj.parent().css({'display':'none'});
							$('[data-rel="menu"]').removeAttr('data-active');
						});
					}
				});
			}
			if($.inArray('popup', arrres) != -1)
			{
				$('[data-role="popup"][data-close-on-click="true"]').each(function(index){
					var that = $(this);
					var _section = that.attr('data-section');
					$('[data-role="overlay"][data-section="'+_section+'"]').fadeOut(thisPlugin.animDelay);
					that.fadeOut(thisPlugin.animDelay);
				});
			}
			if($.inArray('popup-menu', arrres) != -1)
			{
				thisPlugin.closePopUpMenu();
			}
			if($.inArray('dropdown-menu', arrres) != -1)
			{
				thisPlugin.hideDropDownMenu();
			}
		});
		$(window).resize(function(event){
			thisPlugin.resizeUI(resources);
		});
	};
	this.replaceAll = function(inText,inFindStr,inReplStr,inCaseSensitive){
		inCaseSensitive = inCaseSensitive || false;
		var searchFrom=0;
		var offset=0;
		var outText="";
		var searchText="";
		if(inCaseSensitive){
			searchText=inText.toLowerCase();
			inFindStr=inFindStr.toLowerCase();
		} 
		else{
			searchText=inText;
		}
		offset=searchText.indexOf(inFindStr, searchFrom);
		while(offset!=-1){
			outText+=inText.substring(searchFrom, offset);
			outText+=inReplStr;
			searchFrom=offset + inFindStr.length;
			offset=searchText.indexOf(inFindStr, searchFrom);
		}
		outText+=inText.substring(searchFrom,inText.length);
		return (outText);
	};
	this.sortTabelData = function(that, col, args){
		args = args || {};
		args.order = args.order || 'ascending';
		args.caseSensitive = args.caseSensitive || false;
		args.dataType = args.dataType || 'text';
		args.numberFormat = args.numberFormat || '.,';
		
		var exclude = that.attr('data-exclude-cols') || '';
		var excludeCols = [];
		if(exclude != '')
		{
			excludeCols = exclude.split(',');
		}
		
		col = col-1;
		var tbl = that[0].tBodies[0];
		var store = [];
		var i, j, data, row;
		for(i=0, len=tbl.rows.length; i<len; i++){
			row = tbl.rows[i];
			data = (row.cells[col].textContent || row.cells[col].innerText);
			data = data.ftrim();
			store.push([data, row]);
		}
		
		// store exclude cols
		var ecol = [];
		var c;
		for(j in excludeCols)
		{
			c = parseInt(excludeCols[j])-1;
			ecol[j] = [];
			for(i=0, len=tbl.rows.length; i<len; i++){
				row = tbl.rows[i];
				data = row.cells[c].innerHTML;
				ecol[j].push(data);
			}
		}
		
		
		store.sort(function(x,y){
			var A = x[0];
			var B = y[0];
			if(args.dataType == 'number')
			{
				var ds = args.numberFormat.substr(0,1);
				var ts = args.numberFormat.substr(1,1) || ',';
				A = thisPlugin.replaceAll(A, ts, '');
				B = thisPlugin.replaceAll(B, ts, '');
				A = thisPlugin.replaceAll(A, ds, '.');
				B = thisPlugin.replaceAll(B, ds, '.');
				var A2 = parseFloat(A.ftrim());
				var B2 = parseFloat(B.ftrim());
				if (A2 < B2)
				{
					return -1;
				}
				else if(A2 > B2)
				{
					return  1;
				}
				else
				{
					return 0;
				}
			}
			else if(args.dataType == 'date')
			{
				var dt1 = (new Date(A)).getTime();
				var dt2 = (new Date(B)).getTime();

				if(isNaN(dt1) || isNaN(dt2))
				{
					if(args.caseSensitive)
					{
						dt1 = A;
						dt2 = B;
					}
					else
					{
						dt1 = A.toLowerCase();
						dt2 = B.toLowerCase();
					}
				}
				if (dt1 < dt2)
				{
					return -1;
				}
				else if (dt1 > dt2)
				{
					return  1;
				}
				else
				{
					return 0;
				}
			}
			else
			{
				if(!args.caseSensitive)
				{
					A = A.toLowerCase();
					B = B.toLowerCase();
				}
				if (A < B)
				{
					return -1;
				}
				else if (A > B)
				{
					return  1;
				}
				else
				{
					return 0;
				}
			}
		});
		if(args.order == 'descending')
		{
			for(var i=(store.length-1); i>=0; i--){
				tbl.appendChild(store[i][1]);
			}
		}
		else
		{
			for(var i=0, len=store.length; i<len; i++){
				tbl.appendChild(store[i][1]);
			}
		}
		for(j in excludeCols)
		{
			c = parseInt(excludeCols[j])-1;
			for(i=0, len=tbl.rows.length; i<len; i++){
				row = tbl.rows[i];
				try{row.cells[c].innerHTML = ecol[j][i];}
				catch(e){row.cells[c].innerText = ecol[j][i];}
			}
		}
		store = null;
	};
	this.showPopUp = function(_section)
	{
		var dw = $(document).width();
		var dh = $(document).height();
		var domObj = $('[data-role="popup"][data-section="'+_section+'"]');
		var title = domObj.attr('data-title') || '';
		var _cls = (domObj.attr('data-close-icon') == 'true');
		var _min = (domObj.attr('data-minimize-icon') == 'true');
		var _modal = (domObj.attr('data-modal') == 'true');
		var _autofocus = domObj.attr('data-autofocus') || 'true';
		var _minimize = _close = '';
		thisPlugin.lastPopupZIndex++;
		if(_cls)
		{
			_close = '<a href="#" class="mui-popup-closer" data-position="float-right"><span class="icon remove"></span></a> ';
		}
		if(_min)
		{
			_minimize = '<a href="#" class="mui-popup-minimizer" data-position="float-right"><span class="icon minus"></span></a> ';
		}
		if(title!='')
		{
			domObj.find('[data-role="header"]').remove();
			domObj.prepend('<h3 data-role="header" data-theme="a" data-gradien="true">'+_close+_minimize+title+'</h3>');
			if(_cls)
			{			
				$('[data-role="popup"][data-section="'+_section+'"] .mui-popup-closer').on('click', function(){
					thisPlugin.closePopUp(_section);
					return false;
				});
			}
		}
		if(_modal)
		{
			$('[data-role="overlay"][data-section="'+_section+'"]').remove();
			var zIndex = thisPlugin.lastPopupZIndex;
			$('<div />').attr('data-role', 'overlay').attr('data-section', _section).css({'position':'fixed','left':'0px','top':'0px','width':'100%','height':'100%','z-index':zIndex}).insertBefore(domObj).fadeIn(thisPlugin.animDelay);

		}
		var ajaxLocation = domObj.attr('data-location-async');
		if(typeof ajaxLocation != 'undefined')
		{
			domObj.html('&nbsp;');
			thisPlugin.resizeUI('popup');
			domObj.addClass('anim-loader-bg');
			var ajaxCache = (domObj.attr('data-cache')=='true')?true:false;
			var ajaxTimeout = domObj.attr('data-timeout') || 60000;
			$.ajax({
				url:ajaxLocation,
				cache:ajaxCache,
				timeout:ajaxTimeout,
				error:function(jqXHR, textStatus, errorThrown){
					if(textStatus == 'timeout')
					{
						thisPlugin.closePopUp(_section);
					}
				},
				success:function(data, textStatus, XMLHttpRequest){
					domObj.html(data);
					if(title!='')
					{
						domObj.find('[data-role="header"]').remove();
						domObj.prepend('<h3 data-role="header" data-theme="a" data-gradien="true">'+_close+title+'</h3>');
						if(_cls)
						{			
							$('[data-role="popup"][data-section="'+_section+'"] .mui-popup-closer').on('click', function(){
								thisPlugin.closePopUp(_section);
								return false;
							});
						}
					}
					domObj.removeClass('anim-loader-bg');
					thisPlugin.resizeUI('popup');
				}
			});
		}
		if(domObj.attr('data-splash') == 'true')
		{
			var delay = domObj.attr('data-splash-time') || 1600;
			setTimeout(function(){
				thisPlugin.closePopUp(domObj.attr('data-section'));
			}, delay);
		}
		thisPlugin.resizeUI('popup');
		thisPlugin.lastPopupZIndex++;
		var zIndex = thisPlugin.lastPopupZIndex;
		domObj.css({'z-index':zIndex}).attr('data-z-index',zIndex);
		domObj.fadeIn(thisPlugin.animDelay, function(){
			if(_autofocus == 'true')
			{
				if(domObj.find(':input').filter(':visible').length > 1)
				domObj.find(':input').filter(':visible').filter(':first').select();
				if(domObj.find(':input').filter(':visible').length == 1)
				domObj.find(':input').filter(':visible').select();
			}
		});
		
		$(document).on('keydown', function(event){
			if(event.keyCode == 27)
			{
				thisPlugin.closeUpperPopUp();
			}
		});
	};
	this.closePopUp = function(_section)
	{
		if(typeof _section == 'undefined')
		{
			$('[data-role="popup"]').fadeOut(thisPlugin.animDelay);
			$('[data-role="overlay"]').fadeOut(thisPlugin.animDelay);
		}
		else
		{
			$('[data-role="popup"][data-section="'+_section+'"]').fadeOut(thisPlugin.animDelay);
			$('[data-role="overlay"][data-section="'+_section+'"]').fadeOut(thisPlugin.animDelay);
		}
	};
	this.closeUpperPopUp = function(){
		var zIndex = 0;
		var section = '';
		$('[data-role="popup"]:visible').each(function(){
			var zi = parseInt($(this).attr('data-z-index')||0);
			if(zi > zIndex)
			{
				zIndex = zi;
				section = $(this).attr('data-section');
			}
		});
		thisPlugin.closePopUp(section);
	};
	this.showMenuDOM =  function(domObj, domTrigger)
	{
		var _height = domObj.parent().height();
		$('[data-role="menu-resource"]').css({'display':'none'});
		$('[data-role="menu-resource"]').parent().css({'display':'none'});
		$('[data-rel="menu"]').removeAttr('data-active');
		
		// debug
		var bw = $('body').outerWidth();
		domObj.parent().css({'width':bw+'px'}).css({'display':'block'});
		domObj.css({'display':'block','margin-top':'-'+_height+'px'});
		domObj.animate({'marginTop':'0px'}, thisPlugin.animDelay, 'swing', function(){
			domTrigger.attr('data-active', 'true');
		});
	};
	this.showMenu =  function(_section)
	{
		var domObj = $('[data-role="menu-resource"][data-section="'+_section+'"]');
		var domTrigger = $('[data-rel="menu"][href="#'+_section+'"]');
		if(domObj.filter(':visible').length)
		{
			$('[data-rel="menu"]').removeAttr('data-active');
		}
		else
		{
			thisPlugin.showMenuDOM(domObj, domTrigger);
		}
	};
	this.closeMenuDOM = function(domObj)
	{
		var _height = domObj.outerHeight();
		domObj.css({'display':'block','margin-top':'0'});
		domObj.animate({'marginTop':'-'+_height+'px'}, thisPlugin.animDelay, 'swing', function(){
			domObj.parent().css({'display':'none'});
			$('[data-rel="menu"]').removeAttr('data-active');
		});
	};
	this.closeMenu =  function(_section)
	{
		if(typeof _section == 'undefined')
		{
			var domObj = $('[data-role="menu-resource"]');
			domObj.each(function(index){
				thisPlugin.closeMenuDOM($(this));
			});
		}
		else
		{
			var domObj = $('[data-role="menu-resource"][data-section="'+_section+'"]');
			domObj.each(function(index){
				thisPlugin.closeMenuDOM($(this));
			});
		}
	};
	this.showAside = function(_section, noanim){
		var delay;
		if(noanim)
		{
			delay = 0;
		}
		else
		{
			delay = thisPlugin.animDelay;
		}
		$('aside[data-section="'+_section+'"][data-visibility!="visible"]').each(function(index){
			var domObj = $(this);
			var isResize = domObj.attr('data-resize') || 'false';
			domObj.css({'display':'block'});
			domObj.attr('data-visibility', 'visible');
			if(domObj.attr('data-transition') == 'left')
			{
				domObj.css({'display':'block'});
				var _width = domObj.outerWidth();
				var _float = domObj.attr('data-aside-float') || 'false';
				if(_float == 'true')
				{
					domObj.animate({marginLeft:'0px'}, delay, 'swing', function(){
						domObj.attr('data-active', 'true');
					});
				}
				else
				{
					var mr1 = parseInt($('body').css('margin-right'));
					var ras = $('[data-role="aside"][data-transition="right"]:visible').length;
					var mr2 = (isResize != 'true' && mr1 == 0 && ras == 0)?((_width*-1)):0;
					if(ras > 0)
					{
						mr2 = mr1;
					}
					if(isResize == 'false')
					{
						$('body').css({'overflow-x':'hidden'});	
					}
					else
					{
						$('body').css({'overflow-x':''});	
					}
					$('body').animate({'margin-left':_width+'px', 'margin-right':mr2+'px'}, delay, 'swing', function(){
						domObj.attr('data-active', 'true');
						thisPlugin.fixFooterPosition();
					});
				}
			}
			if(domObj.attr('data-transition') == 'right')
			{
				domObj.css({'display':'block'});
				var _width = domObj.outerWidth();
				var _float = domObj.attr('data-aside-float') || 'false';
				if(_float == 'true')
				{
					$('body').css({'overflow-x':'hidden'});
					domObj.animate({marginRight:_width+'px'}, delay, 'swing', function(){
						domObj.attr('data-active', 'true');
						$('body').css({'overflow-x':''});
					});
				}
				else
				{
					var ml1 = parseInt($('body').css('margin-left'));
					var las = $('[data-role="aside"][data-transition="left"]:visible').length;
					var ml2 = (isResize != 'true' && ml1 == 0 && las == 0)?((_width*-1)):0;
					if(las > 0)
					{
						ml2 = ml1;
					}
					$('body').css({'overflow-x':'hidden'});
					$('body').animate({'margin-right':_width+'px', 'margin-left':ml2+'px'}, delay, 'swing', function(){
						$('body').css({'overflow-x':'auto'});
					});
					domObj.animate({marginRight:'0px'}, delay, 'swing', function(){
						domObj.attr('data-active', 'true');
						thisPlugin.fixFooterPosition();
					});
				}
			}
		});
	};
	this.closeAside = function(_section)
	{
		var domObj;
		if(typeof _section == 'undefined')
		{
			domObj = $('aside');
		}
		else
		{
			domObj = $('aside[data-section="'+_section+'"]');
		}
		var isResize = domObj.attr('data-resize') || 'false';
		domObj.each(function(index){
			var that = $(this);
			var _width = that.outerWidth();
			var _trans = that.attr('data-transition');
			var dl = document.location + '';
			dl = dl.split('#')[0];
			if(_trans == 'left')
			{
				var _float = domObj.attr('data-aside-float') || 'false';
				if(_float == 'true')
				{
					domObj.animate({'margin-left':'-'+_width+'px'}, thisPlugin.animDelay, 'swing', function(){
						try{
							var ttl = document.title+'';
							window.history.replaceState(null, null, dl);
							document.title = ttl;
						}
						catch(e)
						{
							window.location = '#';
						}
						domObj.attr('data-visibility', 'hidden');
						domObj.removeAttr('data-active');
						thisPlugin.fixFooterPosition();
					});
				}
				else
				{
					var mr1 = parseInt($('body').css('margin-right'));
					var mr2 = (isResize != 'true' && mr1 < 0)?0:mr1;
					if(typeof _section == 'undefined')
					{
						mr2 = 0;
					}
					$('body').animate({'margin-left':'0px', 'margin-right':mr2+'px'}, thisPlugin.animDelay, 'swing', function(){
						domObj.css({'display':'none'});
						try{
							var ttl = document.title+'';
							window.history.replaceState(null, null, dl);
							document.title = ttl;
						}
						catch(e)
						{
							window.location = '#';
						}
						domObj.attr('data-visibility', 'hidden');
						domObj.removeAttr('data-active');
						thisPlugin.fixFooterPosition();
					});
				}
			}
			if(_trans == 'right')
			{
				var _float = domObj.attr('data-aside-float') || 'false';
				if(_float == 'true')
				{
					$('body').css({'overflow-x':'hidden'});
					that.animate({'margin-right':'-'+_width+'px'}, thisPlugin.animDelay, 'swing', function(){
						$('body').css({'overflow-x':''});
						that.css({'display':'none'});
						domObj.attr('data-visibility', 'hidden');
						domObj.removeAttr('data-active');
						try{
							var ttl = document.title+'';
							window.history.replaceState(null, null, dl);
							document.title = ttl;
						}
						catch(e)
						{
							window.location = '#';
						}
					});
				}
				else
				{
					var ml1 = parseInt($('body').css('margin-left'));
					var ml2 = (isResize != 'true' && ml1 < 0)?0:ml1;
					var las = $('[data-role="aside"][data-transition="left"]:visible').length;
					if(las > 0)
					{
						ml2 = ml1;
					}
					if(typeof _section == 'undefined')
					{
						ml2 = 0;
					}
					$('body').css({'overflow-x':'hidden'});
					$('body').animate({'margin-right':'0px', 'margin-left':ml2+'px'}, thisPlugin.animDelay, 'swing', function(){
						$('body').css({'overflow-x':'auto'});
					});
					that.animate({'margin-right':'0px'}, thisPlugin.animDelay, 'swing', function(){
						that.css({'display':'none'});
						domObj.attr('data-visibility', 'hidden');
						domObj.removeAttr('data-active');
						try{
							var ttl = document.title+'';
							window.history.replaceState(null, null, dl);
							document.title = ttl;
						}
						catch(e)
						{
							window.location = '#';
						}
					});
				}
			}
		});
	};
	this.toggleAside = function(_section)
	{
		if(typeof _section == 'undefined')
		{
			this.closeAside();
		}
		else
		{
			var _disp = $('aside[data-section="'+_section+'"][data-active="true"]').length;
			if(_disp)
			{
				this.closeAside(_section);
			}
			else
			{
				this.showAside(_section);
			}
		}
	};
	this.collapseCollapsible = function(obj, col){
		
		if(col == false)
		{
			$(obj).find('[data-role="collapsible-content"]').slideDown(thisPlugin.animDelay, 'swing', function(){
				obj.attr('data-collapsed', 'false');
			});
		}
		else
		{
			$(obj).find('[data-role="collapsible-content"]').slideUp(thisPlugin.animDelay, 'swing', function(){
				obj.attr('data-collapsed', 'true');
			});
		}

	};
	this.resizeUI = function(resources)
	{
		resources = resources || '';
		resources = resources.toLowerCase();
		var arrres = resources.split(' ');
		
		/*popup start*/
		if($.inArray('popup', arrres) != -1)
		{
			var ww = parseInt($(window).width());
			var wh = parseInt($(window).height());
			var dw = parseInt($(document).width());
			var dh = parseInt($(document).height());
			var sl = parseInt($(document).scrollLeft());
			var ol = parseInt($('body').offset().left);
			var st = parseInt($(document).scrollTop());
			$('[data-role="popup"]').each(function(index){
				var that = $(this);
				var pw = that.outerWidth();
				var ph = that.outerHeight();
				var cx = (ww-pw)/2;
				var cy = (wh-ph)/2;
				var _left = cx+sl;
				if(ol>0)
				{
					_left = _left - ol;
				}
				var _top = cy+st;
				if(_top<0)
				{
					_top = 0;
				}
				that.css({'left':_left+'px', 'top':_top+'px'});
			});
			$('[data-role="overlay"]').css({'position':'fixed','left':'0px','top':'0px','width':'100%','height':'100%'});
		}
		/*popup end*/
		if($.inArray('menu', arrres) != -1)
		{
			var bw = $('body').outerWidth();
			$('[data-role="menu-resource"]').parent().css({'width':bw+'px'});
		}
		thisPlugin.fixFooterPosition();
	};
	this.togglePopUpMenuDOM = function(domObj)
	{
		if(domObj.css('display') == 'block')
		{
			domObj.css({'display':'none'});
		}
		else
		{
			if(domObj.attr('data-close-other') == 'true')
			{
				$('[data-role="popup-menu"]').css({'display':'none'});
			}
			if(domObj.attr('data-child-align') == 'right')
			{
				// find parent
				var _ml = parseFloat($('body').css('margin-left'));
				var _left = parseFloat(domObj.parent().offset().left);
				var _width = parseFloat(domObj.parent().outerWidth());
				var _right = Math.round(_left + _width);
				var _leftchild = _right - domObj.outerWidth() - _ml;
				domObj.css({'left':_leftchild+'px'});	
			}
			domObj.css({'display':'block'});
		}
	};
	this.showPopUpMenu = function(_section){
		var domObj = $('[data-role="popup-menu"][data-section="'+_section+'"]');
		if(domObj.attr('data-close-other') == 'true')
		{
			$('[data-role="popup-menu"]').css({'display':'none'});
		}
		if(domObj.attr('data-child-align') == 'right')
		{
			// find parent
			var _ml = parseFloat($('body').css('margin-left'));
			var _left = parseFloat(domObj.parent().offset().left);
			var _width = parseFloat(domObj.parent().outerWidth());
			var _right = Math.round(_left + _width);
			var _leftchild = _right - domObj.outerWidth() - _ml;
			domObj.css({'left':_leftchild+'px'});	
		}
		domObj.css({'display':'block'});
	};
	this.closePopUpMenu = function(_section){
		var domObj;
		if(typeof _section == 'undefined')
		domObj = $('[data-role="popup-menu"]');
		else
		domObj = $('[data-role="popup-menu"][data-section="'+_section+'"]');
		domObj.css({'display':'none'});
	};
	this.hideDropDownMenu = function(_section){
		var domObj;
		if(typeof _section == 'undefined')
		domObj = $('[data-role="dropdown-menu"]');
		else
		domObj = $('[data-role="dropdown-menu"][data-section="'+_section+'"]');
		domObj.each(function(index){
			$(this).find('ul').css({'display':'none'});
		});
	};
	this.showSubmenu = function(obj){
		var _obj = obj.parent();
		while(_obj.length)
		{
			_obj.css({'display':'block'});
			_obj = _obj.parent().parent();
		}
	};
	this.showTooltip = function(_section, _trigger){
		var _wt = parseFloat($(_trigger).outerWidth());
		var _ht = parseFloat($(_trigger).outerHeight());
		var _lt = parseFloat($(_trigger).offset().left);
		var _tt = parseFloat($(_trigger).offset().top);
		var _lb = parseFloat($('body').offset().top);
		
		var domObj = $('[data-role="tooltip"][data-section="'+_section+'"]');
		var _wd = domObj.width();
		domObj.css({'display':'block'});
		domObj.off('mouseout mouseover');
		domObj.on('mouseout', function(){
			thisPlugin.tooltipTimeout = setTimeout(function(){
				thisPlugin.hideTooltip(_section, _trigger);
			}, 1000);		
		});
		domObj.on('mouseover', function(){
			clearTimeout(thisPlugin.tooltipTimeout);
		});
	};
	this.hideTooltip = function(_section, _trigger){
		var domObj = $('[data-role="tooltip"][data-section="'+_section+'"]');
		domObj.css({'display':'none'});		
	};
	this.wipeListMove = function(selector, result){
		var index = $(selector).attr('data-index') || 0;		
		var leftpos = $(selector).attr('data-last-pos');
		var index = $(selector).attr('data-index');
		if(typeof leftpos == 'undefined')
		{
			leftpos = 0;
			$(selector).attr('data-last-pos', '0')
		}
		if(typeof index == 'undefined')
		{
			index = 0;
			$(selector).attr('data-index', '0')
		}
		index = parseInt(index);
		leftpos = parseFloat(leftpos);
		var shiftX = parseFloat(result.curX) - parseFloat(result.startX);
		var left = leftpos + shiftX;
		$(selector).attr({'data-cur-pos':left, 'data-last-pos':leftpos});
		$(selector).find(' > li:nth-child(1)').css({'margin-left':left+'px'});
	};
	this.wipeListStatus = function(selector, result, sign)
	{
		sign = sign || 1;
		var startX = result.startX;
		var width = parseFloat($(selector).find(' > li:nth-child(2)').offset().left) - parseFloat($(selector).find(' > li:nth-child(1)').offset().left);
		var index = parseInt($(selector).attr('data-index'));
		var nsection = ($(selector).find(' > li').length);
		var lp = parseFloat($(selector).attr('data-last-pos'));
		var shiftX = parseFloat(result.x);
		if(sign < 0)
		{
			// move left
			var nx = result.x / width;
			if(Math.abs(shiftX) > 100)
			{
				index += Math.round(nx);
			}
			if(index >= nsection)
			{
				index = nsection-1;
			}
			var nl = (index*width*-1);
			
			$(selector).find(' > li:nth-child(1)').animate({'margin-left':nl+'px'}, 200, 'swing', function(){
				$(selector).attr({'data-index': index, 'data-last-pos':nl});
			});
		}
		if(sign > 0)
		{
			// move right
			var nx = result.x / width;
			if(Math.abs(shiftX) > 100)
			{
				index -= Math.round(nx);
			}
			if(index<0)
			{
				index = 0;
			}
			var nl = (index*width*-1);
			$(selector).find(' > li:nth-child(1)').animate({'margin-left':nl+'px'}, 200, 'swing', function(){
				$(selector).attr({'data-index':index, 'data-last-pos':nl});
			});
		}
		var cb = $(selector).attr('data-callback') || '';
		if(cb != '')
		{
			try{eval(cb+'('+index+');');}
			catch(e){}
		}
		var pw = $(selector).parent().width();
		var cw = nsection * width;
		if((cw + nl - pw) < 3*width)
		{
			thisPlugin.wipeListCheckAJAX(selector);
		}
	};
	this.wipeListCheckAJAX = function(selector, args)
	{
		var url = $(selector).attr('data-ajax-location');
		if(typeof url != 'undefined')
		{
			var offset = $(selector).attr('data-ajax-offset') || 0;
			var numload = $(selector).attr('data-ajax-num-load') || 1;
			offset = parseInt(offset);
			numload = parseInt(numload);
			$.get(url, {offset:offset, numload:numload}, function(data){
				var offset2 = $(selector).attr('data-ajax-offset') || 0;
				// prevent overlap
				if(offset2 < (offset+numload))
				{
					$(selector).attr('data-ajax-offset', offset+numload);
					$(selector).append(data);
				}
			});
		}
	}
	this.wipeListTo = function(selector, index)
	{
		this.wipeListGoTo(selector, index);
	};
	this.wipeListGoTo = function(selector, index)
	{
		var nsection = ($(selector).find(' > li').length);
		var width = parseFloat($(selector).find(' > li:nth-child(2)').offset().left) - parseFloat($(selector).find(' > li:nth-child(1)').offset().left);
		index = index || 0;
		index = parseInt(index);
		if(index >= nsection)
			index = nsection-1;
		if(index<0) 
			index = 0;
		var nl = width*index*-1;
		$(selector).find(' > li:nth-child(1)').animate({'margin-left':nl+'px'}, 200, 'swing', function(){
			$(selector).attr({'data-index':index, 'data-last-pos':nl});
		});
		var pw = $(selector).parent().width();
		var cw = nsection * width;
		if((cw + nl - pw) < 3*width)
		{
			thisPlugin.wipeListCheckAJAX(selector);
		}
	};
	this.wipeListNext = function(selector, step)
	{
		step = step || 1;
		var ci = $(selector).attr('data-index') || 0;
		ci = parseInt(ci);
		this.wipeListGoTo(selector, ci+step);
	}
	this.wipeListPrev = function(selector, step)
	{
		step = step || 1;
		var ci = $(selector).attr('data-index') || 0;
		ci = parseInt(ci);
		this.wipeListGoTo(selector, ci-step);
	};
	this.wipePageStatus = function(selector, result, sign)
	{
		sign = sign || 1;
		var startX = result.startX;
		var width = parseFloat($(selector).width());
		var index = parseInt($(selector).attr('data-index'));
		var nsection = ($(selector).find('> section').length);
		var lp = parseFloat($(selector).attr('data-last-pos'));
		var shiftX = parseFloat(result.x);
		if(sign < 0)
		{
			// move left
			if(Math.abs(shiftX) > 100)
			index++;
			if(index >= nsection)
			{
				index = nsection-1;
			}
			var nl = (index*width*-1);
			
			$(selector).find('section:nth-child(1)').animate({'margin-left':nl+'px'}, 200, 'swing', function(){
				$(selector).attr({'data-index': index, 'data-last-pos':nl});
				thisPlugin.wipePageStat(selector, result, nl, false);
			});
		}
		if(sign > 0)
		{
			// move right
			if(Math.abs(shiftX) > 100)
			index--;
			if(index<0)
			{
				nl = 0;
				index = 0;
			}
			var nl = (index*width*-1);
			$(selector).find('section:nth-child(1)').animate({'margin-left':nl+'px'}, 200, 'swing', function(){
				$(selector).attr({'data-index':index, 'data-last-pos':nl});
				thisPlugin.wipePageStat(selector, result, nl, false);
			});
		}
	}
	this.wipePageMove = function(selector, result)
	{
		var startX = result.startX;
		var leftpos = $(selector).attr('data-last-pos');
		var index = $(selector).attr('data-index');
		var width = parseFloat($(selector).width());
		if(typeof leftpos == 'undefined')
		{
			leftpos = 0;
			$(selector).attr('data-last-pos', leftpos)
		}
		if(typeof index == 'undefined')
		{
			index = 0;
			$(selector).attr('data-index', index)
		}
		index = parseInt(index);
		var leftpos = parseFloat(leftpos);
		var shiftX = parseFloat(result.curX) - parseFloat(result.startX);
		var left = leftpos + parseFloat(shiftX);
		$(selector).attr('data-cur-pos', left);
		thisPlugin.wipePageStat(selector, result, left, true);
	};
	this.wipePageStat = function(selector, result, nl, status)
	{
		var index = $(selector).attr('data-index') || 0;
		index = parseInt(index);
		var idx = index+1;
		if(status == true)
		{
			$(selector).find('> section').css({'display':'inline-block'}).css({'margin-left':'0px'});
			$(selector).find('> section:nth-child(1)').css({'margin-left':nl+'px'});
		}
		else
		{
			$(selector).find('> section').css({'display':'none'});
			$(selector).find('> section:nth-child('+idx+')').css({'display':'inline-block','margin-left':'0px'});
		}
		var cb = $(selector).attr('data-callback') || '';
		if(cb != '')
		{
			try{eval(cb+'('+index+');');}
			catch(e){}
		}
	};
	this.wipePageTo = function(selector, index)
	{
		this.wipePageGoTo(selector, index);
	};
	this.wipePageGoTo = function(selector, index)
	{
		var nsection = ($(selector).find(' > section').length);
		index = index || 0;
		index = parseInt(index);
		if(index >= nsection)
			index = nsection-1;
		if(index<0) 
			index = 0;
		var _idx2 = $(selector).attr('data-index') || 0;
		_idx2 = parseInt(_idx2);
		var idx = _idx2+1;
		var width = parseFloat($(selector).width());
		var nl1 = -width*_idx2;
		var nl2 = -width*(index);
		$(selector).find('> section').css({'display':'inline-block'}).css({'margin-left':'0px'});
		$(selector).find('> section:nth-child(1)').css({'margin-left':nl1+'px'});
		$(selector).find('section:nth-child(1)').animate({'margin-left':nl2+'px'}, 200, 'swing', function(){
			$(selector).attr({'data-index': index, 'data-last-pos':nl2});
			thisPlugin.wipePageStat(selector, null, null, false);
		});
	};
	this.wipePageNext = function(selector)
	{
		var nsection = ($(selector).find(' > section').length);
		var ci = $(selector).attr('data-index') || 0;
		ci = parseInt(ci)+1;
		if(ci<nsection)
		this.wipePageGoTo(selector, ci);
	};
	this.wipePagePrev = function(selector)
	{
		var ci = $(selector).attr('data-index') || 0;
		ci = parseInt(ci)-1;
		if(ci>=0)
			this.wipePageGoTo(selector, ci);
	};
	this.matchArray = function(obj, str, clbk)
	{
		if(typeof obj == 'object')
		{
			var obj2 = [];
			var i;
			var str2 = str.toLowerCase();
			for(i in obj)
			{
				try{
				if(obj[i]['l'].toLowerCase().indexOf(str2) > -1)
				{
					obj2.push({'v':obj[i]['v'], 'l':obj[i]['l']});
				}
				}
				catch(e){}
			}
			clbk(obj2);
		}	
	};
	this.fixTimeout;
	this.fixFooterPosition = function()
	{
		/*
		clearTimeout(thisPlugin.fixTimeout);
		thisPlugin.fixTimeout = setTimeout(function(){
		$('[data-float="bottom"]').css({'margin-top':'', 'visibility':'hidden'});
		var dh = parseFloat($(document).height());
		$('[data-float="bottom"]').each(function(index){
			var that = $(this);
			var ft = parseFloat(that.offset().top);
			var fh = parseFloat(that.outerHeight());
			var fb = ft+fh;
			var nt = dh - fb;
			if((dh-fb) > 10)
			{
				that.css({'margin-top':nt+'px'});
			}
		});
		$('[data-float="bottom"]').css({'visibility':'visible'});
		}, 100);
		*/
	};
	this.parse_url = function(url) {
        var parser = document.createElement('a'),
            searchObject = {},
            queries, split, i;
        parser.href = url;
        queries = parser.search.replace(/^\?/, '').split('&');
        for( i = 0; i < queries.length; i++ ) {
            split = queries[i].split('=');
            searchObject[split[0]] = split[1];
        }
        return {
            protocol: parser.protocol,
            host: parser.host,
            hostname: parser.hostname,
            port: parser.port,
            pathname: parser.pathname,
            search: parser.search,
            searchObject: searchObject,
            hash: parser.hash
        };
    };
	var thisPlugin = this;
	this.init(resources);
	this.resizeUI(resources);
	this.fixFooterPosition();
}


(function ($)
{
	$.fn.wipetouch = function (settings)
	{
		// ------------------------------------------------------------------------
		// PLUGIN SETTINGS
		// ------------------------------------------------------------------------

		var config = {

			// Variables and options
			moveX: 4, 	// minimum amount of horizontal pixels to trigger a wipe event
			moveY: 40, 	// minimum amount of vertical pixels to trigger a wipe event
			tapToClick: false, // if user taps the screen it will fire a click event on the touched element
			preventDefault: true, // if true, prevents default events (click for example)
			allowDiagonal: false, // if false, will trigger horizontal and vertical movements so wipeUpLeft, wipeDownLeft, wipeUpRight, wipeDownRight are ignored

			// Wipe events
			wipeLeft: false, // called on wipe left gesture
			wipeRight: false, // called on wipe right gesture
			wipeUp: false, // called on wipe up gesture
			wipeDown: false, // called on wipe down gesture
			wipeUpLeft: false, // called on wipe top and left gesture
			wipeDownLeft: false, // called on wipe bottom and left gesture
			wipeUpRight: false, // called on wipe top and right gesture
			wipeDownRight: false, // called on wipe bottom and right gesture
			wipeMove: false, // triggered whenever touchMove acts

			// DEPRECATED EVENTS
			wipeTopLeft: false, // USE WIPEUPLEFT
			wipeBottomLeft: false, // USE WIPEDOWNLEFT
			wipeTopRight: false, // USE WIPEUPRIGHT
			wipeBottomRight: false	// USE WIPEDOWNRIGHT
		};

		if (settings)
		{
			$.extend(config, settings);
		}

		return this.each(function ()
		{
			// ------------------------------------------------------------------------
			// INTERNAL VARIABLES
			// ------------------------------------------------------------------------

			var startX; 					// where touch has started, left
			var startY; 					// where touch has started, top
			var startDate = false; 			// used to calculate timing and aprox. acceleration
			var curX; 						// keeps touch X position while moving on the screen
			var curY; 						// keeps touch Y position while moving on the screen
			var isMoving = false; 			// is user touching and moving?
			var touchedElement = false; 	// element which user has touched

			// These are for non-touch devices!
			var useMouseEvents = false; 	// force using the mouse events to simulate touch
			var clickEvent = false; 		// holds the click event of the target, when used hasn't clicked
			var node = $(this);

			// ------------------------------------------------------------------------
			// TOUCH EVENTS
			// ------------------------------------------------------------------------

			// Called when user touches the screen.
			function onTouchStart(e)
			{
				var start = useMouseEvents || (e.originalEvent.touches && e.originalEvent.touches.length > 0);

				if (!isMoving && start)
				{
					if (config.preventDefault)
					{
						e.preventDefault();
					}

					// Temporary fix for deprecated events, these will be removed on next version!
					if (config.allowDiagonal)
					{
						if (!config.wipeDownLeft)
						{
							config.wipeDownLeft = config.wipeBottomLeft;
						}

						if (!config.wipeDownRight)
						{
							config.wipeDownRight = config.wipeBottomRight;
						}

						if (!config.wipeUpLeft)
						{
							config.wipeUpLeft = config.wipeTopLeft;
						}

						if (!config.wipeUpRight)
						{
							config.wipeUpRight = config.wipeTopRight;
						}
					}

					// When touch events are not present, use mouse events.
					if (useMouseEvents)
					{
						startX = e.screenX;
						startY = e.screenY;

						$(this).on("mousemove", onTouchMove);
						$(this).one("mouseup", onTouchEnd);
					}
					else
					{
						startX = e.originalEvent.touches[0].screenX;
						startY = e.originalEvent.touches[0].screenY;

						$(this).on("touchmove", onTouchMove);
					}

					// Set the start date and current X/Y.
					startDate = new Date().getTime();
					curX = startX;
					curY = startY;
					isMoving = true;

					touchedElement = $(e.target);
				}
			}

			// Called when user untouches the screen.
			function onTouchEnd(e)
			{
				if (config.preventDefault)
				{
					e.preventDefault();
				}

				// When touch events are not present, use mouse events.
				if (useMouseEvents)
				{
					$(this).off("mousemove", onTouchMove);
				}
				else
				{
					$(this).off("touchmove", onTouchMove);
				}

				// If is moving then calculate the touch results, otherwise reset it.
				if (isMoving)
				{
					touchCalculate(e);
				}
				else
				{
					resetTouch();
				}
			}

			// Called when user is touching and moving on the screen.
			function onTouchMove(e)
			{
				if (config.preventDefault)
				{
					e.preventDefault();
				}

				if (useMouseEvents && !isMoving)
				{
					onTouchStart(e);
				}

				if (isMoving)
				{
					if (useMouseEvents)
					{
						curX = e.screenX;
						curY = e.screenY;
					}
					else
					{
						curX = e.originalEvent.touches[0].screenX;
						curY = e.originalEvent.touches[0].screenY;
					}

					// If there's a wipeMove event, call it passing
					// current X and Y position (curX and curY).
					if (config.wipeMove)
					{
						triggerEvent(config.wipeMove, {
							curX: curX,
							curY: curY,
							startX: startX,
							startY: startY,
							node:node
						});
					}
				}
			}

			// ------------------------------------------------------------------------
			// CALCULATE TOUCH AND TRIGGER
			// ------------------------------------------------------------------------

			function touchCalculate(e)
			{
				var endDate = new Date().getTime(); 	// current date to calculate timing
				var ms = startDate - endDate; 			// duration of touch in milliseconds

				var x = curX; 							// current left position
				var y = curY; 							// current top position
				var dx = x - startX; 					// diff of current left to starting left
				var dy = y - startY; 					// diff of current top to starting top
				var ax = Math.abs(dx); 					// amount of horizontal movement
				var ay = Math.abs(dy); 					// amount of vertical movement

				// If moved less than 15 pixels, touch duration is less than 100ms,
				// and tapToClick is true then trigger a click event and stop processing.
				if (ax < 15 && ay < 15 && ms < 100)
				{
					clickEvent = false;

					if (config.preventDefault)
					{
						resetTouch();

						touchedElement.trigger("click");
						return;
					}
				}
				// When touch events are not present, use mouse events.
				else if (useMouseEvents)
				{
					var evts = touchedElement.data("events");

					if (evts)
					{
						// Save click event to the temp clickEvent variable.
						var clicks = evts.click;

						if (clicks && clicks.length > 0)
						{
							$.each(clicks, function (i, f)
							{
								clickEvent = f;
								return;
							});

							touchedElement.off("click");
						}
					}
				}

				// Is it moving to the right or left, top or bottom?
				var toright = dx > 0;
				var tobottom = dy > 0;

				// Calculate speed from 1 to 5, 1 being slower and 5 faster.
				var s = ((ax + ay) * 60) / ((ms) / 6 * (ms));

				if (s < 1) s = 1;
				if (s > 5) s = 5;

				var result = {
					speed: parseInt(s),
					x: ax,
					y: ay,
					source: touchedElement,
					node: node
				};

				if (ax >= config.moveX)
				{
					// Check if it's allowed and trigger diagonal wipe events.
					if (config.allowDiagonal && ay >= config.moveY)
					{
						if (toright && tobottom)
						{
							triggerEvent(config.wipeDownRight, result);
						}
						else if (toright && !tobottom)
						{
							triggerEvent(config.wipeUpRight, result);
						}
						else if (!toright && tobottom)
						{
							triggerEvent(config.wipeDownLeft, result);
						}
						else
						{
							triggerEvent(config.wipeUpLeft, result);
						}
					}
					// Otherwise trigger horizontal events if X > Y.
					else if (ax >= ay)
					{
						if (toright)
						{
							triggerEvent(config.wipeRight, result);
						}
						else
						{
							triggerEvent(config.wipeLeft, result);
						}
					}
				}
				// If Y > X and no diagonal, trigger vertical events.
				
				else if (ay >= config.moveY && ay > ax)
				{
					if (tobottom)
					{
						triggerEvent(config.wipeDown, result);
					}
					else
					{
						triggerEvent(config.wipeUp, result);
					}
				}

				resetTouch();
			}

			// Resets the cached variables.
			function resetTouch()
			{
				startX = false;
				startY = false;
				startDate = false;
				isMoving = false;

				// If there's a click event, on after a few miliseconds.
				if (clickEvent)
				{
					window.setTimeout(function ()
					{
						touchedElement.on("click", clickEvent);
						clickEvent = false;
					}, 50);
				}
			}

			// Trigger a wipe event passing a result object with
			// speed from 1 to 5, x / y movement amount in pixels,
			// and the source element.
			function triggerEvent(wipeEvent, result)
			{
				if (wipeEvent)
				{
					wipeEvent(result);
				}
			}

			// ------------------------------------------------------------------------
			// ADD TOUCHSTART AND TOUCHEND EVENT LISTENERS
			// ------------------------------------------------------------------------

			if ("ontouchstart" in document.documentElement)
			{
				$(this).on("touchstart", onTouchStart);
				$(this).on("touchend", onTouchEnd);
			}
			else
			{
				useMouseEvents = true;

				$(this).on("mousedown", onTouchStart);
				$(this).on("mouseout", onTouchEnd);
			}
		});

	};
})(jQuery);