@include('partials.header')
<x-nav/>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">ContactNumber</th>
      <th scope="col">Address</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
    <tr>
      <td>{{$customer -> id}}</td>
      <td>{{$customer -> firstName}}</td>
      <td>{{$customer -> lastName}}</td>
      <td>{{$customer -> email}}</td>
      <td>{{$customer -> contactNumber}}</td>
      <td>{{$customer -> address}}</td>
      <td><button type="button" class="btn btn-primary">EDIT</button></td>      
      <td><button type="button" class="btn btn-primary" ><a href="delete/{{customer->$id}}" style="text-decoration:none">DELETE</a></button>
    </tr>
    
    @endforeach
  </tbody>
</table>
  </div>


  @include('partials.footer')