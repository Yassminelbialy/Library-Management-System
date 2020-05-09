@extends('layouts.app')

@section('content')

<header>
    <div class="container-fluid p-0">
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-7 col-sm-12 text-white" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                <h6>AUTHOR: Ahmed Said</h6>
                <h1>EXCITING ADVENTURE</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                    accusamus eum dignissimos ipsa sequi expedita.
                </p>
                <a href="{{route('books.index')}}" class="btn btn-light px-5 py-2 primary-btn">
                    By now
                </a>
            </div>
            <div class="col-md-5 col-sm-12 h-25">
                <img data-aos="fade-left" data-aos-duration="1000" src="images/header-img.png" alt="Book" />
            </div>
        </div>
    </div>
</header>

<section class="section-1" style="background: white">
    <div class="container text-center" data-aos="flip-right" data-aos-duration="2000">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="pray">
                    <img src="images/pexels-photo-1904769.jpeg" alt="Pray" />
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="panel text-left">
                    <h1>Mrs. Asmaa Alaa</h1>
                    <p class="pt-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Facere iure adipisci harum ducimus accusantium, repudiandae
                        aperiam voluptatum, id ex ratione omnis reiciendis possimus
                        officiis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Commodi vitae, tenetur quidem eum aliquid vel labore sint
                        placeat ad deserunt consectetur fugit ullam. Eius unde neque
                        ducimus obcaecati ipsum quos vero totam recusandae hic
                        expedita nemo sit, illum harum. Quisquam impedit ullam itaque
                        facere et ad molestiae quod reprehenderit excepturi!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-2 container-fluid p-0" style="background: white">
    <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
            <h1>Some Features That Made Us Unique</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                eum?
            </p>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
            <div class="rect" data-aos="fade-up" data-aos-duration="1000">
                <h1>2345</h1>
                <p>Client</p>
            </div>
            <div class="rect" data-aos-duration="1000">
                <h1>6784</h1>
                <p>Borrowing</p>
            </div>
            <div class="rect" data-aos="fade-down" data-aos-duration="1000">
                <h1>9152</h1>
                <p>Total Books</p>
            </div>
        </div>
    </div>

    <div class="purchase text-center">
        <h1>Borrowing Whatever You Want</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="cards" data-aos="zoom-in-up" data-aos-duration="1500">
            <div class="d-flex flex-row justify-content-center flex-wrap">
                <div class="card">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">PDF</h5>
                        </div>
                        <p class="card-text">
                            With supporting text below as a natural lead-in.
                        </p>
                        <div class="pricing">
                            <h1>$77.99</h1>
                            <a href="{{route('books.index')}}" class="btn btn-light px-5 py-2 primary-btn mb-5">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">E-book</h5>
                        </div>
                        <p class="card-text">
                            With supporting text below as a natural lead-in.
                        </p>
                        <div class="pricing">
                            <h1>$99.99</h1>
                            <a href="{{route('books.index')}}" class="btn btn-light px-5 py-2 primary-btn mb-5">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">Print Copy</h5>
                        </div>
                        <p class="card-text">
                            With supporting text below as a natural lead-in.
                        </p>
                        <div class="pricing">
                            <h1>$58.99</h1>
                            <a href="{{route('books.index')}}" class="btn btn-light px-5 py-2 primary-btn mb-5">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-3 container-fluid p-0 text-center" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine" data-aos-duration="1000" >
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1>Download Our App for all Platform</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum
                exercitationem alias perspiciatis omnis quod possimus odit
                voluptatum! Sunt ea quasi praesentium, tenetur doloribus animi
                obcaecati, sint nemo quae laudantium iusto unde eaque nostrum
                nobis voluptatum
            </p>
        </div>
    </div>
    <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
            <div class="desktop shadow-lg">
                <div class="d-flex flex-row justify-content-center">
                    <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
                    <div class="text text-left">
                        <h3 class="pt-1 m-0">Desktop</h3>
                        <p class="p-0 m-0">On website</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
            <div class="desktop shadow-lg">
                <div class="d-flex flex-row justify-content-center">
                    <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
                    <div class="text text-left">
                        <h3 class="pt-1 m-0">On Mobile</h3>
                        <p class="p-0 m-0">On Play Store</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 -->
<section class="section-4" style="background: white">
    <div class="container text-center">
        <h1 class="text-dark">What our Reader's Say about us</h1>
        <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="team row">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                    <img src="images/eslam.jfif" class="img-fluid border-radius p-4" alt="" />
                </div>
                <div class="card-body">
                    <h3 class="card-title">Blalock Jolene</h3>
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        iure autem recusandae, veniam, illo dolor soluta assumenda
                        minima quia velit officia sit exercitationem nam ipsa,
                        repellendus aut facilis quasi voluptas!
                    </p>

                    <p class="">Back-end Developer</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="card mr-2 d-inline-block shadow">
                            <div class="card-img-top">
                                <img src="images/eslam_taher.jfif" class="img-fluid rounded-circle w-50 p-4" alt="" />
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Eslam Taher</h3>
                                <p class="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sint iure autem recusandae, veniam, illo dolor soluta
                                    assumenda minima quia velit officia sit exercitationem
                                    nam ipsa, repellendus aut facilis quasi voluptas!
                                </p>

                                <p class="">Devops</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card d-inline-block mr-2 shadow">
                            <div class="card-img-top">
                                <img src="images/esraa.jfif" class="img-fluid rounded-circle w-50 p-4" alt="" />
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Esraa Abl Elazeez</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sint iure autem recusandae, veniam, illo dolor soluta
                                    assumenda minima quia velit officia sit exercitationem
                                    nam ipsa, repellendus aut facilis quasi voluptas!
                                </p>

                                <p class="">CEO at Google</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card d-inline-block mr-2 shadow">
                            <div class="card-img-top">
                                <img src="images/aness.jfif" class="img-fluid rounded-circle w-50 p-4" alt="" />
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Mohamed Anees</h3>
                                <p class="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sint iure autem recusandae, veniam, illo dolor soluta
                                    assumenda minima quia velit officia sit exercitationem
                                    nam ipsa, repellendus aut facilis quasi voluptas!
                                </p>

                                <p class="">linux Adminstration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                    <img src="images/mariam.jfif" class="img-fluid border-radius p-4" alt="" />
                </div>
                <div class="card-body">
                    <h3 class="card-title">Mariam Elfeky</h3>
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        iure autem recusandae, veniam, illo dolor soluta assumenda
                        minima quia velit officia sit exercitationem nam ipsa,
                        repellendus aut facilis quasi voluptas!
                    </p>

                    <p class="">Full Stack Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
