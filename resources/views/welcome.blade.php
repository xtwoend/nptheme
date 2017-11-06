@extends('layouts.app')

@section('content')
    
    @include('partials.slider')
    
    @include('partials.promotion')

    <div class="ps-section--features-product ps-section masonry-root pt-40 pb-80">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="features">- New Product</h3>
            <ul class="ps-masonry__filter">
              <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
              <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
              <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
              <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
              <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
              <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
            </ul>
          </div>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <div class="ps-badge"><span>New</span></div>
                        <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/1.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                            <del>£220</del> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item nike">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/2.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item adidas">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/3.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/4.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                            <del>£220</del> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item men">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/5.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item women">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/6.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/7.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/clothes/8.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/clothes/1.jpg" alt=""><img src="images/clothes/2.jpg" alt=""><img src="images/clothes/3.jpg" alt=""><img src="images/clothes/4.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    @include('partials.hotdeal')
    
    <div class="ps-home-testimonial bg--parallax pb-80" data-background="images/background/parallax.jpg">
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/testimonial/1.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/testimonial/2.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/testimonial/3.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
          </div>
        </div>
      </div>

      @include('partials.news')

      
@endsection