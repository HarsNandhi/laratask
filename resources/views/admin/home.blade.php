@extends('admin.app')

@section('content')
  <div class="wrapper">
        @include('admin.sidebar')
        <div id="body" class="active">
            <!-- navbar navigation component -->
           @include('admin.menu')
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>User Lists</h3>
                    </div>
                    <div class="row">
                       
           
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                               
                                



                                   <div class="card-body">
                                    <h3 class="card-title">User Lists</h3>
                                    <table class="table table-hover" id="new-student" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                             @if(count($users) > 0)
                                            @foreach ($users as $user)
                                           
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td>
                                                    @if ($user->login_status == 'Active')
                                                       Active
                                                    @elseif ($user->login_status == 'Disabled')
                                                        Disabled
                                                    @endif
                                                </td>


                                                <td>

                                                    @if ($user->login_status == 'Active')
                                                        <a href='{{ url("admin/user-status-change/".$user->id."/Disabled") }}'>Disabled</a>
                                                    @elseif ($user->login_status == 'Disabled')
                                                        <a href='{{ url("admin/user-status-change/".$user->id."/Active") }}'>Active</a>
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr><td>No records found!</td></tr>
                                           @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
              
               
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
    $('#student').DataTable();
    $('#new-student').DataTable();
});
</script>
@endsection