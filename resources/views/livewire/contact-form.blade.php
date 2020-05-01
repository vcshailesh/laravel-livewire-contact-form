<div>
    <div class="container">
        <div class="py-5 text-center">
          <h2>Contact Form</h2>
        </div>
  
        <div class="row">
          <div class="col-md-8" style="margin-left:180px">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form class="needs-validation" wire:submit.prevent="submit">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" wire:model.lazy="firstName" placeholder="Enter First name">
                  @error('firstName') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" wire:model.lazy="lastName" placeholder="Enter Last name">
                  @error('lastName') <span class="error">{{ $message }}</span> @enderror
                </div>
              </div>
  
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" wire:model.lazy="email" placeholder="you@example.com">
                @error('email') <span class="error">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="message">Message</label>
                <textarea rows="5" class="form-control" wire:model.lazy="message" placeholder="Enter Message"></textarea>
                @error('message') <span class="error">{{ $message }}</span> @enderror
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
</div>
