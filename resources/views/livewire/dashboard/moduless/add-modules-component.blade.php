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

                <h5 class="card-header d-inline">Ajouter un Module</h5>
                <!--<a href="{{ route('dmodules',['id' => $this->formation_id]) }}" class="btn btn-primary float-end d-inline">Retour</a>-->
                </div>
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <form class="card-body" wire:submit.prevent='saveModule' id="formulaire">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="">Titre</label>
                        <input type="text" class="form-control" placeholder="Titre" wire:model="titre" />
                    </div>


                    <div class="col-md-6">
                        <div class="form-password-toggle">
                            <label class="form-label" for="">Image</label>
                            <div class="input-group input-group-merge">
                                <input type="file" class="form-control" placeholder="image" wire:model="image_link" />
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4 mx-n4" />
                <div class="row g-3">
                    <div class="col-md-12" wire:ignore>
                        <label for="full-editor"><h5>Description</h5></label><textarea id="content" name="contenu" ></textarea>
                    </div>
                </div>
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
        @this.description = content;
            document.querySelector('#content').value = content;
        });
    </script>
@endsection
