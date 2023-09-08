<x-layout>
  <br />
   @include('partials._errors');
   
    <form method="post" action="{{ route('import') }}" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
    
         <input type="file" name="import_file" />
       
         <input type="submit" value="import">
     </div>
    </form>
    @include('partials._sessions');

  <div class="container">
   <div align="center">
    <a href="{{ route('export') }}" class="btn btn-success">Export to Excel</a>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>ID</td>
      <td>Full Name</td>
      <td>Email</td>
      <td>Phone Number</td>
     </tr>
     @foreach($users as $user)
     <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->full_name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->phone_number }}</td>
     </tr>
     @endforeach
    </table>
   </div>
   
  </div>
</x-layout>
