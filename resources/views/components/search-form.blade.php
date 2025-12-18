 <section class="find-a-bike">
        <div class="container">
          <form
            action="{{ route('bike.search') }}"
            method="GET"
            class="find-a-bike-form card flex p-medium"
          >
            
            <div>
              <button type="button" class="btn btn-find-a-bike-reset">
                Reset
              </button>
              <button class="btn btn-primary btn-find-a-bike-submit">
                Search
              </button>
            </div>
          </form>
        </div>
      </section>