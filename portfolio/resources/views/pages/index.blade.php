@extends('layouts.master')
@section('content')
    <div class="container">
        {{-- about --}}

        <header class="masthead text-white text-center">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-xl-9 mx-auto">
                        @foreach ($cv as $c)
                        <div class="pull-right">

                        <img width="100%" src="/storage/cover_image/{{$c->img}}" class="myimg rounded-circle" alt="">
                            <p class="mb-5">
                                  
                                      {{ $c->presentation }}                                      
                                 
                            </p>
                        </div>
                        @endforeach
                    </div>
                   
                  </div>
                </div>
        </header>

            {{-- Formation --}}
        <section class="features-icons bg-light text-center">
                <div class="container">
                    <h3 class="alert alert-success">Formation</h3>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                              <div class="features-icons-icon d-flex">
                                <i class="icon-screen-desktop m-auto text-primary"></i>
                              </div>
                              <h3>Fully Responsive</h3>
                              <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                              <div class="features-icons-icon d-flex">
                                <i class="icon-layers m-auto text-primary"></i>
                              </div>
                              <h3>Bootstrap 4 Ready</h3>
                              <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                              <div class="features-icons-icon d-flex">
                                <i class="icon-check m-auto text-primary"></i>
                              </div>
                              <h3>Easy to Use</h3>
                              <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                            </div>
                          </div>
                        </div>
                      </div>
        </section>
        {{-- exp --}}
        <section class="showcase">
                <div class="container-fluid p-0 text-center">
                  <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="alert alert-primary" role="alert"><strong>Exp 1 <small>12-12-1992 to 14-12-1992</small></strong></div>
                               <p class="jumbotron">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, soluta facere? Laudantium, perspiciatis. Quibusdam numquam, saepe alias quos nam impedit minima iure aspernatur quisquam libero non natus fugiat? Vel, quam.</p>
                                
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="alert alert-primary" role="alert"><strong>Exp 1 <small>12-12-1992 to 14-12-1992</small></strong></div>
                               <p class="jumbotron">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, soluta facere? Laudantium, perspiciatis. Quibusdam numquam, saepe alias quos nam impedit minima iure aspernatur quisquam libero non natus fugiat? Vel, quam.</p>
                                
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="alert alert-primary" role="alert"><strong>Exp 1 <small>12-12-1992 to 14-12-1992</small></strong></div>
                               <p class="jumbotron">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, soluta facere? Laudantium, perspiciatis. Quibusdam numquam, saepe alias quos nam impedit minima iure aspernatur quisquam libero non natus fugiat? Vel, quam.</p>
                                
                            </div>
                    </div>
                   
                </div>
        </section>


    </div>
    {{-- contact --}}
     <!-- Footer -->
     <footer class="footer bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                      <strong>N.Phone</strong>
                      <small>06060606</small>
                    </li>
                    <li class="list-inline-item">
                            <strong>Email</strong>
                            <small>youssef@gmail.com</small>
                    </li>
                  </ul>
                  <p class="text-muted small mb-4 mb-lg-0">&copy; Youssef Ouhamane 2018.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                      <a href="#">
                        <i class="fa fa-facebook fa-2x fa-fw"></i>
                      </a>
                    </li>
                    <li class="list-inline-item mr-3">
                      <a href="#">
                        <i class="fa fa-twitter-square fa-2x fa-fw"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram fa-2x fa-fw"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
@endsection