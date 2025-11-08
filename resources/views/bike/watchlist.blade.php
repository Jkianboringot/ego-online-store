<x-app-layout>

  <main>
    <!-- New Bikes -->
    <section>
      <div class="container">
        <div class="flex justify-between items-center">
          <h2>My Favourite Bikes</h2>
          @if ($bikes->total()>0)
          <div class="pagination-summary">
            <p>
              Showing {{ $bikes->firstItem() }} to
              {{ $bikes->lastItem() }} of {{ $bikes->total() }} Results
            </p>
          </div>
          @endif
        </div>
        <div class="car-items-listing">
          @forelse($bikes as $bike)
          <x-bike-item :$bike :favoured="true " />

          @empty

          <div class="text-center">
            Dont have a Favourite Bike yet? <a href="{{ route('index') }}">Why not check a few out</a>
          </div>
          @endforelse
        </div>
        {{ $bikes->onEachSide(1)->links() }}

      </div>
    </section>
    <!--/ New Bikes -->
  </main>

</x-app-layout>