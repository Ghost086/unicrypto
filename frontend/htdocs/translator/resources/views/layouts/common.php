<style>
body,h1,h2,h3,h4,h5,h6,p,li,label,a{
	font-family: 'Open Sans', sans-serif;
}

/*Login page start*/

.logo-star {
    width: 20px;
    position: relative;
    top: -2px;
}
.main-logo {
    width: 165px;
}
p.logo-img {
    text-align: center;
    /* padding-left: 100px; */
}
p.login_p {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
}
.login-page {
    padding-top: 170px;
}
.login-btn {
    background-color: #f4ba2f !important;
    border-color: #f4ba2f !important;
    font-weight: 600 !important;
}

/*Login page End*/

/*nav bar start*/
.full-with {
    width: 100%;
}
.nav-active, .nav-link:hover {
    color: #f4ba2f !important;
}
div#navbarSupportedContent {
    display: block !important;
    float: right !important;
}
div#navbarSupportedContent .dropdown-menu.dropdown-menu-right {
    position: absolute !important;
}
@media (min-width: 768px){
div#navbarSupportedContent {
    padding-right: 150px !important;
}
.nav-menu-hide {
    display: none;
}
}
@media (max-width: 767px){
.nav-menu-hide {
    display: block;
}
div#navbarSupportedContent1{
	display: none;
}
}
.nav-min-width {    
	width: 15%;
    position: absolute !important;
    height: 100%;
}
.nav-min-width ul.navbar-nav {
    display: block;
    height: 100%;
}
.navbar-laravel {
    background-color: #2f3340;
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(255, 255, 255) !important;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: rgb(255, 248, 248) !important;
}
.bg-light.nav-min-width {
    background-color: #2f3340!important;
}
.nav-min-width a.nav-link {
    color: white;
    cursor: pointer !important;
}
/*nav bar end*/

/*Page Common Start*/
@media (min-width: 768px){
.page-content-padding {
    padding-left: 80px !important;
    padding-right: 50px !important;
}
}
main .page-row {
    display: block;
    margin-right: 0px;
    margin-left: 200px;
}

.page-add-btn-modal {
    float: right;
    margin-top: 50px;
    background-color: #f4ba2f !important;
    border-color: #f4ba2f !important;
}
.page-add-btn-modal:hover {
    background-color: #f4ba2f !important;
    border-color: #f4ba2f !important;
}
h2.page-title {
    padding-top: 20px;
}
.page .card {
    margin-top: 50px;
}

/*Page Common End*/

.alert-success {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
    width: 35%;
    float: right;
    margin-right: 20px;
    margin-top: 10px;
}
.alert-error {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
    width: 25%;
    float: right;
    margin-right: 20px;
    margin-top: 10px;
}

.dropdown-item {
    cursor: pointer;
}

/* font awesome icon   */
.fa {
    cursor: pointer;
}

.card-shadow {
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}


div#example_length {
    display: none;
}


</style>