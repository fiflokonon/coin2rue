@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/quill/editor.css') }}" />
@endsection
<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/Formations/</span> Ajouter une
            formation</h4>

        <!-- Multi Column with Form Separator -->
        <div class="card mb-4">

            <div class="p-3">

                <h5 class="card-header d-inline">Ajouter une Leçon</h5>
                <a href="{{ route('dlecons',['id' => $this->module_id]) }}" class="btn btn-primary float-end d-inline">Retour</a>
                </div>
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <form class="card-body" wire:submit.prevent='saveResponse' >
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label" for="">Responses</label>
                        <input type="text" class="form-control" placeholder="responses" wire:model="responses" />
                    </div>


                    <div class="col-md-12">
                        <label class="switch switch-lg">
                            <input type="checkbox" class="switch-input"  />
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">juste</span>
                          </label>
                    </div>


                </div>
                <hr class="my-4 mx-n4" />

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button wire:click.prevent='resetInputFields' class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
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

    <script src="https://cdn.tiny.cloud/1/ham41k2pezublgag1vvdmdsyeehbd095atam2gfndyjoucg0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            height: 300,
            plugins: 'autolink lists link image charmap print preview',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
            menubar: false,
            branding: false
        });
        // Récupérer le contenu de TinyMCE lorsque vous en avez besoin
        var form = document.querySelector('#formulaire');
        form.addEventListener('submit', function() {
            var content = tinymce.activeEditor.getContent();
            console.log(content);
        @this.contenu = content;
            document.querySelector('#content').value = content;
        });
    </script>
@endsection
