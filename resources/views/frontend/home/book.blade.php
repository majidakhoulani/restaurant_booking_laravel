<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                <form action="{{route('user.reserve')}}" method="post" class="appointment-form">
                    @csrf
                    <h3 class="mb-3">Book your Table</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                    <input type="text" name="date" class="form-control book_date" placeholder="Check-In">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                                    <input type="text" name="time" class="form-control book_time" placeholder="Time">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        {{-- <select name="guest" id="" class="form-control">
                                            <option value="">Guest</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select> --}}
                                        <input type="number" name="guest" class="form-control" placeholder="guest number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
                <div class="row pb-5 pb-md-0">
                    <div class="col-md-12 col-lg-7">
                        <div class="heading-section mt-5 mb-4">
                            <div class="pl-lg-3 ml-md-5">
                                <span class="subheading">About</span>
                                <h2 class="mb-4">Welcome to Taste.it</h2>
                            </div>
                        </div>
                        <div class="pl-lg-3 ml-md-5">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-intro" style="background-image: url('{{asset('backend/assets/images/bg_3.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span>Now Booking</span>
                <h2>Private Dinners &amp; Happy Hours</h2>
            </div>
        </div>
    </div>
</section>

