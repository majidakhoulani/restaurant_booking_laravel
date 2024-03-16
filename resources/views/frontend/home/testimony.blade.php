
<section class="ftco-section testimony-section" style="background-image: url({{asset('backend/assets/images/bg_5.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
        </div>
        @php
              $testimonials = App\Models\Testimonial::limit(3)->get();
        @endphp
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach ( $testimonials as $item)
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">{{$item->testimonial_tweet}}.</p>
                                <div class="user-img mb-4" style="background-image: url('{{$item->testimonial_tweeter_image}}')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">{{$item->testimonial_tweeter_name}}</p>
                                <span class="position">{{$item->testimonial_tweeter_position}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
