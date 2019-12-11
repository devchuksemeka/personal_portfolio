@extends('layouts.app')

@section('content')
    <div id="page" class="page template-style-dark">
        <header id="site_header" class="header mobile-menu-hide header-color-dark">
            <div class="my-photo tilt-effect">
                <img src="/assets/images/photo.png" alt=""/>
            </div>

            <div class="site-title-block">
                <h1 class="site-title">Chuks Emeka</h1>
            </div>
            <div class="site-nav">
                <ul id="nav" class="site-main-menu">
                    <li>
                        <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
                <div class="mobile-site-title">Chuks Emeka</div>
            </div>

            <a href="#" class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div id="main" class="site-main">

            <div class="pt-wrapper" style="background-image: url({{asset('assets')}}/images/main_bg_light.jpg)">

                <div class="subpages">
                    <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
                        <div class="section-inner">
                            <div class="home-page-block">
                                <h2>Chuks Emeka</h2>
                                <div class="owl-carousel text-rotation">
                                    <div class="item">
                                        <p class="home-page-description">Backend Developer</p>
                                    </div>
                                    <div class="item">
                                        <p class="home-page-description">Frontend Developer</p>
                                    </div>
                                    <div class="item">
                                        <p class="home-page-description">Database Designer & Developer</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-page pt-page-2" data-id="about_me">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper clearfix">
                                    <h2 class="section-title">About Me</h2>
                                    <h5 class="section-description">Software Engineer, Database Designer & Developer</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <div class="my-photo-block tilt-effect">
                                        <img src="{{asset('assets')}}/images/photo.png" alt=""></img>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <h3>I am Backend Developer @ nuture.tech</h3>
                                    <p>Exceptionally focused and reliable Fullstack Developer with a strong background and utilizing passion for <strong>PHP</strong>, <strong>Node JS</strong> and <strong>Java</strong> programming. <br/>Good skill set in GIT and other project collaboration and remote working. Love working with teams that believess in the effect of the technology and how it affect business today.</p>
                                    <p>I have an intense desire to learn, understand and contribute to the business side of web and mobile application programming. I possess good communication skills and can always come up with innovative ideas. I am able to work well independently or as part of a professional computer program development team</p>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <ul class="info-list">
                                        <li><span class="title">Age</span><span class="value">26</span></li>
                                        <li><span class="title">Residence</span><span class="value">Nigeria</span></li>
                                        <li><span class="title">Address</span><span class="value">67 Buari Street, Ogudu Kosofe Lagos</span></li>
                                        <li><span class="title">e-mail</span><span class="value"><a href=""><span>devchuksemek@gmail.com</span></a></span></li>
                                        <li><span class="title">Phone</span><span class="value">+234 701 1669 4767</span></li>
                                        <li><span class="title">Skype</span><span class="value">devchuksemeka</span></li>
                                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                                    </ul>

                                    <ul class="social-links">
                                        <li><a class="tip social-button" href="https://twitter.com/devchuksemeka" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="tip social-button" href="https://facebook.com/devchuksemeka" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="tip social-button" href="https://linkdedin.com/in/devchuksemeka" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="tip social-button" href="https://github.com/devchuksemeka" title="Github"><i class="fa fa-github"></i></a></li>
                                        <li><a class="tip social-button" href="https://instagram.com/devchuksemeka" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="block-title">
                                <h3>Services</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="service-block">
                                        <div class="service-info">
                                            <img src="{{asset('assets')}}/images/service/web_design_icon.png" alt="Responsive Design"></img>
                                            <h4>Web App Development</h4>
                                            <p>Build website that have the eye welcoming sensation</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="service-block">
                                        <div class="service-info">
                                            <img src="{{asset('assets')}}/images/service/photography_icon.png" alt="Photography"></img>
                                            <h4>Database Development</h4>
                                            <p>Design database and system architecture that scales and flexible</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="service-block">
                                        <div class="service-info">
                                            <img src="{{asset('assets')}}/images/service/creativity_icon.png" alt="Creativity"></img>
                                            <h4>Enterprise Solutions</h4>
                                            <p>Build bespoke enterprise solutions</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="service-block">
                                        <div class="service-info">
                                            <img src="{{asset('assets')}}/images/service/advetising_icon.png" alt="Advetising"></img>
                                            <h4>E-Commerce</h4>
                                            <p>Build bespoke e-commerce application that works.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-title">
                                <h3>Clients</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="http://postertrack.com" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_1.png" alt=""></img>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="https://dewestwindng.com" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_2.png" alt=""></img></a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="https://nuture.tech" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_4.png" alt=""></img></a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="http://pathwayglobalfoundation.com" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_3.png" alt=""></img>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="https://irs.an.gov.ng/anscims" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_5.png" alt=""></img></a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="https://irs.an.gov.ng/anssids" target="_blank">
                                            <img src="{{asset('assets')}}/images/clients/client_6.png" alt=""></img></a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 subpage-block">
                                    <div class="block-title">
                                        <h3>Testimonials</h3>
                                    </div>
                                    <div class="testimonials owl-carousel">

                                        <div class="testimonial-item">

                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>
                                                </div>
                                            </div>

                                            <div class="testimonial-credits">

                                                <div class="testimonial-picture">
                                                    <img src="{{asset('assets')}}/images/testimonials/testimonial_photo_1.jpg" alt=""></img>
                                                </div>

                                                <div class="testimonial-author-info">
                                                    <p class="testimonial-author">Maria Richardson</p>
                                                    <p class="testimonial-firm">Lindsley's Lumber</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="testimonial-item">

                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."</p>
                                                </div>
                                            </div>

                                            <div class="testimonial-credits">

                                                <div class="testimonial-picture">
                                                    <img src="{{asset('assets')}}/images/testimonials/testimonial_photo_2.jpg" alt=""></img>
                                                </div>

                                                <div class="testimonial-author-info">
                                                    <p class="testimonial-author">John Doe</p>
                                                    <p class="testimonial-firm">Apple Inc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>
                                                </div>
                                            </div>

                                            <div class="testimonial-credits">

                                                <div class="testimonial-picture">
                                                    <img src="{{asset('assets')}}/images/testimonials/testimonial_photo_3.jpg" alt=""></img>
                                                </div>

                                                <div class="testimonial-author-info">
                                                    <p class="testimonial-author">George McQueen</p>
                                                    <p class="testimonial-firm">Harmony House</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-title">
                                <h3>Fun Facts</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="fun-fact-block gray-bg tilt-effect">
                                        <i class="pe-7s-icon pe-7s-smile"></i>
                                        <h4>Happy Clients</h4>
                                        <span class="fun-value">7</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                                    <div class="fun-fact-block">
                                        <i class="pe-7s-icon pe-7s-alarm"></i>
                                        <h4>Working Hours</h4>
                                        <span class="fun-value">3,459</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                                    <div class="fun-fact-block gray-bg">
                                        <i class="pe-7s-icon pe-7s-medal"></i>
                                        <h4>Awards Won</h4>
                                        <span class="fun-value">2</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                                    <div class="fun-fact-block">
                                        <i class="pe-7s-icon pe-7s-coffee"></i>
                                        <h4>Coffee Consumed</h4>
                                        <span class="fun-value">25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-page pt-page-3" data-id="resume">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Resume</h2>
                                    <h5 class="section-description">3 Years of Experience</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Education</h3>
                                    </div>
                                    <div class="timeline">
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2018</h5>
                                            <h4 class="event-name">NodeJs Master class</h4>
                                            <span class="event-description">Riby Developer Academy</span>
                                            <p>Learnt MERN stack at Riby Fin Tech. Technology learnt are NodeJS, ReactJS, ExpressJS and MongoDB.</p>
                                        </div>
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2017</h5>
                                            <h4 class="event-name">Software Engineering</h4>
                                            <span class="event-description">New Horizon Training Center</span>
                                            <p>Learnt how to build web, mobile application and database designing and development.<br/>
                                                Technology learnt are Html, CSS, javascript, PHP, JAVA, MsSql, MySql and PostGres.</p>
                                        </div>
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2015</h5>
                                            <h4 class="event-name">Computer Science & Statistics</h4>
                                            <span class="event-description">Federal University of Agric, Makurdi</span>
                                            <p>Learnt foundamental and basics of computer science and application of statistis for data analysis</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Experience</h3>
                                    </div>
                                    <div class="timeline">
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Jun 2019 - Current</h5>
                                            <h4 class="event-name">Fullstack-developer</h4>
                                            <span class="event-description">UOE Domos</span>
                                            <p>Design and develop website and API.</p>
                                        </div>
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Apr 2019 - Current</h5>
                                            <h4 class="event-name">Backend-developer</h4>
                                            <span class="event-description">Nuture Technology Service</span>
                                            <p>Develops API and Documentation for consuming client.</p>
                                        </div>

                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Sep 2018 - Apr 2019</h5>
                                            <h4 class="event-name">Fullstack-developer</h4>
                                            <span class="event-description">Techie Planet</span>
                                            <p>Handles development and building Website and API for mobile clients.</p>
                                        </div>

                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Sep 2017 - May 2018</h5>
                                            <h4 class="event-name">Web & Mobile App Developer</h4>
                                            <span class="event-description">Technovia</span>
                                            <p>Handles down top process of building web and mobile applicaton.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Coding Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        <h4>HTML5</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>VueJS</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>ReactJS</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>

                                        <h4>Wordpress</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>

                                        <h4>PHP</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-4"></div>
                                        </div>

                                        <h4>Laravel</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-4"></div>
                                        </div>

                                        <h4>NodeJs</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-5"></div>
                                        </div>

                                        <h4>ExpressJS</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>

                                        <h4>AdonisJS</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h3>Technical Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        <h4>DevOps</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>Database Adminstrator</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-2"></div>
                                        </div>

                                        <h4>GIT</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>

                                        <h4>AWS Rekognition</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>

                                        <h4>Rest API</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>

                                        <h4>GraphQL API</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>

                                        <h4>SQL</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>
                                        <h4>NoSQL</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-4"></div>
                                        </div>

                                        <h4>MySQL</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>MongoDB</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h3>Soft Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        <h4>Presentation</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>

                                        <h4>Writing</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="download-cv-block">
                                        <a class="button" target="_blank" href="#">Download CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-page pt-page-4" data-id="portfolio">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Portfolio</h2>
                                    <h5 class="section-description">My Best Works</h5>
                                </div>
                            </div>

                            <div class="portfolio-content">

                                <ul id="portfolio_filters" class="portfolio-filters">
                                    <li class="active">
                                        <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="web_app">Web Application</a>
                                    </li>

                                </ul>

                                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                                    <figure class="item" data-groups='["all", "web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/1.png" class="lightbox mfp-iframe">
                                            <img src="{{asset('assets')}}/images/portfolio/1.png" alt=""/>
                                            <div>
                                                <h5 class="name">Poster Track</h5>
                                                <small>Web Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <figure class="item" data-groups='["all", "web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/2.png" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                                            <img src="{{asset('assets')}}/images/portfolio/2.png" alt=""/>
                                            <div>
                                                <h5 class="name">DeWestWind Nigeria</h5>
                                                <small>Web Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <figure class="item" data-groups='["all","web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/full/3.png" class="lightbox mfp-iframe" title="Duis Eu Eros Viverra">
                                            <img src="{{asset('assets')}}/images/portfolio/3.png" alt=""/>
                                            <div>
                                                <h5 class="name">Pathway Global Foundation</h5>
                                                <small>wWeb Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>

                                    <figure class="item" data-groups='["all", "web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/4.png" class="lightbox mfp-iframe">
                                            <img src="{{asset('assets')}}/images/portfolio/4.png" alt=""/>
                                            <div>
                                                <h5 class="name">ANSCIMS (Anambra State Central Information Management System)</h5>
                                                <small>Web Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <figure class="item" data-groups='["all", "web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/5.png" class="lightbox mfp-iframe">
                                            <img src="{{asset('assets')}}/images/portfolio/5.png" alt=""/>
                                            <div>
                                                <h5 class="name">RELEAF Factory Operation Tool (FOT)</h5>
                                                <small>Enterprise Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <figure class="item" data-groups='["all", "web_app"]'>
                                        <a href="{{asset('assets')}}/images/portfolio/6.png" class="lightbox mfp-iframe">
                                            <img src="{{asset('assets')}}/images/portfolio/6.png" alt=""/>
                                            <div>
                                                <h5 class="name">TAME: The African Music Evolution Initiative</h5>
                                                <small>Web Application</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-page pt-page-5" data-id="contact">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Contact</h2>
                                    <h5 class="section-description">Get in Touch</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Get in Touch</h3>
                                    </div>
                                    <p>My perspective is to satisfy the needs of my customers because 'Customer is the King or Queen</p>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-map-marker"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>Ogudu, Kosofe, Lagos Nigeria</h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-mail"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5><a>devchuksemeka@gmail.com</a></h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-call"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>+234 701 669 4767</h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-check"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>Freelance Available</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Contact Form</h3>
                                    </div>
                                    <form  @submit="handleSubmitContactForm">

                                        <div class="messages"></div>

                                        <div class="controls">
                                            <div class="form-group">
                                                <input id="form_name" v-model="contact_form.name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required."/>
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-user"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <input id="form_email" v-model="contact_form.email"  type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required."/>
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-mail"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <textarea v-model="contact_form.message"  id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-comment"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <span v-if="show_alert" style="color: forestgreen">Email sent successfully</span>
                                            <input type="submit" class="button btn-send" value="Send message"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('requiredJs')
    <script>
        // const nodemailer = window.require('nodemailer');
        new Vue({
            el: '#page',
            data() {
                return {
                    show_alert:false,
                    contact_form:{

                    }
                }
            },
            mounted(){
                // this.getEvents();
            },
            methods: {
                async handleSubmitContactForm(e){
                    e.preventDefault();
                    await axios.post('/api/send-contact-mail',this.contact_form);
                    this.show_alert = true;

                    setInterval(() => this.show_alert = false,5000);
                }
            },
        })
    </script>
@endsection

