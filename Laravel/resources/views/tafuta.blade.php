<!DOCTYPE html>

<html lang="en">
<head>
<title>Books</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
     
               <h2 style="color:red;text-align:center">Science Books</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                
                     <th>Title</th>
                     <th>Link</th>
                     <th>Created at</th>
                  </tr>
               </thead>
            </table>
            
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('users-list') }}",
           columns: [
                    
                    { data: 'site_title', name: 'site_title' },
                    { data: 'site_link', name: 'site_link' },
                    { data: 'created_at', name: 'created_at' }
                 ]
        });
     });
  </script>
   </body>
</html>