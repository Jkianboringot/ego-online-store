<x-app-layout title='Home Page'>
  <!-- an extends 
  and section at the same time -->



  <section class="hero-slider">
    <div class="hero-slides">
      <!-- Item 1 -->
      <div class="hero-slide">
        <div class="container">
          <div class="slide-content">
            <h1 class="hero-slider-title">
              Buy <strong>The Best Bikes</strong> <br />
              in your region
            </h1>
            <div class="hero-slider-content">
              <p>
                Use powerful search tool to find your desired bikes based on
                multiple search criteria: Maker, Model, Year, Price Range, Bike
                Type, etc...
              </p>

              <button class="btn btn-hero-slider">Find the bike</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/motorcycle-png-20323-removebg-preview.png" alt="" class="img-responsive"
              />
          </div>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="hero-slide">
        <div class="flex container">
          <div class="slide-content">
            <h2 class="hero-slider-title">
              Do you want to <br />
              <strong>sell your bike?</strong>
            </h2>
            <div class="hero-slider-content">
              <p>
                Submit your bike in our user friendly interface, describe it,
                upload photos and the perfect buyer will find it...
              </p>

              <button class="btn btn-hero-slider">Add Your Bike</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/motorcycle-png-20323-removebg-preview.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
      <button type="button" class="hero-slide-prev">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10">
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hero-slide-next">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10">
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </section>
  <main>
    <x-search-form action='/search' method="GET" />


    <section>
      <div class="container">
        <h2>Latest Added Bikes</h2>
        <div class="bike-items-listing">


          @foreach($bikes as $bike)
          <x-bike-item :bike='$bike' />
          @endforeach
        </div>
      </div>
    </section>
  </main>




</x-app-layout>