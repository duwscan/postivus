<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Positivus</title>
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}"/>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"
            ><img src="/assets/brand.svg" alt="Logo" class="navbar-brand"/>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="material-icons">menu</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">About us</a>
                    <a class="nav-link" href="#service">Services</a>
                    <a class="nav-link" href="#case-studies">Use Cases</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link active" href="#">Request a quote</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="header d-grid mt-md-5">
        <h1 class="u-h1 fw-bold text-start">
            Navigating the digital landscape for success
        </h1>
        <img src="/assets/speaker.png" class="header-img"/>
        <p class="u-p">
            Our digital marketing agency helps businesses grow and succeed online
            through a range of services including SEO, PPC, social media
            marketing, and content creation.
        </p>
        <button class="btn u-bg-dark u-grey">Book a consultation</button>
    </div>
    <div id="service" class="my-5">
        <div class="row g-2 mb-lg-4">
            <div class="col-md-6 col-lg-2">
                <h2 class="u-h2 text-center fw-bold u-bg-green">Services</h2>
            </div>
            <div class="col-md-6 col-lg-6">
                <p class="u-p text-start">
                    At our digital marketing agency, we offer a range of services to
                    help businesses grow and succeed online. These services include:
                </p>
            </div>
        </div>
        <div class="row g-4 g-sm-5">
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-grey" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-green">
                                    Search engine
                                </div>
                                <div class="service-label-text u-bg-green">
                                    optimization
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/search-engine.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-primary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2">Learn more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-green" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-grey">
                                    Pay-per-click
                                </div>
                                <div class="service-label-text u-bg-grey">advertising</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/search-engine.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-primary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2">Learn more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-black" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-grey">Social Media</div>
                                <div class="service-label-text u-bg-grey">Marketing</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/social.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-secondary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2 text-white">
                                Learn more
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-grey" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-green">Email</div>
                                <div class="service-label-text u-bg-green">Marketing</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/search-engine.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-primary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2">Learn more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-green" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-grey">Content</div>
                                <div class="service-label-text u-bg-grey">Creation</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/search-engine.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-primary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2">Learn more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card u-bg-black" style="width: 100%">
                    <div class="row g-2 m-5 m-md-5">
                        <div class="col-md-12 col-xl-6">
                            <div class="service-label">
                                <div class="service-label-text u-bg-grey">
                                    Analytics and
                                </div>
                                <div class="service-label-text u-bg-grey">Tracking</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 d-flex justify-content-end">
                            <img src="assets/social.svg" alt=""/>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                  <span class="material-icons service-link-secondary"
                  >arrow_outward</span
                  >
                            <p class="u-h4 d-md-block d-none m-0 mx-2 text-white">
                                Learn more
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta u-bg-grey my-5">
        <div class="p-5 position-relative">
            <h3 class="u-h3 fw-bold">Let’s make things happen</h3>
            <p class="u-p w-50 my-3">
                Contact us today to learn more about how our digital marketing
                services can help your business grow and succeed online.
            </p>
            <button class="btn u-bg-dark u-grey">Get your free proposal</button>
            <img
                src="/assets/Frame 19.png"
                class="cta-image position-absolute d-none d-md-block"
            />
        </div>
    </div>
    <div id="case-studies" class="py-5">
        <div class="row g-2 mb-lg-4">
            <div class="col-md-6 col-lg-3">
                <h2 class="u-h2 text-center fw-bold u-bg-green">Case Studies</h2>
            </div>
            <div class="col-md-6 col-lg-5">
                <p class="u-p text-start">
                    Explore Real-Life Examples of Our Proven Digital Marketing Success
                    through Our Case Studies
                </p>
            </div>
        </div>
        <div class="row case-studies-exp py-5 u-bg-dark">
            <div class="col px-5">
                <div class="">
                    <p class="u-h4 text-white mb-4">
                        For a local restaurant, we implemented a targeted PPC campaign
                        that resulted in a 50% increase in website traffic and a 25%
                        increase in sales.
                    </p>
                    <div class="d-flex align-items-center">
                        <span class="material-icons u-green">arrow_outward</span>
                        <p class="u-h4 d-md-block d-none m-0 mx-2 u-green">
                            Learn more
                        </p>
                    </div>
                </div>
            </div>
            <div class="col px-5 u-border-inline">
                <div class="">
                    <p class="u-h4 text-white mb-4">
                        For a local restaurant, we implemented a targeted PPC campaign
                        that resulted in a 50% increase in website traffic and a 25%
                        increase in sales.
                    </p>
                    <div class="d-flex align-items-center">
                        <span class="material-icons u-green">arrow_outward</span>
                        <p class="u-h4 d-md-block d-none m-0 mx-2 u-green">
                            Learn more
                        </p>
                    </div>
                </div>
            </div>
            <div class="col px-5">
                <div class="">
                    <p class="u-h4 text-white mb-4">
                        For a local restaurant, we implemented a targeted PPC campaign
                        that resulted in a 50% increase in website traffic and a 25%
                        increase in sales.
                    </p>
                    <div class="d-flex align-items-center">
                        <span class="material-icons u-green">arrow_outward</span>
                        <p class="u-h4 d-md-block d-none m-0 mx-2 u-green">
                            Learn more
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="working-process" class="my-5">
        <div class="row g-2 mb-lg-4">
            <div class="col-md-6 col-lg-4">
                <h2 class="u-h2 text-center fw-bold u-bg-green">
                    Our Working Process
                </h2>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="u-p text-start">
                    Step-by-Step Guide to Achieving Your Business Goals
                </p>
            </div>
        </div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingOne">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="false"
                            aria-controls="collapseOne"
                        >
                            <span class="u-h1">01</span>
                            <span class="u-h4 mx-4">Initial Consultation</span>
                        </button>
                    </h2>
                    <div
                        id="collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingTwo">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo"
                        >
                            <span class="u-h1">02</span>
                            <span class="u-h4 px-4"
                            >Research and Strategy Development</span
                            >
                        </button>
                    </h2>
                    <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                        >
                            <span class="u-h1">03</span>
                            <span class="u-h4 px-4">Implementation</span>
                        </button>
                    </h2>
                    <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingFour">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour"
                            aria-expanded="false"
                            aria-controls="collapseFour"
                        >
                            <span class="u-h1">04</span>
                            <span class="u-h4 px-4">Monitoring and Optimization</span>
                        </button>
                    </h2>
                    <div
                        id="collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFour"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingFive">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFive"
                            aria-expanded="false"
                            aria-controls="collapseFive"
                        >
                            <span class="u-h1">05</span>
                            <span class="u-h4 px-4">Reporting and Communication</span>
                        </button>
                    </h2>
                    <div
                        id="collapseFive"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFive"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item px-2 px-sm-5">
                    <h2 class="accordion-header" id="headingSix">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseSix"
                            aria-expanded="false"
                            aria-controls="collapseSix"
                        >
                            <span class="u-h1">06</span>
                            <span class="u-h4 px-4">Continual Improvement</span>
                        </button>
                    </h2>
                    <div
                        id="collapseSix"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSix"
                    >
                        <div class="accordion-body">
                            During the initial consultation, we will discuss your business
                            goals and objectives, target audience, and current marketing
                            efforts. This will allow us to understand your needs and
                            tailor our services to best fit your requirements.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-us" class="my-5">
        <div class="row g-2 mb-lg-4 py-5">
            <div class="col-md-6 col-lg-3">
                <h2 class="u-h2 text-center fw-bold u-bg-green">Contact Us</h2>
            </div>
            <div class="col-md-6 col-lg-4">
                <p class="u-p text-start">
                    Connect with Us: Let's Discuss Your Digital Marketing Needs
                </p>
            </div>
        </div>
        <div class="u-bg-grey p-5 contact-us-form">
            <div class="d-flex justify-content-center row">
                <div class="col-md-6">
                    <form id="email-form" action="{{url('send')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Name"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                name="email"
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Email"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="phone"
                                placeholder="Phone"
                            />
                        </div>
                        <div class="mb-3">
                  <textarea
                      class="form-control"
                      id="message"
                      rows="3"
                      placeholder="Message"
                  ></textarea>
                        </div>
                        <button type="submit" class="btn u-bg-dark u-grey">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer w-100">
        <div class="container p-5">
            <div class="row">
                <img
                    class="col-md-2 col-12"
                    src="/assets/brand-white.svg"
                    alt="Logo"
                    class="navbar-brand"
                />
                <div
                    class="col-md-10 col-12 d-flex align-items-center justify-content-around flex-wrap mt-md-0 mt-3"
                >
                    <div class="text-white u-p">About us</div>
                    <div class="text-white u-p">About us</div>
                    <div class="text-white u-p">About us</div>
                    <div class="text-white u-p">About us</div>
                    <div class="text-white u-p">About us</div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-5 col-12 text-white">
                    <p
                        class="u-bg-green u-h4 text-dark"
                        style="
                  width: fit-content;
                  border-radius: 0.5rem;
                  padding-inline: 0.5rem;
                "
                    >
                        Contact us:
                    </p>
                    <div class="u-p">Email: info@positivus.com</div>
                    <div class="u-p">Phone: 555-567-8901</div>
                    <div class="u-p">
                        Address: 1234 Main St Moonstone City, Stardust State 12345
                    </div>
                </div>
            </div>
            <div class="row mt-4 border-top">
                <div class="mt-5 text-white">© 2024 Positivus. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/assets/main.js"></script>
</body>
</html>
