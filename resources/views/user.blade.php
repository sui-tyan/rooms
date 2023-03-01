

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="overflow-x-auto">
  <table class="table table-compact w-full text-center">
    <thead>
      <tr>
        <th>ID</th> 
        <th class="text-left">Name</th> 
        <th class="text-left">Email</th> 
        <th>Date Verified</th> 
        <th>Date Registered</th> 
      </tr>
    </thead> 
    <tbody>
      <tr>
        
@foreach ($users as $user)
        <th>{{$user-> id}}</th> 
        <td class="text-left">{{$user-> name}}</td> 
        <td class="text-left">{{$user-> email}}</td> 
        <td>{{$user-> email_verified_at}}</td> 
        <td>{{$user-> created_at}}</td>
      </tr>
@endforeach
    </tbody> 
    <tfoot>
      <tr>
        <th>Room ID</th> 
        <th>Room Description</th> 
        <th>Room Capacity</th> 
        <th>Date From</th> 
        <th>Date To</th> 
      </tr>
    </tfoot>
  </table>
</div>
</body>
</html>
                
<br>