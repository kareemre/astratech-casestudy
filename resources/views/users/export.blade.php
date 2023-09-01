<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <div align="center">
    <a href="{{ route('export') }}" class="btn btn-primary">Export to Excel</a>
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
 </body>
</html>