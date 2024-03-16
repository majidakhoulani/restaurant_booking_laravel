<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
                <h2 class="mb-4">Our Master Chef</h2>
            </div>
        </div>
        <div class="row">
            @php
            $chefs = App\Models\Chef::limit(4)->get();
            @endphp
            @foreach ( $chefs  as  $chef )
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url('{{$chef->chef_image}}');"></div>
                    <div class="text px-4 pt-2">
                        <h3>{{$chef->chef_name}}</h3>
                        <span class="position mb-2">{{$chef->chef_position}}</span>
                        <div class="faded">
                            <p>{{$chef->chef_info}}</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
