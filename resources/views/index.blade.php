<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kevin Mugiira</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset2/img/im2.jpg" rel="icon">
    <link href="asset2/img/im2.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asset2/css/style.css" rel="stylesheet">

</head>

<style>
    .video-container {
        max-width: 800px; /* Set a maximum width for the video player */
        margin: 0 auto; /* Center the video player horizontally */
    }

    /* Optional: Style the video player controls */
    video {
        width: 100%;
    }

    /* Additional styling for the play button */
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        cursor: pointer;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        background-color: #18d26e;
        border-radius: 6px;
        outline: none;
        transition: 0.3s;
    }
    .button:hover {
        background-color: #c2c7c7;
    }

</style>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

    @if(Session::get('sent-message'))
                  <div class="alert alert-success" role="alert">
                      {{Session::get('sent-message')}}
                  </div>
        @endif


        <h1><a href="{{url('index')}}">Kevin Mugiira</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{--        <a href="index.html" class="mr-auto"><img src="{{asset('asset2/img/logo.png')}}" alt="" class="img-fluid"></a> --}}
        <h2>A passionate <span>Software Developer</span> from Nairobi Kenya</h2>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="#header">Home</a></li>
                <li><a class="nav-link" href="#bio">Bio</a></li>
                <li><a class="nav-link" href="#pitch">Pitch video</a></li>
                <li><a class="nav-link" href="#resume">Resume</a></li>
                <li><a class="nav-link" href="#services">Services</a></li>
                <li><a class="nav-link" href="#portfolio">Portifolio</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
            <a href="https://github.com/kevinmugiira/" class="github"><i class="bi bi-github"></i></a>
            <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
            <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
            <a href="https://www.linkedin.com/in/kevin-mugiira-b7a06b128/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= About Section ======= -->
<section id="bio" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>Bio</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{asset('asset2/img/509.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Back-end Developer (Spring Boot &amp; Laravel)</h3>
                <p class="fst-italic">
                    Specialized in designing and building scalable, modular applications using the Spring framework, allowing for efficient and independent development, deployment, and maintenance of microservices-based systems.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://bit.ly/kevin-mugiira  </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+254 710 955 090</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nairobi, KENYA</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BSc Information Technology</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>kevinmugiira@gmail.com kevinm@net-co.online</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance/Work:</strong> <span>Available</span></li>
                        </ul>
                    </div>
                </div>
                <p>
                    Hi. Kevin Mugiira over here. A Software Developer working with Object Oriented Programming architectures such as Java and PHP. Experienced in Fintech ecosystems specifically in enabling secure payment processes, data aggregation, identity verification, and cloud services provision. Focused on acquiring new skills that will allow the creation of better and more advanced software solutions. Developed a podcasting service managed by VeksonTech. A result-driven individual & team player that embraces change, and has an excellent footing in my educational background that was curated from Kenyatta University in Information Technology. Currently on a course to sharpen skills in presentation, leadership, Google Workspace, and project stewardship. Love for tech and virtual management processes grows the desire to ply in a software ecosystem where the entire skill set is utilized fully.
                    Aims at taking responsibility for providing robust endpoints, code integration oversight, and maintaining quality & professional business relationships with current and potential clients.
                </p>
            </div>
        </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="05" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="763" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="05" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Awards</p>
                </div>
            </div>

        </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">Spring Boot <i class="val">85%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Laravel <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Microservices <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">AWS <i class="val">25%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Linux <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Git <i class="val">70%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">Java <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">PHP <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Rust <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">C++ <i class="val">65%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JAVASCRIPT <i class="val">65%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">MySQL <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>



            </div>

        </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="section-title">
            <h2>Interests</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-open-source-fill" style="color: #ffbb2c;"></i> <!-- ri-store-line -->
                    <h3>Open Source</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-code-s-slash-line" style="color: #5578ff;"></i>  <!-- ri-bug-line -->
                    <h3>Programming Languages</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-code-fill" style="color: #e80368;"></i>  <!-- ri-calendar-todo-line -->
                    <h3>Algorithms</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <h3>Problem Solving</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-gamepad-fill" style="color: #47aeff;"></i> <!-- ri-database-2-line -->
                    <h3>Call of Duty</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-airplay-fill" style="color: #ffa76e;"></i> <!-- ri-gradienter-line -->
                    <h3>Gadgets</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-ai-generate" style="color: #11dbcf;"></i> <!-- ri-file-list-3-line -->
                    <h3>AI & ML</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-clockwise-2-fill" style="color: #4233ff;"></i> <!-- ri-price-tag-2-line -->
                    <h3>DevOps</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-bar-chart-2-fill" style="color: #b2904f;"></i> <!-- ri-bar-chart-box-line -->
                    <h3>Data & Analytics</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-emotion-fill" style="color: #b20969;"></i>  <!-- ri-disc-line -->
                    <h3>Design & User Experience(UX)</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-database-2-fill" style="color: #ff5828;"></i> <!-- ri-base-station-line -->
                    <h3>BlockChain</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-bike-line" style="color: #29cc61;"></i> <!-- ri-fingerprint-line -->
                    <h3>Cycling</h3>
                </div>
            </div>
        </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

        <div class="section-title">
            <h2>References</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Self-propelled individual with greate programming skills. Well composed and does tasks in a perfectionist manner.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset('asset2/img/KigenPatrick.png')}}" class="testimonial-img" alt="">
                        <h3>Patrick Kigen</h3>
                        <h4>Research Analyst</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Looking forward to seeing you grow into the leader that you are. Well equipped for the professional journey in tech.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
{{--                        <img src="{{asset('asset2/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">--}}
                        <h3>Robert Leposo</h3>
                        <h4>Database Administrator</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Has exhibited a deep understanding of complex IT concepts and has applied this knowledge effectively in both coursework and practical projects. His ability to grasp new technologies swiftly and apply them innovatively is truly commendable.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
{{--                        <img src="{{asset('asset2/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">--}}
                        <h3>Benson Okebe</h3>
                        <h4>Chairman KU CIT Department</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Kevin is responsible for managing our social media platforms and he has proven to be an invaluable asset to our team, leveraging his technical skills to elevate our online presence to new heights.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset('asset2/img/KaregiSusan.png')}}" class="testimonial-img" alt="">
                        <h3>Susan Karegi</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Testimonial comming soon !!
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset('asset2/img/alxlogo.png')}}" class="testimonial-img" alt="">
                        <h3>African Leadership X (ALX)</h3>
                        <h4>Tech Programme</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="owl-carousel testimonials-carousel">

        </div>

    </div><!-- End Testimonials  -->

</section><!-- End About Section -->

<!-- ====== Elevator Pitch Video Section ====== -->
<section id="pitch" class="pitch">
    <!-- ======= Elevator Pitch ======= -->
    <div class="container">

        <div class="section-title">
            <h2>Elevator Pitch Video</h2>
            <p>Watch Kevin's Elevator Pitch</p>
        </div>

        <div class="row">
            <div class="video-container">
                <video id="video-player" controls>
                    <source src="asset2/champ.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div><!-- End Elevator Pitch -->
</section>
<!-- End Elevator Pitch Section -->


<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check out My Resume</p>
            <h4>
                <a class="button" href="https://docs.google.com/document/d/1jd5OXGjxC0W_4mEYOjE2QjgXNlA-9a3k/edit?usp=sharing&ouid=103774388930545684876&rtpof=true&sd=true">View my CV</a>
            </h4>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Summary</h3>
                <div class="resume-item pb-0">
                    <h4>Kevin Mugiira</h4>
                    <p><em>Friendly and professional Software Developer with extensive understanding of web-based technologies who loves resolving technical problems by applying logic and skills to decompose the problem and build up the solutions step by step. Strong interpersonal skills proven through human interaction on various places such as workshops, trainings, and project development scenarios. Creative user of visual and graphical technologies that enhances the
                            technical and social situations by directing their attention to what is important in-terms of the set goal. Seeking a position as a Back-end Developer to propel the organization’s growth & outreach as I continue my career growth in technology and software development.</em></p>
                    <p>
                    <ul>
                        <li>Nairobi,Kenya</li>
                        <li>(+254) 710 955 090</li>
                        <li>www://http/veksohntech.com</li>
                    </ul>
                    </p>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>ALX Foundations &amp; AWS</h4>
                    <h5>April 2023 - Present</h5>
                    <p><em>African Leadership X (ALX), Nairobi, Kenya</em></p>
                    <p>Learnt and developed essential leadership skills and qualities to effectively lead teams, drive organizational growth, and make impactful decisions. While pursuing the skills and knowledge to effectively utilize the cloud computing services provided by Amazon, which is a widely used cloud platform offering an array of services, including storage, databases, computing power, analytics, networking and more.</p>
                </div>
                <div class="resume-item">
                    <h4>Bachelor of Information Technology</h4>
                    <h5>September 2017 - finished (waiting for graduation)</h5>
                    <p><em>Kenyatta University, Nairobi, Kenya</em></p>
                    <p>Pursued a Bachelor of Science in Information Technology (IT) which involved a comprehensive educational journey focused on understanding and mastering various aspects of technology, computing and their applications in the modern world. This was coupled up by Computer Science fundamentals, Software Development, Networking & Security, Databaes & Databae management, Operating Systems, and Information Systems just to mentions a few.</p>
                </div>
                <div class="resume-item">
                    <h4>International Computer Driving License</h4>
                    <h5>Jan 2016 - July 2016</h5>
                    <p><em>Sipet College, Meru, Kenya</em></p>
                    <p>Enabled the acquiring of essential computer and digital literacy skills that are globally recognized and respected. The certification program provided the validation of ones ability to use computer applications efficiently and effectively.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                    <h4>Spring Boot Developer</h4>
                    <h5>2022 May - 2022 September - Present</h5>
                    <p><em>Eclectics International, Nairobi, Kenya</em></p>
                    <p>
                    <ul>
                        <li>Working in the Support Department to debug, add functionality and provide solutions to problems encountered by users from our various ESB channels.</li>
                        <li>Develop end-points for web and mobile consumption.</li>
                        <li>Managing projects asynchronously while under pressure</li>
                        <li>Prepared project documentation covering the development and delivery of the product.</li>
                        <li>Consulting with fellow developers to come up with the best third party integration sources and architectures.</li>
                        <li>Creating project presentations and proposals for products delivery.</li>
                    </ul>
                    </p>
                </div>
                <div class="resume-item">
                    <h4>AWS & Foundations in Leadership</h4>
                    <h5>2023 July - Present (awaiting)</h5>
                    <p><em>Amazon Web Services (AWS), African Leadership Group X (ALX), Nairobi, Kenya</em></p>
                    <p>
                    <ul>
                        <li>Cloud Services provision with AWS. (AWS Cloud Practitioner Certified)</li>
                        <li>Developing end-points for the Mfumbuzi ALX group mobile app project.</li>
                    </ul>
                    </p>
                </div>
                <div class="resume-item">
                    <h4>Full Stack (Laravel) Developer</h4>
                    <h5>2023 Jan - 2023 April</h5>
                    <p><em>Kenyatta University, Nairobi, Kenya </em></p>
                    <p>
                    <ul>
                        <li>Lead in the design, development, and implementation of a podcast management system including the graphics, front-end, back-end, and DevOps</li>
                    </ul>
                    </p>
                </div>
                <div class="resume-item">
                    <h4>Content Developer</h4>
                    <h5>2021 March - 2021 September</h5>
                    <p><em>Zen Bubbles, Nairobi, Kenya</em></p>
                    <p>
                    <ul>
                        <li>Developing social media content for product advertisements.</li>
                        <li>Prepared posting schedules for various social platforms.</li>
                        <li>Managed company social media platforms and the customer interaction.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>My Services</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-code-block "></i> <!-- bxl-dribbble -->
                    </div>
                    <h4><a href="">End-point Development</a></h4>
                    <p>Interface creation that allow various components of a software system to communicate and interact with each other.
                        Provide routes and URLs that enable data exchange between different parts of the software, involving the front-end and back-end.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-data"></i></div> <!-- bx-file -->
                    <h4><a href="">Database Design</a></h4>
                    <p>Creation of structured and efficient storage systems to organize, manage, and retrieve data used by products. Relationships and data schema definition for relationships between different entities.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-intersect"></i>  <!-- bx-tachometer -->
                    </div>
                    <h4><a href="">User Interviews</a></h4>
                    <p>Performing methods for qualitative research for gathering insights and feedback from users. Aiming to understand their needs, preferences,
                        challenges, and experiences for your product.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-share"></i> <!-- bx-world -->
                    </div>
                    <h4><a href="">Thirdy party end-point Integration</a></h4>
                    <p>Incoporating external services, APIs or systems into your software to enhance it functionality and provide additional features.
                        API Documentation, Authentication, Data Exchange, and Rate Limiting.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-cloud"></i> <!-- bx-slideshow -->
                    </div>
                    <h4><a href="">Cloud Operations</a></h4>
                    <p>Cloud Infrastructure management, monitoring and performance optimizing while complying with the industry security standards. Focusing on ensuring smooth functioning, reliability, security, and efficiency of products in a cloud environment.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon">
                        <i class="bx bx-server"></i> <!-- bx-arch -->
                    </div>
                    <h4><a href="">Microservices developement</a></h4>
                    <p>Designing and building applications as a collection of small, independent, and loosely coupled services. With each service focusing on a specific business capability and operating as a standalone unit, communicating with other services via APIs.</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Mobile</li>
                    <li data-filter=".filter-web">Web</li>
                    <li data-filter=".filter-certification">Certification</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/portfolio/cover2.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Mfumbuzi Project Youtube Link</h4>
                        <p>YouTube Link</p>
                        <div class="portfolio-links">
                            <a href="asset2/img/portfolio/cover2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="https://www.youtube.com/watch?v=ZmmbaNCOhiA&ab_channel=KevinMugiira" data-gallery="portfolioDetailsGallery" ><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/portfolio/electric-prices.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Integrity Power Solutions</h4> <!-- Web 3 -->
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="{{asset('asset2/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="https://oscarsolutions-88c08c94412c.herokuapp.com/" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/portfolio/cover.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Mfumbuzi</h4>
                        <p>Mfumbuzi Group Project Slide Deck</p>
                        <div class="portfolio-links">
                            <a href="{{asset('asset2/img/portfolio/cover.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mfumbuzi project slide deck"><i class="bx bx-plus"></i></a>
                            <a href="https://docs.google.com/presentation/d/12r0GC9b3JBy5PfZRWVkG9qb9H3BLAIqWkbS1R8sZ7bI/edit#slide=id.g2599ac2345b_6_75" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/portfolio/bitnine.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Bitnine</h4>
                        <p>Bitnine.net Clone </p>
                        <div class="portfolio-links">
                            <a href="https://bitnine.net/wp-content/uploads/2023/08/bitnine-logo_.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bitnine logo"><i class="bx bx-plus"></i></a>
                            <a href="https://github.com/kevinmugiira/bitnine2" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/portfolio/shot1qs.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Qua Sure</h4> <!-- Web 3 -->
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="{{asset('asset2/img/portfolio/shot4qs.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web App"><i class="bx bx-plus"></i></a>
                            <a href="https://github.com/kevinmugiira/qs" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/goodfind1.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>GoodFind</h4> <!-- Web 3 -->
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="{{asset('asset2/img/goodfind1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web App"><i class="bx bx-plus"></i></a>
                            <a href="https://github.com/kevinmugiira/goodf.git" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-certification">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/aws-certified-cloud-practitioner.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>AWS Cloud Practitioner Certification</h4> <!-- Web 3 -->
                        <p>AWS</p>
                        <div class="portfolio-links">
                            <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="ffcef7e8-1c74-4f47-9a15-0d9e48ffc6f1" data-share-badge-host="https://www.credly.com"></div>
                            <script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                            <a href="{{asset('asset2/img/aws-certified-cloud-practitioner.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="AWS"><i class="bx bx-plus"></i></a>
                            <a href="https://www.credly.com/badges/ffcef7e8-1c74-4f47-9a15-0d9e48ffc6f1/public_url" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-certification">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/icdl.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>International Computer Driving License</h4> <!-- Web 3 -->
                        <p>ICDL</p>
                        <div class="portfolio-links">

                            <a href="{{asset('asset2/img/ICDL cert.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ICDL"><i class="bx bx-plus"></i></a>
                            <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-certification">
                <div class="portfolio-wrap">
                    <img src="{{asset('asset2/img/SoloLearnPHPCertificate.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>PHP</h4> <!-- Web 3 -->
                        <p>PHP</p>
                        <div class="portfolio-links">
                            <a href="{{asset('asset2/img/SoloLearnPHPCertificate.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ICDL"><i class="bx bx-plus"></i></a>
                            <a href="#" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>My Address</h3>
                    <p>Nairobi, Kenya</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                        <a href="https://github.com/kevinmugiira/" class="github"><i class="bi bi-github"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
{{--                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>--}}
                        <a href="https://www.linkedin.com/in/kevin-mugiira-b7a06b128/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>kevinmugiira@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p>+254 710 955 090</p>
                </div>
            </div>
        </div>




        <form action="{{url('send-mail')}}" method="post" enctype="multipart/form-data" role="form" class=" mt-4" >

           @csrf

            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class=" form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class=" form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
{{--                <div class="loading">Loading</div>--}}
                @if(session('sent-message'))
                    <div class= sent-message">Your message has been sent. Thank you!</div>
{{--                  <div class="php-email-form sent-message">{{ session('sent-message') }}</div>--}}
                @else
                    <div class="error-message"></div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit">Send Message</button>
            </div>
        </form>

    </div>
</section><!-- End Contact Section -->

<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="kevinmugiira.com">Kevin Mugiira</a>
</div>


<script>
    const videoPlayer = document.getElementById('video-player');
    const playButton = document.querySelector('.play-button');

    playButton.addEventListener('click', () => {
        if (videoPlayer.paused || videoPlayer.ended) {
            videoPlayer.play();
        } else {
            videoPlayer.pause();
        }
    });
</script>

<!-- Vendor JS Files -->
<script src="asset2/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="asset2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset2/vendor/glightbox/js/glightbox.min.js"></script>
<script src="asset2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="asset2/vendor/swiper/swiper-bundle.min.js"></script>
<script src="asset2/vendor/waypoints/noframework.waypoints.js"></script>
<script src="asset2/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="asset2/js/main.js"></script>

</body>

</html>
