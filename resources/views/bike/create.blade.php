<x-app-layout>
  <main>
    <div class="container-small">
      <h1 class="bike-details-page-title">Add new bike</h1>
      <form
        action=""
        method="POST"
        enctype="multipart/form-data"
        class="card add-new-bike-form">
        <div class="form-content">
          <div class="form-details">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label><strong>Maker</strong></label>
                  <input placeholder="Maker" name="maker" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><Strong>Model</Strong></label>
                  <input placeholder="Model" name="model" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><strong>Year</strong></label>
                  <select>
                    <option value="">Year</option>
                    <option value="2024">2024</option>
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
                    <input type="radio" name="bike_type" value="{{$bike_type}}" />
                    <p>{{$bike_type}}</p>
                  </label>
                </div>

                @endforeach

              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label><strong>Price</strong></label>
                  <input type="number" placeholder="Price" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label><strong>Vin Code</strong></label>
                  <input placeholder="Vin Code" />
                </div>
              </div>

            </div>
            <div class="form-group">
              <label><strong>Fuel Type</strong></label>
              <div class="row">

                @foreach ($fuel_types as $fuel_type)

                <div class="col">
                  <label class="inline-radio">
                    <input type="radio" name="fuel_type" value="{{$fuel_type}}" />
                    <p>{{$fuel_type}}</p>

                  </label>
                </div>

                @endforeach

               
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Address</label>
                  <input placeholder="Address" name='address' />
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
              <label><strong>Detailed Description</strong></label>
              <textarea rows="10" name="description"></textarea>
            </div>
            <div class="form-group">
              <label class="checkbox">
                <input type="checkbox" name="published" />
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
              <input id="carFormImageUpload" type="file" multiple />
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