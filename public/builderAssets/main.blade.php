@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body {
    font-family: 'Poppins', sans-serif;
}

.bg--light-gray {
background-color: #e6e6e6;
}

.paper {
/* min-height: 84.2rem; */
margin: auto;
max-width: 2480px;
transform: scale(.6);
max-height: 3508px;
background-color: #fff;
}

.cv.paper {
/* width: 100%;
height: 100%; */
}

.cv {
display: table;
}
.pd-3{
padding:12px!important;
}
.cv__sidebar {
padding: 4em 1em;
background-color: #79a739;
width: 30%;
display: table-cell;
color: #fff;
}

.cv__main {
padding: 4em 1em;
width: 65%;
display: table-cell;
}

.cv__main h1 {
color: #79a739;
font-size: 1.3rem;
}

.cv__main h2 {
position: relative;
font-size: 1.1rem;
margin-bottom: 0;
}

.cv__main h2 small {
color: #888d95;
font-size: 1rem;
position: absolute;
right: 0;
top: 0.9rem;
}

.cv__main h2+h3 {
color: #888d95;
font-size: 0.9rem;
}

.cv__main p,
.cv__main ul,
.cv__main dd {
color: #26282b;
font-size: 0.8rem;
margin-bottom: 0;
padding-left: 10px;
text-align: justify;
}

.cv__main .tags {
margin-left: 10px;
}

.cv__main .tags span {
border-radius: 3px;
font-size: 0.7rem;
}

.cv__title {
font-size: 1.4rem !important;
}

.sidebar__title {
text-transform: uppercase;
font-weight: 600;
font-size: 1rem !important;
}

.sidebar__name {
text-align: center;
font-weight: 600;
}

.sidebar__job {
color: #e6e6e6;
text-align: center;
font-weight: 600;
}

.sidebar__img {
width: 50%;
display: block;
border-radius: 50%;
margin-right: auto;
margin-left: auto;
}

.sidebar__info dd {
font-size: 0.7rem;clear: both;
}

.sidebar__info dd i {
margin-right: 20px;
}
.flex{
display: flex!important;
}
.jcb{
justify-content: space-between!important;
}
.aic{
align-items: center!important;
}

.sidebar__info dd a {
color: #fff;
}

.sidebar__info dd a:hover {
text-decoration: underline;
}

.main__title {
margin-top: 1rem;
text-transform: uppercase;
font-weight: 600;
}

.cv__main .cv__info {
background-color: rgba(0, 0, 0, 0.05);
margin-top: 5px;
font-size: 12px;
}

.cv__info {
padding: 5px;
border-radius: 5px;
}

.cv__info:hover {
background-color: rgba(0, 0, 0, 0.1);
}

.tabs li a {
font-size: 1.1rem;
}

label {
font-weight: 600;
}

.tags .label {
margin-right: 5px; margin-block: 3px;
}

.text-danger {
color: #cc4b37;
}

.btn-block {
display: inline-block;
opacity: 0;
}


.cv__sidebar .btn-block {
float: right;
}

#cv__skills .btn-block {
float: none;
}

.icon {
margin: 0 !important;
margin-right: 5px !important;
padding: 0 !important;
}

.icon:first-child {
color: #37cc56;
}

.icon:nth-child(2) {
color: #cc4b37;
}

.icon i {
line-height: 1;
border-radius: 10%;
display: inline-block;
vertical-align: middle;
margin: 0 !important;
font-size: 1rem;
}

.icon i {
transition: all .3s;cursor: pointer;
}
.icon i:hover {
font-size: 1.1rem;
color: rgb(203 226 170);
}
.button.expanded {
display: flex!important;
justify-content: center!important;
}
input,select,button.button,a.button{
border-radius: 16px!important;
color: white;
}
.h-100{
height: 100%;
}
progress {
border: none;
background: crimson;
border-radius: 12px;
height: 6px;
}


progress::-moz-progress-bar {
background: lightcolor;
border-radius: 16px;
}

progress::-webkit-progress-value {
border-radius: 16px;
background: rgb(162, 205, 72);
}

progress::-webkit-progress-bar {
border-radius: 16px;
background: rgb(203, 226, 170);
}
.label {
display: inline-block;
padding: 0.33333rem 0.5rem;
border-radius: 0;
font-size: .8rem;
line-height: 1;
white-space: nowrap;
cursor: default;
background: #79a739;
color: #fefefe;
}


.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media
(min-width:576px){.container,.container-sm{max-width:540px}}@media
(min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media
(min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media
(min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media
(min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}
.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}


.article {
display: flex;
align-items: flex-start;
min-height: 100vh;
}

.article__image {
position: sticky;
top: -18%;

width: 100%;
height: 100%;
}
.btn-block{
position: absolute;
top: 50%;
right: 4px;
transform: translateY(-50%);
z-index:2; width: auto;
}
.cv__info{
position: relative;
}
.cv__info:hover .btn-block{
background:#eee;
padding:4px;
border-radius:6px;
}



.bg-purp {
background: #79a739 !important;
}

.navbar {
margin-bottom: 0px !important;
}

.navbar-brand {
width: unset !important;
}

nav .collapse.navbar-collapse {
height: 100% !important;
}

.navbar-nav>li>a {
margin-top: 0px !important;
margin-left: 0px !important;
}

.site-nav__link {
padding: 5px 12px !important;
}

nav .btn:hover {
background-color: #eee !important;
color: #212121
}

.collapse.navbar-collapse a.nav-link {
font-size: 13px !important;
}

.collapse.navbar-collapse a.nav-link:hover {
color: #ccc;
}

.collapse.navbar-collapse::before,
.collapse.navbar-collapse::after {
display: none !important;
}
.btn-success-light {
    background-color: #cbe2aa!important;
    color: #494949!important;
}
.btn{
    transition: .3s all ease;
}
.navbar-toggler-icon {
display: inline-block;
width: 1.5em;
height: 1.5em;
vertical-align: middle;
background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba%280, 240,250, 1' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22' /></svg>");
background-repeat: no-repeat;
background-position: center;
filter: brightness(58) saturate(0);
background-size: 100%;
}

.navbar.navbar-expand-lg.bg-purp>.container-fluid {
display: flex !important;
justify-content: space-between;
}

.navbar.navbar-expand-lg.bg-purp>.container-fluid::before,
.navbar.navbar-expand-lg.bg-purp>.container-fluid::after {
display: none !important;
}

nav.navbar button:focus {
outline: 0;
background-color: transparent !important;
}

nav.navbar button.navbar-toggler {
margin-right: 30px;
}

nav.navbar.navbar-expand-lg.bg-purp {
border-radius: 0px !important;
}

a {
color: #79a739;
text-decoration: none;
}

@media (min-width: 768px) {
.navbar-collapse.collapse {
display: flex !important;
justify-content: space-between;
}
}

@media (max-width: 768px) {
nav.navbar.navbar-expand-lg.bg-purp .navbar-collapse.collapse.show {
padding-bottom: 1em !important;
}

.navbar-nav.me-auto.mb-2.mb-lg-0 {
margin-inline: 16px !important;
}
}
.px-0{
    padding-inline: 0px;
    }
.resume-summary{
    height: 10em;
    background: #e6e6e6;
    margin-bottom: 16px;
    border-radius: 4px;    padding: 6px;
    padding-top: 4px;  padding-right: 0;
}
.summary-main{ overflow-y: auto;
    height: 84%;padding: 10px;
}
.summary-item{    padding-right: 26px;   background: #fff; 
    border-radius: 4px; padding: 8px;  margin-block: 9px!important;    margin-top: 0!important;
    margin-inline: 0;
}
.summary-item :is(p,a){
    font-size: 10px;
}

.ps-5-force {
    padding-left: 34px !important;
} 
ul.show_validation_errors:not(.browser-default)>li {
    list-style-type: unset !important;
}

ul.show_validation_errors:not(.browser-default) {
    list-style-type: unset !important;
}