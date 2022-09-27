String.prototype.toSubString = function(b) {var c = this;if (c == "" || c.Length <= b) {return c;}var a = $.trim(c).lastIndexOf(" ");c = c.substring(0, Math.min(c.length, b));if (c.length > a) {c = c.substring(0, a);}return c;};$.fn.trimLine = function(a, b) {return this.each(function() {var f = $(this).text().length;var d = parseFloat($(this).css("line-height")) * a;if (isNaN(d)) {d = parseFloat($(this).css("font-size").replace("px", "")) * a;}var e = ($(this).height() > d && f > 0);while ($(this).height() > d && f > 0) {f--;var g = $(this).html().toSubString(f);$(this).html(g);}if (e) {$(this).html($(this).html().substring(0, $(this).html().lastIndexOf(" ")) + " ...");}if (true === b) {$(this).css({"min-height": d + "px",})}})};
var Website = {
	run: function(){
		$(".limit-one-line").trimLine(1);$(".limit-two-line").trimLine(2);$(".limit-three-line").trimLine(3);$(".limit-four-line").trimLine(4);
		$(".allowfloat").on("keypress keyup blur",function (event) {$(this).val($(this).val().replace(/[^0-9\.]/g,''));if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {event.preventDefault();}});
		$(".allowint").on("keypress keyup blur",function (event) {$(this).val($(this).val().replace(/[^\d].+/, ""));if ((event.which < 48 || event.which > 57)) {event.preventDefault();}});
		$(".support-gotop").click(function() { $("body,html").animate({ scrollTop: 0 }, "500") });
		var cur_w = $(window).width();
		$(window).resize(function(){
			if((cur_w > 991 && $(window).width() <= 991) || (cur_w <= 991 && $(window).width() > 991)){ location.reload(); }
		});
		var head_height = $('header').height(), head_top = $('header').offset().top;
		if($(window).width() >= 1200){
			$(window).scroll(function(){
				if($(window).scrollTop() > head_height*3){
					$('header').css('height', head_height).addClass('fixed');
				}else{ $('header').removeAttr('style').removeClass('fixed'); }
			});
		}
		//
		$(".gotoppage").click(function(e) { e.preventDefault();$("body,html").animate({ scrollTop: 0 }, "slow") });
		var data = [], group = null
		$('.get-anchor').find('h2,h3').each(function (i) {
			var head = $(this), level = head.prop('tagName').substring(1)
			if (i == 0 && level != 2) {
				console.log('h2 is missing.'); return;
			}
			if (level == 2) { if (group) { data.push(group) }
				group = { name: head.text(), head: head, items: [],
				}
			} else {
				group.items.push({ name: head.text(), head: head, })
			}
		})
		group && data.push(group)
		if (data.length > 0) {
			var wrapperAnchor = $('<div class="wrapper-anchor"><span class="anchor-title">Mục lục</span></div>'), list = $('<ol></ol>')
			wrapperAnchor.append(list)
			$('.get-anchor').prepend(wrapperAnchor)
			for (var item of data) {
				var list2 = $('<ol></ol>')
				for (var y in item.items) {
					var child = item.items[y], index2 = parseInt(y) + 1, li2 = $('<li></li>')
					li2.text(child.name).prop('head', child.head)
					list2.append(li2)
				}
				var li = $('<li></li>')
				li.text(item.name).prop('head', item.head).append(list2)
				list.append(li)
			}
		}
		$('.wrapper-anchor').click('li', function (e) {
			$("body,html").animate({ scrollTop: $(e.target).prop('head').offset().top - 90 }, "500");
		});          
		$('.search-header>span,.search-header .search-form button[type="button"]').click(function(){
			$('.search-header').toggleClass('active');
		});
		$('.open-menu').click(function(){
			$('.header-center,.header-center-ovelay,.right-header').toggleClass('active');
		});
		$('.header-center-ovelay,.mobile-hotline strong').click(function(){
			$('.header-center,.header-center-ovelay,.right-header').removeClass('active');
		});
		//
		function checkLarger(){
			var container_w = $('.header-content .container').width(), screen_w = $(window).width();
			var m_width = Math.abs(screen_w - container_w);
			if(m_width/2 > ($('.header-content .header-logo').width() + 30)) $('.header-content').addClass('larger-width');
			else $('.header-content').removeClass('larger-width');
		}checkLarger();
		$(window).resize(function(){
			checkLarger();
		});
		//
	}
};
$(document).ready(function(){ Website.run(); });
$(window).load(function(){
	$('.loaderpage').animate({ 'opacity': 0 }, 1000, function() { $(this).hide(); });
});
