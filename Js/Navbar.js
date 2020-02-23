var $ = require("jquery");
import {Navbar, Sidebar} from '../js/Navbarclasses.js';
export function Startnav(){
var Navbarobj = new Navbar('#navbar');
var ToProjectBtn = $('#toProject');
Navbarobj.sidebar.setsidebar(Navbarobj.navbarSelector);

Navbarobj.nav_link.on('click',(e)=>{
e.preventDefault();
Navbarobj.selectDiv(e.target);
});

$(window).on('scroll',()=>{
Navbarobj.activeNavbar();
});

$(Navbarobj.sidebar.menubtn).on('click',()=>{
Navbarobj.sidebar.ToggleSlidebar();
Navbarobj.sidebar.toggleline();
});

$(window).on('resize',()=>{
let width = $(window).width();
if(width > 768){
Navbarobj.sidebar.removetransition();
Navbarobj.sidebar.closeSidebar();
Navbarobj.sidebar.removeanimonline();
}
});

ToProjectBtn.on('click', (e)=>{
e.preventDefault();
Navbarobj.selectDiv(e.target);
});

$(Navbarobj.sidebar.removesidebar).on('click',()=>{
Navbarobj.sidebar.closeSidebar();
Navbarobj.sidebar.removeanimonline();



});


//On start
Navbarobj.activeNavbar();
}
