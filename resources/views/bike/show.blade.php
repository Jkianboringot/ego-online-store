<x-app-layout>
  <main>
    <div class="container">
      <h1 class="bike-details-page-title">{{ $bike->maker->name }} {{ $bike->model->name }} - {{ $bike->year }}</h1>

      <div class="bike-details-content">
        <div class="bike-images-and-description">
          <div class="bike-images-bikeousel">
            <div class="bike-image-wrapper">
              <img
                src="{{ $bike->primaryImage }}"
                alt=""
                class="bike-active-image"
                id="activeImage" />
            </div>
            <div class="bike-image-thumbnails">
              @foreach ($bike->images as $image )
              <img src="{{ $image->image_path }}" alt="" />

              @endforeach

            </div>
            <button class="bikeousel-button prev-button" id="prevButton">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                style="width: 64px">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 19.5 8.25 12l7.5-7.5" />
              </svg>
            </button>
            <button class="bikeousel-button next-button" id="nextButton">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                style="width: 64px">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </button>
          </div>

          <div class="biked bike-detailed-description">
            <h2 class="bike-details-title">Detailed Description</h2>
            <p>
              {!! $bike->description !!}
            </p>

          </div>

        </div>
        <div class="bike-details biked">
          <div class="flex items-center justify-between">
            <p class="bike-details-price">
              <small>PISO</small>
              -{{ $bike->price }}
            </p>
            <button class="btn-heart">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                style="width: 20px">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              </svg>
            </button>
          </div>

          <hr />
          <table class="bike-details-table">
            <tbody>
              <tr>
                <th>Maker</th>
                <td>{{$bike->maker->name}}</td>
              </tr>
              <tr>
                <th>Model</th>
                <td>{{$bike->model->name}}</td>
              </tr>
              <tr>
                <th>Year</th>
                <td>{{ $bike->year }}</td>
              </tr>
              <tr>
                <th>Vin</th>
                <td>{{ $bike->vin }}</td>
              </tr>
             
              <tr>
                <th>Bike Type</th>
                <td>{{ $bike->bikeType->name }}</td>
              </tr>
              <tr>
                <th>Fuel Type</th>
                <td>{{$bike->fuelType->name}}</td>
              </tr>
              <tr>
                <th>Address</th>
                <td>{{ $bike->address }}</td>
              </tr>
            </tbody>
          </table>
          <hr />

          <div class="flex gap-1 my-medium">
            <img
              src="/img/avatar.png"
              alt=""
              class="bike-details-owner-image" />
            <div>
              <h3 class="bike-details-owner">{{ $bike->user->name }}</h3>
              <div class="text-muted">{{ $bike->user->bikes()->count() }} Bikes</div>
            </div>
          </div>
          <a href="tel:{{ Str::mask($bike->phone,'*',-3) }}" class="bike-details-phone">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
            </svg>

            {{ Str::mask($bike->phone,'*',-3) }}
            <span class="bike-details-phone-view">view full number</span>
          </a>
        </div>
      </div>
    </div>
  </main>
</x-app-layout>