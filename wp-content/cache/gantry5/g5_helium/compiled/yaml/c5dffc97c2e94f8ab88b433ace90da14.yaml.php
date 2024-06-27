<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/blogs/page/head.yaml',
    'modified' => 1703867257,
    'data' => [
        'atoms' => [
            0 => [
                'id' => 'assets-2846',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.entry-title{
display: none;
}
.g-owlcarousel-item-img{
 height: 600px;
}
#property-title{
    text-align: left;
    line-height: 5px;
    margin-left: -595px !important;
    margin-top: 154px !important;
}
#property-title h1 {
    font-size: 100px;
    line-height: 90px;
}
#property-title p {
    font-size: 25px;
}
span{
 color: #efa601 ;
}

#property-latest{
margin-bottom: -27px;
}
.uk-button-default{
    color: #fff !important;
    background-color: #efa601 !important;
    width: 100%;
  
}
.uk-scope .uk-tab .uk-active a{
    color: #fff !important;
    border-right: 1px solid #000;
    border-left: 1px solid #000;
    border-top: 6px solid #000;
    border-bottom: 2px solid #fff;
    padding-left: 50px;
    padding-right: 50px;
    background-color: #efa601;
}
a{
    color: #000 !important;
}
a:focus{
    border-bottom: 1px solid #fff;
}
.uk-flex-center{
    font-weight: 500;
}
.is-form-style input.is-search-input {
    background: #ffc15080;
    background-image: none!important;
    color: #000;
    padding: 0 12px;
    margin: 0;
    outline: 0!important;
    font-size: 14px!important;
    height: 36px;
    min-height: 0;
    line-height: 1;
    border-radius: 0;
    border: 1px solid #fff!important;
    font-family: arial;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-appearance: none;
    -webkit-border-radius: 0;
}
input[type="color"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], input:not([type]), textarea {
    background-color: white;
    vertical-align: middle;
    border: 1px solid #e0e0e5;
    font-size: 1rem;
    width: 100%;
    line-height: 2;
    padding: 0.375rem 1.25rem;
    transition: border-color 0.2s;
}
.is-form-style input.is-search-submit, .is-search-icon {
    display: inline-block!important;
    color: #000;
    background: #ffe0a7;
    box-shadow: none!important;
    outline: 0;
    margin: 0;
    font-size: 14px!important;
    border: 1px solid #fff;
    border-radius: 0;
    line-height: 1;
    height: 36px;
    text-transform: capitalize;
    vertical-align: middle;
    -webkit-transition: background-color .1s ease-in-out;
    -moz-transition: background-color .1s ease-in-out;
    -o-transition: background-color .1s ease-in-out;
    transition: background-color .1s ease-in-out;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'css'
                        ],
                        1 => [
                            'location' => '',
                            'inline' => '/*RESPONSIVE*/
@media only all and (min-width: 320px) and (max-width: 430px){
.g-offcanvas-toggle {
    display: block;
    margin-top: 3px;
    margin-left: -10px;
    position: absolute;
    width: 100%;
}
.g-offcanvas-toggle{
    margin-top: 20px;
    margin-left: 15px;
}
#logo-3134-particle, #logo-9608-particle, #logo-3313-particle, #logo-2134-particle, #logo-8599-particle, #logo-6131-particle, #logo-9604-particle, #logo-8427-particle {
    margin-top: -4px;
    margin-left: 53px;
    width: 132px;
    height: 125px;
}
#sticky-menu {
    display: none;
}
.social-media{
	display: none;
}
#mysticky-nav{
	display: none;	
}

/*BLOGS*/
#owlcarousel-8948-particle{
    height: 170px !important;
}
#property-title {
    text-align: left !important;
    line-height: 5px !important;
    margin-left: -549px !important;
    margin-top: -240px !important;
}
#property-title h1 {
    font-size: 30px !important;
    line-height: 31px !important;
}
#property-latest {
    margin-bottom: -27px !important;
    margin-top: -83px !important;
}
#houses{
    margin-top: -80px;
}
#posthouse{
    margin-top: -56px;
}	
#blogspost{
    margin-top: -3px !important;
}
}
',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'small'
                        ],
                        2 => [
                            'location' => '',
                            'inline' => '/*RESPONSIVE TABLET*/
@media only all and (min-width: 768px){
.g-offcanvas-toggle {
    display: block;
    margin-top: 3px;
    margin-left: -10px;
    position: absolute;
    width: 100%;
}
.g-offcanvas-toggle{
    margin-top: 20px;
    margin-left: 15px;
}
#logo-3134-particle, #logo-9608-particle, #logo-3313-particle, #logo-2134-particle, #logo-8599-particle, #logo-6131-particle, #logo-9604-particle, #logo-8427-particle{
    margin-top: -4px;
    margin-left: 26px !important;
    width: 132px;
    height: 125px;
}
#menu-4076-particle{
    margin-left: -6px;
    margin-top: 16px;
}
#sticky-menu {
    display: none !important;
}

#mysticky-nav{
	display: none  !important;	
}
.social-media {
    display: none;
}
#home-title {
    margin-left: -75px;
    text-align: left;
    margin-top: 87px;
    line-height: 30px;
}
#home-title h5 {
   display: none;
}
#property-title {
    text-align: left;
    line-height: 5px;
    margin-left: -222px;
    margin-top: -308px;
}

}
@media only all and (max-width: 834px){
.g-offcanvas-toggle {
    display: block;
    margin-top: 3px;
    margin-left: -10px;
    position: absolute;
    width: 100%;
}
.g-offcanvas-toggle{
    margin-top: 20px;
    margin-left: 15px;
}
#logo-3134-particle, #logo-9608-particle, #logo-3313-particle, #logo-2134-particle, #logo-8599-particle, #logo-6131-particle, #logo-9604-particle, #logo-8427-particle {
    margin-top: -4px;
	margin-left: 47px !important;
    width: 132px;
    height: 125px;
}
#menu-4076-particle, #menu-7641-particle, #menu-6569-particle, #menu-4816-particle, #menu-6319-particle, #menu-2721-particle, #menu-3695-particle {
    margin-left: -6px;
    margin-top: 16px;
}
#sticky-menu {
    display: none !important;
}

#mysticky-nav{
	display: none  !important;	
}
.social-media {
    display: none;
}
#home-title {
    margin-left: -75px;
    text-align: left;
    margin-top: 87px;
    line-height: 30px;
}
#home-title h5 {
   display: none;
}
#property-title {
    text-align: left;
    line-height: 5px;
margin-left: -222px ;
    margin-top: -308px ;
}

#blogspost{
    margin-top: -288px;
}
}
',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'tablet'
                        ]
                    ],
                    'javascript' => [
                        
                    ]
                ]
            ]
        ]
    ]
];
