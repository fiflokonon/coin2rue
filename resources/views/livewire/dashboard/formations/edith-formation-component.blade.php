@section('styles')
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/katex.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/editor.css') }}" />
@endsection
<div>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/Formations/</span> Ajouter une formation</h4>

    <!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header">Ajouter une formation</h5>
            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
    <form class="card-body" wire:submit.prevent='saveFormation'>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="">Titre</label>
          <input type="text"  class="form-control" placeholder="Titre" wire:model="titre" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="">Durée</label>
          <div class="input-group input-group-merge">
            <input type="number" class="form-control" placeholder="En jour"  wire:model="duree"/>
            <span class="input-group-text" id="multicol-email2">30 jours</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-password-toggle">
            <label class="form-label" for="">Prix</label>
            <div class="input-group input-group-merge">
              <input type="text" class="form-control" placeholder="prix de la formation" wire:model="prix" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-password-toggle">
            <label class="form-label" for="">Image</label>
            <div class="input-group input-group-merge">
              <input type="file"  class="form-control" placeholder="image" wire:model="image"/>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4 mx-n4" />
      <div class="row g-3">
        <div class="col-md-12">
        <h5>Description</h5>
            <div wire:ignore id="full-editor">
                <h6>Quill Rich Text Editor</h6>
                <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
            </div>
        </div>

      </div>
      <div class="pt-4">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button wire:click.prevent='resetInputFields'  class="btn btn-label-secondary">Cancel</button>
      </div>
    </form>
  </div>
</div>
@section('scripts')

<script src="{{ asset('assets/dash/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/quill/quill.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/dash/assets/js/forms-editors.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/dash/assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/dash/assets/js/form-layouts.js') }}"></script>

  <script>
    // var sd_data = $('#short_description').val();
    $("#full-editor").on('change', function() {
        // alert('Please select');
    @this.description = $('#full-editor').val();
    // @this.set('short_description', sd_data);

});
</script>

@endsection
