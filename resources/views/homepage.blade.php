@extends('layouts.tempHome')

@section('judul')
Home
@endsection

@section('main')

<!-- ======= Testimonials Section ======= -->
<div class="testimonials paralax-mf bg-image" style="background-image: url(template/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="swiper-slide" href="{{url('/Danendra')}}">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="template/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Danendra Gavrilla</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 2 -->
            <div class="swiper-slide" href="{{url('/Fahrizal')}}">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="template/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Fahrizal Mudzaki Maulana</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    JINGKONTOT
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- Testimonial 3 -->
            <div class="swiper-slide" href="{{url('/Faras')}}">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="template/img/faras.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Faras Rama Mahadika</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Testimonials Section -->


@endsection