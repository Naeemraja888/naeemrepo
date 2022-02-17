<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
      @include("admin.nav")
      <div style="position:relative;top:60px;right:-150px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
          @csrf
        
  <!-- Title input -->
  <div class="form-outline mb-4">

    <input style="color:blue;" type="text" name="title" placeholder="Enter Your Title Here"   required />
     
  </div>

  <!-- Price input -->
  <div class="form-outline mb-4">
    
    <input style="color:blue;" type="number" name="price" placeholder="Enter Your Price" required />
   
  </div>
  <!-- Image input -->
  <div class="form-outline mb-4">
   
    <input style="color:blue;" type="file" name="image"  required />
    
  </div>
         <!-- Description input -->
  <div class="form-outline mb-4">
    
    <input  style="color:blue;" type="text" name="description" placeholder="Description"  required />
    
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <div>
          <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
      <th scope="col">Actions 2</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <td scope="row">{{$data->title}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td></td>
      <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
      <td><a href="{{url('/updatemenu',$data->id)}}">Update</a></td>
    </tr>
   @endforeach
   
  </tbody>
</table>
        </div>
      </div>
      </div>
      @include("admin.adminscript");
  </body>
</html>