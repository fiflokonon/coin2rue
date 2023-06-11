<div>
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard /</span> Formations /</span>Modules
      </h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <div class="p-3">
            <h5 class="card-header d-inline">Modules</h5>
            <a href="{{ route('addmodule',['id' => $this->formation_id]) }}" class="btn btn-primary float-end d-inline">Ajouter</a>
        </div>

        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Statut</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $i = 1;
                @endphp
                @foreach ($modules as $module)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        {{ $module->titre }}
                    </td>

                    <td>
                        @if ($module->statut == 1)
                        <span class="badge bg-label-primary me-1">Active</span>
                        @else
                        <span class="badge bg-label-danger me-1">Non Active</span>
                        @endif
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ route('editmodule',['id' => $module->id]) }}"><i class="ti ti-pencil me-1"></i> Edit</a>
                          <a class="dropdown-item" href="{{ route('dlecons',['id' => $module->id]) }}"><i class="ti ti-pencil me-1"></i> Ajouter une leçon</a>
                          <a class="dropdown-item" href="{{ route('addquiz',['id' => $module->id]) }}"><i class="ti ti-pencil me-1"></i> Ajouter un quiz</a>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        {{ $modules->links() }}
      </div>
      <!--/ Basic Bootstrap Table -->

</div>





