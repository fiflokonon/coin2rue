<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Dashboard /</span> Formations
        </h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="p-3">
                <h5 class="card-header d-inline">Formations</h5>
                <a href="{{ route('addformation') }}" class="btn btn-primary float-end d-inline">Ajouter</a>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Durée</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($formations as $formation)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    {{ $formation->titre }}
                                </td>
                                <td>{{ $formation->duree }}</td>

                                <td>
                                    @if ($formation->statut == 1)
                                        <span class="badge bg-label-primary me-1">Active</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">Non Active</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('editformation', ['id' => $formation->id]) }}"><i
                                                    class="ti ti-pencil me-1"></i> Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('dmodules', ['id' => $formation->id]) }}"><i
                                                    class="ti ti-pencil me-1"></i> Ajouter Module</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ti ti-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{ $formations->links() }}
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

</div>
@section('scripts')
@endsection
