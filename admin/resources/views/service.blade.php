@extends('Layout.app')

@section('content')
    <div id="mainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Image</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Description</th>
                            <th class="th-sm">Edit</th>
                            <th class="th-sm">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="service_table">

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div id="lodarDiv" class="container m-5">
        <div class="row">
            <div class="col-md-12 text-center p-5">
                <img class="loading-icon" src="{{asset('public/images/loader.svg')}}" alt="">
            </div>
        </div>
    </div>

    <div id="wrongDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 text-center p-5">
                <h1>Something went wrong!</h1>
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header p-3 text-center">
          <h5 class="mt-4">Do you want to delete</h5>
          <h5 id="ServiceDeleteId" class="mt-4">Do you want to delete</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-sm btn-danger">Yes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
        getServiceData();
    </script>
@endsection
