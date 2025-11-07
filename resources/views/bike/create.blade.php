<x-app-layout>
    <main>
      <div class="container-small">
        <h1 class="car-details-page-title">Add new car</h1>
        <form
          action=""
          method="POST"
          enctype="multipart/form-data"
          class="card add-new-car-form"
        >
          <div class="form-content">
            <div class="form-details">
              <div class="row">
                  <div class="col">
                  <div class="form-group">
                    <label>Maker</label>
                    <input placeholder="Maker" />
                  </div>
                </div>
                 <div class="col">
                  <div class="form-group">
                    <label>Model</label>
                    <input placeholder="Model" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Year</label>
                    <select>
                      <option value="">Year</option>
                      <option value="2024">2024</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Bike Type</label>
                <div class="row">
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="sedan" />
                      Sedan
                    </label>
                  </div>

                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="hatchback" />
                      Hatchback
                    </label>
                  </div>

                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="suv" />
                      SUV (Sport Utility Vehicle)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" placeholder="Price" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Vin Code</label>
                    <input placeholder="Vin Code" />
                  </div>
                </div>
                
              </div>
              <div class="form-group">
                <label>Fuel Type</label>
                <div class="row">
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="gasoline" />
                      Gasoline
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="diesel" />
                      Diesel
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="electric" />
                      Electric
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="hybrid" />
                      Hybrid
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Address</label>
                    <input placeholder="Address" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Phone</label>
                    <input placeholder="Phone" />
                  </div>
                </div>
              </div>
             
              <div class="form-group">
                <label>Detailed Description</label>
                <textarea rows="10"></textarea>
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
                    style="width: 48px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                </div>
                <input id="carFormImageUpload" type="file" multiple />
              </div>
              <div id="imagePreviews" class="car-form-images"></div>
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
