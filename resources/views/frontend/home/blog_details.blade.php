<section class="ftco-section">
    <div class="container">
     <div class="row">
       <div class="col-lg-8 ftco-animate">
         <h2 class="mb-3">#1. {{$post->post_title}}</h2>
         <p> {{$post->post_description}}</p>
         <p>
           <img src="{{asset($post->post_image)}}" alt="" class="img-fluid" width="690px">
         </p>
         <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
         <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
         <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
         <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
         <div class="tag-widget post-tag-container mb-5 mt-5">
           <div class="tagcloud">
            @foreach ($tags_all as $tag)
            <a href="#" class="tag-cloud-link">{{ ucwords($tag) }}</a>
            @endforeach

             {{-- <a href="#" class="tag-cloud-link">Wine</a>
             <a href="#" class="tag-cloud-link">Drink</a>
             <a href="#" class="tag-cloud-link">Dish</a> --}}
           </div>
         </div>

         <div class="about-author d-flex p-4 bg-light">
           <div class="bio mr-5">
             <img src="{{asset('frontend/assets/images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
           </div>
           <div class="desc">
             <h3>{{$post->post_auther}}</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
           </div>
         </div>


         <div class="pt-5 mt-5">
           <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">07 Feedbacks</h3>
           <ul class="comment-list">
             <li class="comment">
               <div class="vcard bio">
                 <img src="images/person_1.jpg" alt="Image placeholder">
               </div>
               <div class="comment-body">
                 <h3>John Doe</h3>
                 {{-- {{ Carbon\Carbon::parse($rep->created_at)->diffForHumans() }} --}}
                 <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                 <p><a href="#" class="reply">Reply</a></p>
               </div>
             </li>

             <li class="comment">
               <div class="vcard bio">
                 <img src="images/person_1.jpg" alt="Image placeholder">
               </div>
               <div class="comment-body">
                 <h3>John Doe</h3>
                 <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                 <p><a href="#" class="reply">Reply</a></p>
               </div>

               <ul class="children">
                 <li class="comment">
                   <div class="vcard bio">
                     <img src="images/person_1.jpg" alt="Image placeholder">
                   </div>
                   <div class="comment-body">
                     <h3>John Doe</h3>
                     <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                     <p><a href="#" class="reply">Reply</a></p>
                   </div>


                   <ul class="children">
                     <li class="comment">
                       <div class="vcard bio">
                         <img src="images/person_1.jpg" alt="Image placeholder">
                       </div>
                       <div class="comment-body">
                         <h3>John Doe</h3>
                         <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                         <p><a href="#" class="reply">Reply</a></p>
                       </div>

                       <ul class="children">
                         <li class="comment">
                           <div class="vcard bio">
                             <img src="images/person_1.jpg" alt="Image placeholder">
                           </div>
                           <div class="comment-body">
                             <h3>John Doe</h3>
                             <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                             <p><a href="#" class="reply">Reply</a></p>
                           </div>
                         </li>
                       </ul>
                     </li>
                   </ul>
                 </li>
               </ul>
             </li>

             <li class="comment">
               <div class="vcard bio">
                 <img src="images/person_1.jpg" alt="Image placeholder">
               </div>
               <div class="comment-body">
                 <h3>John Doe</h3>
                 <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                 <p><a href="#" class="reply">Reply</a></p>
               </div>
             </li>
           </ul>
           <!-- END comment-list -->

           <div class="comment-form-wrap pt-5">
             <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Leave a comment</h3>
             {{-- {{route('user.add.comment',$post->id)}} --}}
             <form action="#" class="p-4 p-md-5 bg-light" method="POST" action="{{route('user.add.comment')}}">
                @csrf
                <input type="hidden" name="post_id" class="form-control" id="name" value="{{$post->id}}">
               <div class="form-group">
                 <label for="name">Name *</label>
                 <input type="text" name="publicher_name" class="form-control" id="name">
               </div>
               <div class="form-group">
                 <label for="email">Email *</label>
                 <input type="email"  name="publicher_email" class="form-control" id="email">
               </div>
               {{-- <div class="form-group">
                 <label for="website">Website</label>
                 <input type="url" class="form-control" id="website">
               </div> --}}

               <div class="form-group">
                 <label for="message">Message</label>
                 <textarea name="comment_content" id="message" cols="30" rows="10" class="form-control"></textarea>
               </div>
               <div class="form-group">
                 <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
               </div>

             </form>
           </div>
         </div>
       </div> <!-- .col-md-8 -->

       <div class="col-lg-4 sidebar ftco-animate">
         <div class="sidebar-box">
           <form action="#" class="search-form">
             <div class="form-group">
               <span class="icon icon-search"></span>
               <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
             </div>
           </form>
         </div>
         <div class="sidebar-box ftco-animate">
          <h3>Category</h3>
          <ul class="categories">
            @foreach ($blogcategories as $category )
            <li><a href="#">{{ $category->blog_category_name}} <span>(6)</span></a></li>
            @endforeach
           {{-- <li><a href="#">Breakfast <span>(6)</span></a></li>
           <li><a href="#">Lunch <span>(8)</span></a></li>
           <li><a href="#">Dinner <span>(2)</span></a></li>
           <li><a href="#">Desserts <span>(2)</span></a></li>
           <li><a href="#">Drinks <span>(2)</span></a></li>
           <li><a href="#">Wine <span>(2)</span></a></li> --}}
         </ul>
       </div>

       <div class="sidebar-box ftco-animate">
         <h3>Popular Articles</h3>
         <div class="block-21 mb-4 d-flex">
           <a class="blog-img mr-4" style="background-image: url('{{asset('frontend/assets/images/image_1.jpg')}}');"></a>
           <div class="text">
             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
             <div class="meta">
               <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
               <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
               <div><a href="#"><span class="icon-chat"></span> 19</a></div>
             </div>
           </div>
         </div>
         <div class="block-21 mb-4 d-flex">
           <a class="blog-img mr-4" style="background-image: url('{{asset('frontend/assets/images/image_2.jpg')}}');"></a>
           <div class="text">
             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
             <div class="meta">
               <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
               <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
               <div><a href="#"><span class="icon-chat"></span> 19</a></div>
             </div>
           </div>
         </div>
         <div class="block-21 mb-4 d-flex">
           <a class="blog-img mr-4" style="background-image: url('{{asset('frontend/assets/images/image_3.jpg')}}');"></a>
           <div class="text">
             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
             <div class="meta">
               <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
               <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
               <div><a href="#"><span class="icon-chat"></span> 19</a></div>
             </div>
           </div>
         </div>
       </div>

       <div class="sidebar-box ftco-animate">
         <h3>Tag Cloud</h3>
         <ul class="tagcloud m-0 p-0">
           <a href="#" class="tag-cloud-link">Dish</a>
           <a href="#" class="tag-cloud-link">Food</a>
           <a href="#" class="tag-cloud-link">Lunch</a>
           <a href="#" class="tag-cloud-link">Menu</a>
           <a href="#" class="tag-cloud-link">Dessert</a>
           <a href="#" class="tag-cloud-link">Drinks</a>
           <a href="#" class="tag-cloud-link">Sweets</a>
         </ul>
       </div>

       <div class="sidebar-box ftco-animate">
        <h3>Archives</h3>
        <ul class="categories">
          <li><a href="#">January 2020 <span>(20)</span></a></li>
          <li><a href="#">February 2020 <span>(30)</span></a></li>
          <li><a href="#">March 2020 <span>(20)</span></a></li>
          <li><a href="#">April 2020 <span>(6)</span></a></li>
          <li><a href="#">May 2020 <span>(8)</span></a></li>
        </ul>
      </div>


      <div class="sidebar-box ftco-animate">
       <h3>Paragraph</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
     </div>
   </div><!-- END COL -->
   </div>
   </div>
   </section>
