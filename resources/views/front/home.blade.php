@extends('layouts.front.master')


@section('content')
    <section id="modal">
        <div class="container">
            <!-- Modal One -->
            <div class="modal fade" id="sign-in-page" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content sign-up">
                        <div class="modal-header">
                            <div class="logo">
                                <img src="{{ asset('frontend/img/logo.png') }}" alt="">
                            </div>
                            <button data-dismiss="modal" class="close">×</button>
                        </div>
                        <div class="modal-body">
                            <p>Sign Up for <span class="italic">free</span> today!</p>
                            <div class="btn-ymp">
                                <ul>
                                    <li><a href="#">Sign Up with Facebook</a></li>
                                    <li><a href="#">Sign Up with Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="or">OR</div>
                            <form>
                                <input class="form-control" type="email" placeholder="Email Address">
                                <input class="form-control" type="text" placeholder="Username">
                                <input class="form-control" type="password" placeholder="Password">
                                <input class="form-control" type="password" placeholder="Confirm Password">
                                <div class="radio-btn">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="radio" name="selector"> Hire</label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="selector"> Work</label>
                                        </li>
                                    </ul>
                                </div>
                                <input class="form-control" type="submit" value="Create Account">
                            </form>
                            <div class="form-content">
                                <p>By registering you confirm that you accept the <span><a href="#">Terms and Conditions</a></span> and <span><a href="#">Privacy Policy</a></span>.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p>Already a YesMarketPlace.com member? <span><a href="#" id="log-in" data-toggle="modal" data-target="#sign-up-page">Log In</a></span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal Two -->
            <div class="modal fade" id="sign-up-page" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content sign-in">
                        <div class="modal-header">
                            <div class="logo">
                                <img src="{{ asset('frontend/img/logo.png') }}" alt="">
                            </div>
                            <button data-dismiss="modal" class="close">×</button>
                        </div>
                        <div class="modal-body">
                            <p>Sign In for <span class="italic">free</span> today!</p>
                            <div class="btn-ymp">
                                <ul>
                                    <li><a href="#">Sign In with Facebook</a></li>
                                    <li><a href="#">Sign In with Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="or"><span>OR</span></div>
                            <form>
                                <input class="form-control" type="email" placeholder="Email Address">
                                <input class="form-control" type="password" placeholder="Password">
                            </form>
                            <div class="form-content">
                                <p>By registering you confirm that you accept the <span><a href="#">Terms and Conditions</a></span> and <span><a href="#">Privacy Policy</a></span>.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p>Already a YesMarketPlace.com member? <span><a href="#" id="log-out">Log In</a></span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Top 5 Freelancer Modal Start -->
            <section class="modals">
                <div class="container">
                    <div class="modal fade" id="search-freelancer" role="dialog" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content top-freelancer">
                                <div class="modal-body">
                                    <div class="modal-header">
                                        <p>Top 5 Freelancers</p>
                                        <a href="#">View</a>
                                    </div>
                                    <div class="form-content">
                                        <ul>
                                            <li>
                                                <div class="freelancer-tm">
                                                    <img src="{{ asset('frontend/img/search-1.jpg') }}" alt="">
                                                    <div class="freelancers-info">
                                                        <div class="freelancers-name">
                                                            <p>Design Rockers</p>
                                                            <span><i class="icofont icofont-ui-press"></i></span>
                                                        </div>
                                                        <ul class="skill">
                                                            <li>Graphic Design,</li>
                                                            <li>Photoshop,</li>
                                                            <li>Illustrator,</li>
                                                            <li>Illustration...</li>
                                                        </ul>
                                                        <ul class="review">
                                                            <li>5.0</li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li>255 Reviews</li>
                                                            <li>99% Jobs Completed</li>
                                                        </ul>
                                                        <a href="#" class="button-ymp">Hire Me</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="freelancer-tm">
                                                    <img src="{{ asset('frontend/img/search-2.jpg') }}" alt="">
                                                    <div class="freelancers-info">
                                                        <div class="freelancers-name">
                                                            <p>Mahmudul Hasan Maruf</p>
                                                            <span><i class="icofont icofont-ui-press"></i></span>
                                                        </div>
                                                        <ul class="skill">
                                                            <li>Graphic Deisgn,</li>
                                                            <li>Logo Design,</li>
                                                            <li>Illustrator,</li>
                                                            <li>Broch...</li>
                                                        </ul>
                                                        <ul class="review">
                                                            <li>5.0</li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li>255 Reviews</li>
                                                            <li>100% Jobs Completed</li>
                                                        </ul>
                                                        <a href="#" class="button-ymp">Hire Me</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="freelancer-tm">
                                                    <img src="{{ asset('frontend/img/search-3.jpg') }}" alt="">
                                                    <div class="freelancers-info">
                                                        <div class="freelancers-name">
                                                            <p>Sahinur Salafee</p>
                                                            <span><i class="icofont icofont-ui-press"></i></span>
                                                        </div>
                                                        <ul class="skill">
                                                            <li>Graphic Deisgn,</li>
                                                            <li>Icon,</li>
                                                            <li>Logo Design,</li>
                                                            <li>Brochure Design.....</li>
                                                        </ul>
                                                        <ul class="review">
                                                            <li>5.0</li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li>255 Reviews</li>
                                                            <li>98% Jobs Completed</li>
                                                        </ul>
                                                        <a href="#" class="button-ymp">Hire Me</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="freelancer-tm">
                                                    <img src="{{ asset('frontend/img/search-4.jpg') }}" alt="">
                                                    <div class="freelancers-info">
                                                        <div class="freelancers-name">
                                                            <p>The Designers Group</p>
                                                            <span><i class="icofont icofont-ui-press"></i></span>
                                                        </div>
                                                        <ul class="skill">
                                                            <li>Graphic Deisgn,</li>
                                                            <li>Icon,</li>
                                                            <li>Logo Design,</li>
                                                            <li>Adobe Photoshop... </li>
                                                        </ul>
                                                        <ul class="review">
                                                            <li>5.0</li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li>255 Reviews</li>
                                                            <li>99% Jobs Completed</li>
                                                        </ul>
                                                        <a href="#" class="button-ymp">Hire Me</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="freelancer-tm">
                                                    <img src="{{ asset('frontend/img/search-5.jpg') }}" alt="">
                                                    <div class="freelancers-info">
                                                        <div class="freelancers-name">
                                                            <p>Design Stockers</p>
                                                            <span><i class="icofont icofont-ui-press"></i></span>
                                                        </div>
                                                        <ul class="skill">
                                                            <li>Graphic Deisgn,</li>
                                                            <li>Icon,</li>
                                                            <li>Logo Design,</li>
                                                            <li>Adobe Photoshop.....</li>
                                                        </ul>
                                                        <ul class="review">
                                                            <li>5.0</li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li><i class="icofont icofont-star"></i></li>
                                                            <li>255 Reviews</li>
                                                            <li>100% Jobs Completed</li>
                                                        </ul>
                                                        <a href="#" class="button-ymp">Hire Me</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="project-preview">
                                            <ul>
                                                <li>
                                                    <h6 class="title">Projects</h6>
                                                    <p class="view"><a href="#">View</a></p>
                                                </li>
                                                <li>
                                                    <p class="project-title">Design Project</p>
                                                    <ul class="cat">
                                                        <li>Graphic Design,</li>
                                                        <li>Icon,</li>
                                                        <li>Logo Design</li>
                                                        <li>$20-$60 USD</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p class="project-title">Hire a Graphic</p>
                                                    <ul class="cat">
                                                        <li>Graphic Design,</li>
                                                        <li>Icon,</li>
                                                        <li>Logo Design,</li>
                                                        <li>Photoshop</li>
                                                        <li><span>$2-$10 USD</span></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p class="project-title">Design a Logo</p>
                                                    <ul class="cat">
                                                        <li>Graphic Design,</li>
                                                        <li>Icon,</li>
                                                        <li>Logo Design,</li>
                                                        <li>Photoshop</li>
                                                        <li><span>$20-$40 USD</span></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p class="project-title">Design a Professional e Commerce Website</p>
                                                    <ul class="cat">
                                                        <li>Graphic Design,</li>
                                                        <li>Web Design,</li>
                                                        <li>UI Design</li>
                                                        <li>Photoshop</li>
                                                        <li><span>$700 USD</span></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p class="project-title">Tatto Ink</p>
                                                    <ul class="cat">
                                                        <li>Graphic Design,</li>
                                                        <li>Logo Design</li>
                                                        <li><span>$250-$400 USD</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="tm-search">
                                        <a href="#"><span><i class="icofont icofont-search"></i></span>
                                            <p>Search all results for “web design”</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Slider Start -->
    <section class="example">
        <article class="content">
            <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_26_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                    <ul>	<!-- SLIDE  -->
                        <li data-index="rs-73" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/img/slider/transparent.html') }}" data-bgcolor='linear-gradient(90deg, rgba(134,143,150,1) 0%, rgba(89,97,100,1) 100%)' style='background:linear-gradient(90deg, rgba(134,143,150,1) 0%, rgba(89,97,100,1) 100%)' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                 id="slide-73-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['170','120','70','40']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','110']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[30,30,30,30]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[30,30,30,30]"

                                 style="z-index: 5; white-space: normal; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Buy Now </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                 id="slide-73-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['500','500','390','220']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="image"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":400,"speed":750,"sfxcolor":"#2f3b4a","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 6;"><img src="{{ asset('frontend/img/slider/macbook.jpg') }}" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['563px','563px','450','281']" width="1200" height="675" data-no-retina> </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-73-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":300,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">WEBSITE </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-73-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                                 data-fontsize="['70','70','70','50']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="['650','650','620','380']"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[20,20,20,20]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[30,30,30,30]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Complete UI/UX Toolkit for Freelance Marketplace</div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-74" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/img/slider/transparent.html') }}" data-bgcolor='linear-gradient(120deg, rgba(203,186,204,1) 0%, rgba(36,57,73,1) 100%)' style='background:linear-gradient(120deg, rgba(203,186,204,1) 0%, rgba(36,57,73,1) 100%)' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                 id="slide-74-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['-500','-500','-390','-220']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="image"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":200,"speed":750,"sfxcolor":"#243949","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5;"><img src="{{ asset('frontend/img/slider/blume.jpg') }}" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['563px','563px','450px','281px']" width="1200" height="675" data-no-retina> </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                 id="slide-74-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['880','760','600','330']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','110']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":500,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[30,30,30,30]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[30,30,30,30]"

                                 style="z-index: 6; white-space: normal; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Join Now </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-74-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['820','700','540','270']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":400,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">JOBPOST </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-74-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['360','240','110','80']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                                 data-fontsize="['70','70','70','50']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="['650','650','620','380']"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":300,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['right','right','right','right']"
                                 data-paddingtop="[20,20,20,20]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[30,30,30,30]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Posting a job was never so easy. </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-75" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/img/slider/transparent.html') }}" data-bgcolor='linear-gradient(180deg, rgba(22,160,133,1) 0%, rgba(244,208,63,1) 100%)' style='background:linear-gradient(180deg, rgba(22,160,133,1) 0%, rgba(244,208,63,1) 100%)' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                 id="slide-75-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['255','255','265','185']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="image"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":500,"speed":750,"sfxcolor":"#ef8609","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5;"><img src="{{ asset('frontend/img/slider/krokodil.jpg') }}" alt="" data-ww="['1000px','1000px','800px','800px']" data-hh="['563px','563px','450px','450px']" width="1200" height="675" data-no-retina> </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-75-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-90']"
                                 data-fontsize="['70','70','70','50']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="['650','650','620','380']"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":200,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,20,20,20]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[30,30,30,30]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 6; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Complete payment system with milestone request and release </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-75-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-247','-247','-247','-217']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":300,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">PAYMENT </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                 id="slide-75-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":400,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[30,30,30,30]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[30,30,30,30]"

                                 style="z-index: 8; white-space: normal; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Sign Up</div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-76" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/img/slider/transparent.html') }}" data-bgcolor='linear-gradient(140deg, rgba(35,21,87,1) 0%, rgba(68,16,122,1) 28%, rgba(255,19,97,1) 67%, rgba(255,248,0,1) 100%)' style='background:linear-gradient(140deg, rgba(35,21,87,1) 0%, rgba(68,16,122,1) 28%, rgba(255,19,97,1) 67%, rgba(255,248,0,1) 100%)' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                 id="slide-76-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-255','-255','-265','-185']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="image"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":200,"speed":750,"sfxcolor":"#231557","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktobottom","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5;"><img src="{{ asset('frontend/img/slider/birds.jpg') }}" alt="" data-ww="['1000px','1000px','800px','800px']" data-hh="['563px','563px','450px','450px']" width="1200" height="675" data-no-retina> </div>

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-76-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['100','100','50','96']"
                                 data-fontsize="['70','70','70','50']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="['650','650','620','380']"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":300,"speed":750,"sfxcolor":"#ff1361","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktobottom","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[20,20,20,20]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[30,30,30,30]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 6; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Search job, bid and get awarded. </div>

                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-76-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-47','-47','-97','-57']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":400,"speed":750,"sfxcolor":"#ff1361","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktobottom","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[10,10,10,10]"
                                 data-paddingright="[20,20,20,20]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[20,20,20,20]"

                                 style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">PROJECTS </div>

                            <!-- LAYER NR. 16 -->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                 id="slide-76-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['280','280','230','260']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="normal"

                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":500,"speed":750,"sfxcolor":"#ff1361","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktobottom","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[30,30,30,30]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[30,30,30,30]"

                                 style="z-index: 8; white-space: normal; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Join Now</div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>	</div>
            </div><!-- END REVOLUTION SLIDER -->

            <script>

                var tpj=jQuery;
                var revapi26;
                tpj(document).ready(function() {
                    if(tpj("#rev_slider_26_1").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider_26_1");
                    }else{
                        revapi26 = tpj("#rev_slider_26_1").show().revolution({
                            sliderType:"standard",
                            jsFileLocation:"revolution/js/",
                            sliderLayout:"fullscreen",
                            dottedOverlay:"none",
                            delay:9000,
                            navigation: {
                                keyboardNavigation:"off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation:"off",
                                mouseScrollReverse:"default",
                                onHoverStop:"off",
                                touch:{
                                    touchenabled:"on",
                                    touchOnDesktop:"off",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                }
                                ,
                                arrows: {
                                    style:"uranus",
                                    enable:true,
                                    hide_onmobile:true,
                                    hide_under:778,
                                    hide_onleave:false,
                                    tmp:'',
                                    left: {
                                        h_align:"left",
                                        v_align:"center",
                                        h_offset:15,
                                        v_offset:0
                                    },
                                    right: {
                                        h_align:"right",
                                        v_align:"center",
                                        h_offset:15,
                                        v_offset:0
                                    }
                                }
                                ,
                                bullets: {
                                    enable:true,
                                    hide_onmobile:false,
                                    style:"bullet-bar",
                                    hide_onleave:false,
                                    direction:"horizontal",
                                    h_align:"center",
                                    v_align:"bottom",
                                    h_offset:0,
                                    v_offset:30,
                                    space:5,
                                    tmp:''
                                }
                            },
                            responsiveLevels:[1240,1024,768,576],
                            visibilityLevels:[1240,1024,778,480],
                            gridwidth:[1240,1024,778,480],
                            gridheight:[868,768,960,720],
                            lazyType:"none",
                            parallax: {
                                type:"scroll",
                                origo:"slidercenter",
                                speed:2000,
                                levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                            },
                            shadow:0,
                            spinner:"off",
                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,
                            shuffle:"off",
                            autoHeight:"off",
                            fullScreenAutoWidth:"off",
                            fullScreenAlignForce:"off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60px",
                            hideThumbsOnMobile:"off",
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            debugMode:false,
                            fallbacks: {
                                simplifyAll:"off",
                                nextSlideOnWindowFocus:"off",
                                disableFocusListener:false,
                            }
                        });
                    }
                });	/*ready*/
            </script>

        </article>
    </section>
    <!-- Slider End -->
    <!-- How It Works Start -->
    <section id="how-it-works">
        <div class="container">
            <div class="how-it-works">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">How It Works</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="how-it-works-text">Post your project and receive competitive bids from freelancers within minutes. Our reputation system will make it easy to find the perfect freelancer for your job. It's the simplest and safest way to get work done online.
                            We have millions of Freelancers for thousands of freelance jobs: from web design, mobile app development, virtual assistants, product manufacturing and graphic design. </p>

                        <h3>Employer Benefits</h3>
                        <ul class="how-it-works-list">
                            <li>Only pay for the work when it is completed in a safe and secure manner. Release your payment when you are 100% satisfied with the work.</li>
                            <li>You’ll receive bids for free from our talented freelancers within seconds.</li>
                            <li>Keeping up-to-date with 24/7 support, time tracker, and mobile app.</li>
                            <li>Browse samples of previous work.</li>
                            <li>Chat for free.</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="{{ asset('frontend/img/works/how-it-works.jpg') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- First Step Start -->
    <section id="first-step">
        <div class="container">
            <div class="first-step">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">Take the First Step</h2>
                        <p class="first-step-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.</p>

                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="step">
                                    <div class="round">
                                        <i class="icofont icofont-computer"></i>
                                    </div>
                                    <h3>Website Development</h3>
                                    <a href="#">Starting from $ 100</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="step">
                                    <div class="round">
                                        <i class="icofont icofont-paint"></i>
                                    </div>
                                    <h3>Graphic Design</h3>
                                    <a href="#">Starting from $ 90</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="step">
                                    <div class="round">
                                        <i class="icofont icofont-growth"></i>
                                    </div>
                                    <h3>Internet Marketing</h3>
                                    <a href="#">Starting from $ 50</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="step">
                                    <div class="round">
                                        <i class="icofont icofont-brand-appstore"></i>
                                    </div>
                                    <h3>Mobile App</h3>
                                    <a href="#">Starting from $ 150</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- Success Stories Start -->
    <section id="success-stories">
        <div class="container">
            <div class="success-stories">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="success-title">
                            <h2>Success Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success1.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Logo Design, Website Design and Icon Design for a New e-Commercefor Storyblocks</a></h3>
                                <a href="#" class="button-ymp active">Find logo designers</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user1.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Maruf</a></p>
                                        <p>Freelancer Graphic Artist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success2.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Market research and Disital Marketing for business start up</a></h3>
                                <a href="#" class="button-ymp">Find researcher</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user2.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Salafee</a></p>
                                        <p>Freelance Marketer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success3.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Blog writing for your awesome website.</a></h3>
                                <a href="#" class="button-ymp">Find blog writers</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user3.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Rafsan</a></p>
                                        <p>Freelance Blog Writer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success4.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Custom t-shirt illustration for ThemeMom</a></h3>
                                <a href="#" class="button-ymp ">Find Illustrator</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user4.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Asib</a></p>
                                        <p>Freelance Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success5.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Build an eCommerce website</a></h3>
                                <a href="#" class="button-ymp">Find Developer</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user5.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Risha</a></p>
                                        <p>Freelance Web Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="success-item" style="background-image:url({{ asset('frontend/img/success/success6.jpg') }})">
                            <div class="success-wrapper">
                                <h3><a href="#">Website Design, Website Development, Custom Icon Design and Disital Marketing for Motorcycle restoration site for Nicoleson</a></h3>
                                <a href="#" class="button-ymp">Find Graphic Designer</a>

                                <div class="sucess-user">
                                    <img src="{{ asset('frontend/img/success/user6.jpg') }}" alt="">
                                    <div class="success-user-details">
                                        <p>by <a href="#">Protik</a></p>
                                        <p>Freelance Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- Top Five Freelancers Start -->
    <section id="top-five">
        <div class="container">
            <div class="top-five">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">Browse the Top 5 Freelancers in Each Category</h2>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="top-five-freelancer">
                            <ul>
                                <li><a href="#">Hire</a></li>
                                <li><a href="#">Data Entry</a></li>
                                <li><a href="#">Logo Design</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Website Design</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="top-five-freelancer">
                            <ul>
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">Translation</a></li>
                                <li><a href="#">Mobile Phone</a></li>
                                <li><a href="#">Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="top-five-freelancer">
                            <ul>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Internet Banking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="top-five-freelancer">
                            <ul>
                                <li><a href="#">Excel</a></li>
                                <li><a href="#">Power Point</a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">Software Architecture</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- Testimonial Start -->
    <!-- SLIDER EXAMPLE -->
    <section class="example">
        <article class="content">
            <div id="rev_slider_491_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="hero-news" data-source="gallery" style="margin:0px auto;background-color:#eeeeee;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="rev_slider_491_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>	<!-- SLIDE  -->
                        <li data-index="rs-1704" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/img/slider/transparent.png') }}" data-bgcolor="#d6adad" alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme fullscreenvideo rs-parallaxlevel-10 tp-videolayer"
                                 id="slide-1704-layer-3"
                                 data-x="0"
                                 data-y="0"
                                 data-whitespace="nowrap"

                                 data-type="video"
                                 data-responsive_offset="on"

                                 data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"ease":"nothing"}]'
                                 data-vimeoid="131379560" data-videoattributes="background=1%26title=0%26byline=0%26portrait=0%26api=1.html data-videowidth="100%" data-videoheight="100%" data-videoloop="none" data-forceCover="1" data-aspectratio="4:3"
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-autoplay="off"
                            data-volume="100"
                            style="z-index: 5;border-width:0px;"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                     id="slide-1704-layer-5"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-width="full"
                     data-height="full"
                     data-whitespace="nowrap"

                     data-type="shape"
                     data-basealign="slide"
                     data-responsive_offset="on"

                     data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"ease":"nothing"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-lasttriggerstate="reset"
                     style="z-index: 6;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);border-width:0px;"> </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption Newspaper-Title-Centered tp-resizeme"
                     id="slide-1704-layer-1"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['7','7','7','-10']"
                     data-fontsize="['50','50','50','30']"
                     data-lineheight="['55','55','55','35']"
                     data-width="['721','721','721','420']"
                     data-height="none"
                     data-whitespace="normal"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[0,0,0,0]"
                     data-lasttriggerstate="reset"
                     style="z-index: 7; min-width: 721px; max-width: 721px; white-space: normal;color: #fff">"It was a great experience with yes marketplace."</div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption Newspaper-Subtitle tp-resizeme"
                     id="slide-1704-layer-2"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-65','-59']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-lasttriggerstate="reset"
                     style="z-index: 8; white-space: nowrap;color: #fff;">Rafsan Jany - ThemeMom</div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption Newspaper-Button-2 rev-btn "
                     id="slide-1704-layer-4"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['96','96','96','77']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="button"
                     data-actions='[{"event":"click","action":"playvideo","layer":"slide-1704-layer-3","delay":"1000"},{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-1704-layer-5","delay":"0"},{"event":"click","action":"stoplayer","layer":"slide-1704-layer-1","delay":"0"},{"event":"click","action":"stoplayer","layer":"slide-1704-layer-2","delay":"0"},{"event":"click","action":"stoplayer","layer":"slide-1704-layer-4","delay":"0"},{"event":"click","action":"startlayer","layer":"slide-1704-layer-6","delay":"0"}]'
                     data-responsive_offset="on"
                     data-responsive="off"
                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":2,"to":"opacity:0;","ease":"Linear.easeNone"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[10,10,10,10]"
                     data-paddingright="[30,30,30,30]"
                     data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[30,30,30,30]"
                     data-lasttriggerstate="reset"
                     style="z-index: 9; white-space: nowrap;cursor:pointer;color: #fff">PLAY VIDEO</div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption rev-btn rev-medium rev-minround rev-bordered  "
                     id="slide-1704-layer-6"
                     data-x="['left','center','center','center']" data-hoffset="['30','0','0','0']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','20','20']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-actions='[{"event":"click","action":"stopvideo","layer":"slide-1704-layer-3","delay":"0"},{"event":"click","action":"stoplayer","layer":"slide-1704-layer-6","delay":"0"},{"event":"click","action":"startlayer","layer":"slide-1704-layer-5","delay":"0"},{"event":"click","action":"startlayer","layer":"slide-1704-layer-1","delay":"0"},{"event":"click","action":"startlayer","layer":"slide-1704-layer-2","delay":"0"},{"event":"click","action":"startlayer","layer":"slide-1704-layer-4","delay":"0"}]'
                     data-responsive_offset="on"
                     data-responsive="off"
                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":2,"to":"opacity:0;","ease":"Linear.easeNone"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[10,10,10,10]"
                     data-paddingright="[30,30,30,30]"
                     data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[30,30,30,30]"
                     data-lasttriggerstate="reset"
                     style="z-index: 10; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;background-color:rgba(0, 0, 0, 0);border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:2px;border-radius:3px 3px 3px 3px;cursor:pointer;"><i class="icofont icofont-ui-pause"></i></div>
                </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
            </div><!-- END REVOLUTION SLIDER -->
            <script>
                var tpj=jQuery;
                var revapi491;
                tpj(document).ready(function() {
                    if(tpj("#rev_slider_491_1").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider_491_1");
                    }else{
                        revapi491 = tpj("#rev_slider_491_1").show().revolution({
                            sliderType:"hero",
                            jsFileLocation:"revolution/js/",
                            sliderLayout:"fullwidth",
                            dottedOverlay:"none",
                            delay:9000,
                            navigation: {
                            },
                            viewPort: {
                                enable:true,
                                outof:"pause",
                                visible_area:"80%",
                                presize:false
                            },
                            responsiveLevels:[1240,1024,778,480],
                            visibilityLevels:[1240,1024,778,480],
                            gridwidth:[1240,1024,778,480],
                            gridheight:[500,450,400,350],
                            lazyType:"none",
                            parallax: {
                                type:"scroll",
                                origo:"enterpoint",
                                speed:400,
                                levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
                                type:"scroll",
                            },
                            shadow:0,
                            spinner:"off",
                            autoHeight:"off",
                            disableProgressBar:"on",
                            hideThumbsOnMobile:"off",
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            debugMode:false,
                            fallbacks: {
                                simplifyAll:"off",
                                disableFocusListener:false,
                            }
                        });
                    }
                });
            </script>
        </article>
    </section>
    <!-- Testimonial End -->
    <!-- Get Started In Minutes Start -->
    <section id="get-started">
        <div class="container">
            <div class="get-started">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">Get Started In Minutes</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="get-started-wrapper">
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3 mobile-padding">
                                    <img src="{{ asset('frontend/img/get-started/started1.png') }}" alt="">
                                    <p class="bar-ymp"></p>
                                    <h3>Find</h3>
                                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3 mobile-padding">
                                    <img src="{{ asset('frontend/img/get-started/started2.png') }}" alt="">
                                    <p class="bar-ymp"></p>
                                    <h3>Hire</h3>
                                    <p>Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.</p>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3 mobile-padding">
                                    <img src="{{ asset('frontend/img/get-started/started3.png') }}" alt="">
                                    <p class="bar-ymp"></p>
                                    <h3>Work</h3>
                                    <p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3 mobile-padding">
                                    <img src="{{ asset('frontend/img/get-started/started4.png') }}" alt="">
                                    <p class="bar-ymp"></p>
                                    <h3>Pay</h3>
                                    <p>Invoicing and payments happen through Upwork. With Upwork Protection, only pay for work you authorize.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="button-ymp-wrapper">
                            <a href="#" class="button-ymp active">Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- We Are Also Featured Start -->
    <section id="featured">
        <div class="container">
            <div class="featured">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">We Are Also Featured On</h2>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured1.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured2.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured3.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured4.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured5.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2 mobile-padding">
                        <a href="#"><img src="{{ asset('frontend/img/featured/featured6.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- Subscribe Start -->
    <section id="subscribe">
        <div class="container">
            <div class="subscribe">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="title">Founder? Entrepreneur? Project Manager? SME? Resource? Freelancer?</h2>
                        <h3>Stay informed and get inspired with our newsletter</h3>
                        <form method="get" action="#">
                            <input class="form-control" type="email" name="subscribe-email" placeholder="Your email address ...">
                            <input class="form-control" type="submit" name="subscribe-submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('library-css')
    <!-- LOAD JQUERY LIBRARY -->
    <script src="{{ asset('frontend/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/settings.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <style type="text/css">.tiny_bullet_slider .tp-bullet:before{content:" ";  position:absolute;  width:100%;  height:25px;  top:-12px;  left:0px;  background:transparent}</style>
    <style type="text/css">#rev_slider_26_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_26_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_26_1 .uranus.tparrows:hover:before{opacity:0.75}.bullet-bar.tp-bullets{}.bullet-bar.tp-bullets:before{content:" ";position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}.bullet-bar .tp-bullet{width:60px;height:3px;position:absolute;background:#aaa;  background:rgba(204,204,204,0.5);cursor:pointer;box-sizing:content-box}.bullet-bar .tp-bullet:hover,.bullet-bar .tp-bullet.selected{background:rgba(204,204,204,1)}.bullet-bar .tp-bullet-image{}.bullet-bar .tp-bullet-title{}</style>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

@endpush



@push('library-js')
    <script src="{{ asset('frontend/js/pop-up.js') }}"></script>
@endpush





@push('custom-js')
    <script>
        $(document).ready(function() {
            $("body").on("contextmenu",function(e){
                return false;
            });
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58965534-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-58965534-4');
    </script>
@endpush