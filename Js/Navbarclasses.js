var $ = require("jquery");
export function Navbar(navbarSelector){
this.navbarSelector = navbarSelector;
this.nav_link = $(this.navbarSelector + ' .nav-link');
this.sidebar = new Sidebar();
this.selectDiv = (target)=>{
let div = $(target).attr('href');
let positionTop = $(div).offset().top;
let body = $('html, body');
if(!(body.is(':animated'))){
body.animate({
scrollTop: positionTop
},300)
}
}
this.activeNavbar = ()=>{
let scrolltop = $(window).scrollTop();
if(scrolltop > 150){
$(this.navbarSelector).addClass('active');
}
else{
$(this.navbarSelector).removeClass('active');
}
}
}

export function Sidebar(){
var sidebarselector = '';
this.menubtn = '';
var menubtnline = this.menubtn + ' .line';
this.removesidebar = '';

this.ToggleSlidebar = ()=>{
$(sidebarselector).css('transition', '0.7s');
$(sidebarselector).toggleClass('active');
$(this.removesidebar).css('transition', '0.7s');
$(this.removesidebar).toggleClass('active');


}
this.setsidebar = (selector)=>{
sidebarselector = selector + ' .sidebar';
this.menubtn = selector + ' .hamburgermenu';
this.removesidebar = selector + ' .removesidebar';
}

this.removetransition = ()=>{
$(sidebarselector).css('transition', '');
$(this.removesidebar).css('transition', '');

}
this.closeSidebar = ()=>{
$(sidebarselector).removeClass('active');
$(this.removesidebar).removeClass('active');


}

this.toggleline = ()=>{
$(menubtnline).each((index)=>{
if(index < 2){
$(menubtnline).eq(index).toggleClass('anim');
}
else{
$(menubtnline).eq(index).toggleClass('hide');
}
});
}
this.removeanimonline = ()=>{
$(menubtnline).each((index)=>{
if(index < 2){
$(menubtnline).eq(index).removeClass('anim');
}
else{
$(menubtnline).eq(index).removeClass('hide');
}
});
}
}
