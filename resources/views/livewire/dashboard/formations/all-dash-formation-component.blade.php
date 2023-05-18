<div>
   <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">DataTables /</span> Advanced
</h4>

<!-- Ajax Sourced Server-side -->
<div class="card">
  <h5 class="card-header">Ajax Sourced Server-side</h5>
  <div class="card-datatable text-nowrap">
    <table class="datatables-ajax table">
      <thead>
        <tr>
          <th>Full name</th>
          <th>Email</th>
          <th>Position</th>
          <th>Office</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
            <tr>
           
            <td>Contenu interne 2</td>
            <td>Contenu interne 2</td>
            <td>Contenu interne 2</td>
            <td>Contenu interne 2</td>
            <td>Contenu interne 2</td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
<!--/ Ajax Sourced Server-side -->

</div>
@section('scripts')
 <!-- Vendors JS -->
 <script src="{{ asset('assets/dash/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
 <!-- Flat Picker -->
 <script src="{{ asset('assets/dash/assets/vendor/libs/moment/moment.js') }}"></script>
 <script src="{{ asset('assets/dash/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
 <!-- Form Validation -->
 <script src="{{ asset('assets/dash/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
 <script src="{{ asset('assets/dash/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
 <script src="{{ asset('assets/dash/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/dash/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/dash/assets/js/tables-datatables-advanced.js') }}"></script>
{{-- <script src="../../assets/js/tables-datatables-advanced.js"></script>  --}}
<script src="{{ asset('assets/dash/assets/js/dashboards-analytics.js') }}"></script>


@endsection




