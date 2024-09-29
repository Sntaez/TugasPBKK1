@extends('app')
@section('content2')
    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Project Design</h2>
                                    <p>This is a design created to welcome new students, which will be uploaded on the
                                        official Instagram of
                                        HIMATIF UNIB (Student Association of Informatics Engineering, University of
                                        Bengkulu).
                                        The design aims to convey a warm and vibrant atmosphere, inviting the new students
                                        into the university
                                        community and making them feel excited about their journey in the world of computer
                                        science.</p>
                                </div>
                                <img class="img-fluid" src="assets/Project1.png" w-300 h-400 alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Project Photographer</h2>
                                    <p>This is a photo I captured, showcasing my skills in photography.
                                        The image highlights attention to detail, lighting,
                                        and composition, aiming to create a visually appealing and professional result.</p>
                                </div>
                                <img class="img-fluid" src="assets/Project3.JPG" w-300 h-400 alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 3-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Project Development</h2>
                                    <p>This is a web project to convert temperatures between different units.
                                        The project allows users to easily switch between Celsius, Fahrenheit, and Kelvin,
                                        providing a simple and user-friendly interface for accurate temperature conversion.
                                    </p>
                                </div>
                                <img class="img-fluid" src="assets/Project2.png" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            </div>
        </div>
    </section>
@endsection
