<x-app-layout>
<main>
    <div class="container-small">
        <h1 class="bike-details-page-title">Edit Bike</h1>

        <form action="{{ route('bike.update', $bike->id) }}" method="POST" enctype="multipart/form-data" class="card add-new-bike-form">
            @csrf
            @method('PUT')

            <div class="form-content">
                <div class="form-details">
                    <div class="row">
                        <!-- Maker -->
                        <div class="col">
                            <div class="form-group">
                                <label><strong>Maker</strong></label>
                                <select name="maker_id" required>
                                    <option value="">Select Maker</option>
                                    @foreach($makers as $maker)
                                        <option value="{{ $maker->id }}" {{ $bike->maker_id == $maker->id ? 'selected' : '' }}>
                                            {{ $maker->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Model -->
                        <div class="col">
                            <div class="form-group">
                                <label><strong>Model</strong></label>
                                <select name="model_id" required>
                                    <option value="">Select Model</option>
                                    @foreach($models as $model)
                                        <option value="{{ $model->id }}" {{ $bike->model_id == $model->id ? 'selected' : '' }}>
                                            {{ $model->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Year -->
                        <div class="col">
                            <div class="form-group">
                                <label><strong>Year</strong></label>
                                <select name="year" required>
                                    <option value="">Year</option>
                                    @for($year = 1900; $year <= 2025; $year++)
                                        <option value="{{ $year }}" {{ $bike->year == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Bike Type -->
                    <div class="form-group">
                        <label><strong>Bike Type</strong></label>
                        <div class="row">
                            @foreach($bike_types as $type)
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="bike_type_id" value="{{ $type->id }}" {{ $bike->bike_type_id == $type->id ? 'checked' : '' }}>
                                        <p>{{ $type->name }}</p>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Price and Phone -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label><strong>Price</strong></label>
                                <input type="number" name="price" value="{{ $bike->price }}" min="1" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label><strong>Phone</strong></label>
                                <input type="text" name="phone" value="{{ $bike->phone }}" />
                            </div>
                        </div>
                    </div>

                    <!-- Fuel Type -->
                    <div class="form-group">
                        <label><strong>Fuel Type</strong></label>
                        <div class="row">
                            @foreach($fuel_types as $fuel)
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type_id" value="{{ $fuel->id }}" {{ $bike->fuel_type_id == $fuel->id ? 'checked' : '' }}>
                                        <p>{{ $fuel->name }}</p>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label><strong>Address</strong></label>
                        <input type="text" name="address" value="{{ $bike->address }}" />
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label><strong>Detailed Description</strong></label>
                        <textarea rows="10" name="description">{{ $bike->description }}</textarea>
                    </div>

                    <!-- Published -->
                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" name="published_at" {{ $bike->published_at ? 'checked' : '' }} />
                            Published
                        </label>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="form-images">
                    <div class="form-image-upload">
                        <div class="upload-placeholder">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:48px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <input id="bikeFormImageUpload" type="file" multiple name="images[]" />
                    </div>
                    <div id="imagePreviews" class="bike-form-images">
                        @foreach($bike->images as $image)
                            <img src="{{ asset('storage/'.$image->path) }}" alt="Bike Image" style="width:100px; height:auto; margin:5px;" />
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="p-medium" style="width: 100%">
                <div class="flex justify-end gap-1">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>
</x-app-layout>
