@extends('layout.front_layout')

@section('title','Owister Group | Beranda')

@section('content')
<section class="wrapper bg-light">
      <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing el.</h1>
            <p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10">Nulla ligula justo, tempor eget nunc in, laoreet finibus purus.</p>
            <div>
              <a class="btn btn-lg btn-primary rounded mb-5">Read More</a>
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-dark">
      <div class="container py-14 py-md-16">
        <figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="./assets/img/photos/about15.jpg" srcset="./assets/img/photos/about15@2x.jpg 2x" alt="" /></figure>
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h3 class="display-4 text-white mb-10">Nunc a aliquam nibh.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 text-center text-white" data-cues="slideInDown" data-group="services">
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-phone-volume"></i> </div>
            <h4 class="text-white">justo et orci volutpat</h4>
            <p class="mb-3"> Sed bibendum tempor mattis. Morbi luctus justo et orci volutpat iaculis.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-shield-exclamation"></i> </div>
            <h4 class="text-white">auctor fringilla</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-laptop-cloud"></i> </div>
            <h4 class="text-white">magna mollis</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-chart-line"></i> </div>
            <h4 class="text-white">ullamcorper nulla</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-17">
          <div class="col-lg-6 order-lg-2">
            <div class="row gx-md-5 gy-5 position-relative">
              <div class="col-5">
                <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="./assets/img/photos/sa9.jpg" srcset="./assets/img/photos/sa9@2x.jpg 2x" alt="" />
                <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600" src="./assets/img/photos/sa10.jpg" srcset="./assets/img/photos/sa10@2x.jpg 2x" alt="" />
              </div>
              <!-- /column -->
              <div class="col-7">
                <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900" src="./assets/img/photos/sa11.jpg" srcset="./assets/img/photos/sa11@2x.jpg 2x" alt="" />
                <img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200" src="./assets/img/photos/sa12.jpg" srcset="./assets/img/photos/sa12@2x.jpg 2x" alt="" />
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5">Curabitur luctus mattis mi, et sodales ex hendrerit sed.</h3>
            <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas odio.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5 position-relative align-items-center">
              <div class="col-6">
                <img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="./assets/img/photos/sa13.jpg" srcset="./assets/img/photos/sa13@2x.jpg 2x" alt="" />
              </div>
              <!-- /column -->
              <div class="col-6">
                <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900" src="./assets/img/photos/sa14.jpg" srcset="./assets/img/photos/sa14@2x.jpg 2x" alt="" />
                <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200" src="./assets/img/photos/sa15.jpg" srcset="./assets/img/photos/sa15@2x.jpg 2x" alt="" />
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5">urabitur nec turpis non urna tristique congue eget a purus.</h3>
            <p class="mb-5">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas odio.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-dark">
      <div class="container py-14 pt-md-17 pb-md-21">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 text-white align-items-center">
          <div class="col-lg-4">
            <h3 class="display-4 text-white mb-3 pe-xxl-15">Pellentesque eleifend ipsum</h3>
            <p class="lead fs-lg mb-0 pe-xxl-10">Sed congue lectus non purus varius accumsan.</p>
          </div>
          <!-- /column -->
          <div class="col-lg-8 mt-lg-2">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-4">
                <h3 class="counter counter-lg text-white">1000+</h3>
                <p>Completed Projects</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter counter-lg text-white">500+</h3>
                <p>Happy Clients</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <h3 class="counter counter-lg text-white">150+</h3>
                <p>Awards Won</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-16 py-md-18">
        <div class="card shadow-lg mt-n18 mt-md-n23 mb-14 mb-md-18" data-cue="slideInDown">
          <div class="row gx-0">
            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="./assets/img/photos/tm1.jpg">
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <div class="p-10 p-md-11 p-lg-13">
                <div class="basic-slider owl-carousel gap-small" data-margin="30">
                  <div class="item">
                    <blockquote class="icon icon-top fs-lg text-center">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                      <div class="blockquote-details justify-content-center text-center">
                        <div class="info ps-0">
                          <h5 class="mb-1">Coriss Ambady</h5>
                          <p class="mb-0">Financial Analyst</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- /.item -->
                  <div class="item">
                    <blockquote class="icon icon-top fs-lg text-center">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                      <div class="blockquote-details justify-content-center text-center">
                        <div class="info ps-0">
                          <h5 class="mb-1">Cory Zamora</h5>
                          <p class="mb-0">Marketing Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- /.item -->
                  <div class="item">
                    <blockquote class="icon icon-top fs-lg text-center">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                      <div class="blockquote-details justify-content-center text-center">
                        <div class="info ps-0">
                          <h5 class="mb-1">Nikolas Brooten</h5>
                          <p class="mb-0">Sales Manager</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
              </div>
              <!--/div -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.card -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-12 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="row gx-md-5 gy-5 align-items-center">
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-10 offset-md-2" data-cue="fadeIn" data-delay="300">
                    <figure class="rounded"><img src="./assets/img/photos/ab1.jpg" srcset="./assets/img/photos/ab1@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-12" data-cue="fadeIn" data-delay="900">
                    <figure class="rounded"><img src="./assets/img/photos/ab2.jpg" srcset="./assets/img/photos/ab2@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
              <div class="col-md-6" data-cue="fadeIn" data-delay="600">
                <figure class="rounded"><img src="./assets/img/photos/ab3.jpg" srcset="./assets/img/photos/ab3@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-4 mb-3">In nunc neque?</h2>
            <p class="lead fs-lg">Aliquam in nisl risus. Suspendisse quis augue velit. Morbi lacinia, nibh.</p>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-18">
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span class="number fs-18">1</span> </div>
              </div>
              <div>
                <h4>Our Vision</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span class="number fs-18">2</span> </div>
              </div>
              <div>
                <h4>Our Mission</h4>
                <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet. Sed posuere consectetur.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span class="number fs-18">3</span> </div>
              </div>
              <div>
                <h4>Our Values</h4>
                <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna scelerisque.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-10 mb-md-14 align-items-center">
          <div class="col-lg-7 position-relative">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <figure class="rounded mt-md-10 position-relative" data-cue="fadeIn" data-delay="300"><img src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded" data-cue="fadeIn" data-delay="1100"><img src="./assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-10">
                    <div class="card bg-pale-primary text-center" data-cue="fadeIn" data-delay="800">
                      <div class="card-body py-11 counter-wrapper">
                        <h3 class="counter text-nowrap">5000+</h3>
                        <p class="mb-0">Satisfied Customers</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card --> 
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->  
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="display-4 mb-3">pulvinar lacus</h2>
            <p class="lead fs-lg">ultrices tristique tempus, mauris sapien placerat tellus, vitae blandit justo magna nec libero. Praesent sed pulvinar lacus. Etiam volutpat.</p>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a href="#" class="btn btn-primary rounded mt-2">Join Us</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="px-lg-5">
          <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c1.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c2.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c3.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c4.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c5.png" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-4 col-md-2">
              <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/img/brands/c6.png" alt="" /></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /div -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection