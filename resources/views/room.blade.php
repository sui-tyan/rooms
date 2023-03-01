
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Rooms</title>
</head>
<body>
<div class="overflow-x-auto">
  <table class="table table-compact w-full text-center">
    <thead>
      <tr>
        <th>Room ID</th> 
        <th class="text-left">Room Description</th> 
        <th>Room Capacity</th> 
        <th>Date From</th> 
        <th>Date To</th> 
      </tr>
    </thead> 
    <tbody>
      <tr>
        
@foreach ($rooms as $room)
        <th>{{$room -> roomID}}</th> 
        <td class="text-left">{{$room-> roomDescription}}</td> 
        <td>{{$room-> roomCapacity}}</td> 
        <td>{{$room-> dateFrom}}</td> 
        <td>{{$room-> dateTo}}</td>
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