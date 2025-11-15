<x-app-layout>
  <main>

    <div class="container-small">
      <h1 class="bike-details-page-title">Add new bike</h1>
      <form
        action="{{ route('bike.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="card add-new-bike-form">
        @csrf
        <div class="form-content">
          <div class="form-details">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label><strong>Maker</strong></label>
                  <select name='maker_id'>

                    @foreach ($makers as $maker)

                    <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                    @endforeach

                  </select>
                  <p class="error-message">This field is required</p>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><Strong>Model</Strong></label>
                  <select name='model_id'>

                    @foreach ($models as $model)

                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                  </select>

                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><strong>Year</strong></label>
                  <select name='year'>
                    <option value="">Year</option>
                    @for ($year = 1900; $year <= 2025; $year++)
                      <option value="{{ $year }}">{{ $year }}</option>
                      @endfor
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label><strong>Bike Type</strong></label>
              <div class="row">

                @foreach ($bike_types as $bike_type )

                <div class="col">
                  <label class="inline-radio">
                    <input type="radio" name="bike_type_id" value="{{$bike_type->id}}" />
                    <p>{{$bike_type->type}}</p>
                  </label>
                </div>

                @endforeach

              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label><strong>Price</strong></label>
                  <input type="number" placeholder="Price" name="price" min='1' />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Phone</label>
                  <input placeholder="Phone" name="phone" />
                </div>
              </div>

            </div>
            <div class="form-group">
              <label><strong>Fuel Type</strong></label>
              <div class="row">

                @foreach ($fuel_types as $fuel_type)

                <div class="col">
                  <label class="inline-radio">
                    <input type="radio" name="fuel_type_id" value="{{$fuel_type->id}}" />
                    <p>{{$fuel_type->name}}</p>

                  </label>
                </div>

                @endforeach


              </div>
            </div>

            <div class="form-group">
              <label>Address</label>
              <input placeholder="Address" name='address' />
            </div>


            <div class="form-group">
              <label><strong>Detailed Description</strong></label>
              <textarea rows="10" name="description"></textarea>
            </div>
            <div class="form-group">
              <label class="checkbox">
                <input type="checkbox" name="published_at" />
                Published
              </label>
            </div>
          </div>
          <div class="form-images">
            <div class="form-image-upload">
              <div class="upload-placeholder">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 48px">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
              </div>
              <input id="bikeFormImageUpload" type="file" multiple />
            </div>
            <div id="imagePreviews" class="bike-form-images"></div>
          </div>
        </div>
        <div class="p-medium" style="width: 100%">
          <div class="flex justify-end gap-1">
            <button type="button" class="btn btn-default">Reset</button>
            <button class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </main>

</x-app-layout>