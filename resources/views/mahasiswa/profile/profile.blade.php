<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard-Mahasiswa') }}
        </h2>
    </x-slot>

    <form class="row g-3 needs-validation" novalidate action="/mahasiswa/store" method="POST">
        @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="validationCustom01" value="Mark" required name="name">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Status</label>
          <input type="text" class="form-control" id="validationCustom02" value="Otto" required name="status">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="email">
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Catatan</label>
          <input type="text" class="form-control" id="validationCustom03" required name="catatan">
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>  
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">NISN</label>
            <input type="text" class="form-control" id="validationCustom04" required name="nisn">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>      
        {{-- <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div> --}}
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
</x-app-layout>
