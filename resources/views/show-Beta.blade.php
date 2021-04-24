<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Student Table</h2>
          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>University ID</th>
        <th>Name</th>
        <th>Surname</th>
         <!--<th>Gender</th> -->
           <th>MidTerm Marks</th>
             <th>FinalTerm Marks</th>
               <th>Project Marks</th>
      </tr>
    </thead>
    <tbody>
       @foreach($student as $items) 
      <tr>
        <td>{{$items['id']}}</td>
        <td>{{$items['name']}}</td>
        <td>{{$items['surname']}}</td>
            <!--<td>{{$items['gender']}}</td> -->
             <td>{{$items['mmarks']}}</td>
        <td>{{$items['fmarks']}}</td>
            <td>{{$items['pmarks']}}</td>
      </tr>
      
       @endforeach
    </tbody>
  </table>
   <button type="submit" class="btn btn-primary"><a href="/" style="color: white">Back</a></button>
</div>


 
</body>
</html>
