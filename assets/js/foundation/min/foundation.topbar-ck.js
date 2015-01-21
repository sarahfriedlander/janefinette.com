!function(t,a,s,e){"use strict";Foundation.libs.topbar={name:"topbar",version:"5.2.3",settings:{index:0,sticky_class:"sticky",custom_back_text:!0,back_text:"Back",is_hover:!0,mobile_show_parent_link:!1,scrolltop:!0,sticky_on:"all"},init:function(a,s,e){Foundation.inherit(this,"add_custom_rule register_media throttle");var i=this;i.register_media("topbar","foundation-mq-topbar"),this.bindings(s,e),i.S("["+this.attr_name()+"]",this.scope).each(function(){var a=t(this),s=a.data(i.attr_name(!0)+"-init"),e=i.S("section",this);a.data("index",0);var n=a.parent();n.hasClass("fixed")||i.is_sticky(a,n,s)?(i.settings.sticky_class=s.sticky_class,i.settings.sticky_topbar=a,a.data("height",n.outerHeight()),a.data("stickyoffset",n.offset().top)):a.data("height",a.outerHeight()),s.assembled||i.assemble(a),s.is_hover?i.S(".has-dropdown",a).addClass("not-click"):i.S(".has-dropdown",a).removeClass("not-click"),i.add_custom_rule(".f-topbar-fixed { padding-top: "+a.data("height")+"px }"),n.hasClass("fixed")&&i.S("body").addClass("f-topbar-fixed")})},is_sticky:function(t,a,s){var e=a.hasClass(s.sticky_class);return e&&"all"===s.sticky_on?!0:e&&this.small()&&"small"===s.sticky_on?!0:e&&this.medium()&&"medium"===s.sticky_on?!0:e&&this.large()&&"large"===s.sticky_on?!0:!1},toggle:function(s){var e=this,i;i=s?e.S(s).closest("["+this.attr_name()+"]"):e.S("["+this.attr_name()+"]");var n=i.data(this.attr_name(!0)+"-init"),o=e.S("section, .section",i);e.breakpoint()&&(e.rtl?(o.css({right:"0%"}),t(">.name",o).css({right:"100%"})):(o.css({left:"0%"}),t(">.name",o).css({left:"100%"})),e.S("li.moved",o).removeClass("moved"),i.data("index",0),i.toggleClass("expanded").css("height","")),n.scrolltop?i.hasClass("expanded")?i.parent().hasClass("fixed")&&(n.scrolltop?(i.parent().removeClass("fixed"),i.addClass("fixed"),e.S("body").removeClass("f-topbar-fixed"),a.scrollTo(0,0)):i.parent().removeClass("expanded")):i.hasClass("fixed")&&(i.parent().addClass("fixed"),i.removeClass("fixed"),e.S("body").addClass("f-topbar-fixed")):(e.is_sticky(i,i.parent(),n)&&i.parent().addClass("fixed"),i.parent().hasClass("fixed")&&(i.hasClass("expanded")?(i.addClass("fixed"),i.parent().addClass("expanded"),e.S("body").addClass("f-topbar-fixed")):(i.removeClass("fixed"),i.parent().removeClass("expanded"),e.update_sticky_positioning())))},timer:null,events:function(s){var e=this,i=this.S;i(this.scope).off(".topbar").on("click.fndtn.topbar","["+this.attr_name()+"] .toggle-topbar",function(t){t.preventDefault(),e.toggle(this)}).on("click.fndtn.topbar",'.top-bar .top-bar-section li a[href^="#"],['+this.attr_name()+'] .top-bar-section li a[href^="#"]',function(a){var s=t(this).closest("li");!e.breakpoint()||s.hasClass("back")||s.hasClass("has-dropdown")||e.toggle()}).on("click.fndtn.topbar","["+this.attr_name()+"] li.has-dropdown",function(a){var s=i(this),n=i(a.target),o=s.closest("["+e.attr_name()+"]"),r=o.data(e.attr_name(!0)+"-init");return n.data("revealId")?void e.toggle():void(e.breakpoint()||(!r.is_hover||Modernizr.touch)&&(a.stopImmediatePropagation(),s.hasClass("hover")?(s.removeClass("hover").find("li").removeClass("hover"),s.parents("li.hover").removeClass("hover")):(s.addClass("hover"),t(s).siblings().removeClass("hover"),"A"===n[0].nodeName&&n.parent().hasClass("has-dropdown")&&a.preventDefault())))}).on("click.fndtn.topbar","["+this.attr_name()+"] .has-dropdown>a",function(t){if(e.breakpoint()){t.preventDefault();var a=i(this),s=a.closest("["+e.attr_name()+"]"),n=s.find("section, .section"),o=a.next(".dropdown").outerHeight(),r=a.closest("li");s.data("index",s.data("index")+1),r.addClass("moved"),e.rtl?(n.css({right:-(100*s.data("index"))+"%"}),n.find(">.name").css({right:100*s.data("index")+"%"})):(n.css({left:-(100*s.data("index"))+"%"}),n.find(">.name").css({left:100*s.data("index")+"%"})),s.css("height",a.siblings("ul").outerHeight(!0)+s.data("height"))}}),i(a).off(".topbar").on("resize.fndtn.topbar",e.throttle(function(){e.resize.call(e)},50)).trigger("resize"),i("body").off(".topbar").on("click.fndtn.topbar touchstart.fndtn.topbar",function(t){var a=i(t.target).closest("li").closest("li.hover");a.length>0||i("["+e.attr_name()+"] li.hover").removeClass("hover")}),i(this.scope).on("click.fndtn.topbar","["+this.attr_name()+"] .has-dropdown .back",function(t){t.preventDefault();var a=i(this),s=a.closest("["+e.attr_name()+"]"),n=s.find("section, .section"),o=s.data(e.attr_name(!0)+"-init"),r=a.closest("li.moved"),d=r.parent();s.data("index",s.data("index")-1),e.rtl?(n.css({right:-(100*s.data("index"))+"%"}),n.find(">.name").css({right:100*s.data("index")+"%"})):(n.css({left:-(100*s.data("index"))+"%"}),n.find(">.name").css({left:100*s.data("index")+"%"})),0===s.data("index")?s.css("height",""):s.css("height",d.outerHeight(!0)+s.data("height")),setTimeout(function(){r.removeClass("moved")},300)})},resize:function(){var t=this;t.S("["+this.attr_name()+"]").each(function(){var a=t.S(this),e=a.data(t.attr_name(!0)+"-init"),i=a.parent("."+t.settings.sticky_class),n;if(!t.breakpoint()){var o=a.hasClass("expanded");a.css("height","").removeClass("expanded").find("li").removeClass("hover"),o&&t.toggle(a)}t.is_sticky(a,i,e)&&(i.hasClass("fixed")?(i.removeClass("fixed"),n=i.offset().top,t.S(s.body).hasClass("f-topbar-fixed")&&(n-=a.data("height")),a.data("stickyoffset",n),i.addClass("fixed")):(n=i.offset().top,a.data("stickyoffset",n)))})},breakpoint:function(){return!matchMedia(Foundation.media_queries.topbar).matches},small:function(){return matchMedia(Foundation.media_queries.small).matches},medium:function(){return matchMedia(Foundation.media_queries.medium).matches},large:function(){return matchMedia(Foundation.media_queries.large).matches},assemble:function(a){var s=this,e=a.data(this.attr_name(!0)+"-init"),i=s.S("section",a);i.detach(),s.S(".has-dropdown>a",i).each(function(){var a=s.S(this),i=a.siblings(".dropdown"),n=a.attr("href"),o;i.find(".title.back").length||(o=t(e.mobile_show_parent_link&&n&&n.length>1?'<li class="title back js-generated"><h5><a href="javascript:void(0)"></a></h5></li><li><a class="parent-link js-generated" href="'+n+'">'+a.text()+"</a></li>":'<li class="title back js-generated"><h5><a href="javascript:void(0)"></a></h5></li>'),t("h5>a",o).html(1==e.custom_back_text?e.back_text:"&laquo; "+a.html()),i.prepend(o))}),i.appendTo(a),this.sticky(),this.assembled(a)},assembled:function(a){a.data(this.attr_name(!0),t.extend({},a.data(this.attr_name(!0)),{assembled:!0}))},height:function(a){var s=0,e=this;return t("> li",a).each(function(){s+=e.S(this).outerHeight(!0)}),s},sticky:function(){var t=this;this.S(a).on("scroll",function(){t.update_sticky_positioning()})},update_sticky_positioning:function(){var t="."+this.settings.sticky_class,s=this.S(a),e=this;if(e.settings.sticky_topbar&&e.is_sticky(this.settings.sticky_topbar,this.settings.sticky_topbar.parent(),this.settings)){var i=this.settings.sticky_topbar.data("stickyoffset");e.S(t).hasClass("expanded")||(s.scrollTop()>i?e.S(t).hasClass("fixed")||(e.S(t).addClass("fixed"),e.S("body").addClass("f-topbar-fixed")):s.scrollTop()<=i&&e.S(t).hasClass("fixed")&&(e.S(t).removeClass("fixed"),e.S("body").removeClass("f-topbar-fixed")))}},off:function(){this.S(this.scope).off(".fndtn.topbar"),this.S(a).off(".fndtn.topbar")},reflow:function(){}}}(jQuery,this,this.document);