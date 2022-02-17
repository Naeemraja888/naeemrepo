<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
      @include("admin.nav")
        <div style="position:relative;top:60px;right:-150px;">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
          @csrf
        
  <!-- Title input -->
  <div class="form-outline mb-4">

    <input style="color:blue;" type="text" name="title" value="{{$data->title}}"  required />
     
  </div>

  <!-- Price input -->
  <div class="form-outline mb-4">
    
    <input style="color:blue;" type="number" name="price" value="{{$data->price}}"  required />
   
  </div>
  <!-- Image input -->
  <div class="form-outline mb-4">
   
    <input style="color:blue;" type="file" name="image"  required />
    
  </div>
         <!-- Description input -->
  <div class="form-outline mb-4">
    
    <input  style="color:blue;" type="text" name="description" value="{{$data->description}}"  required />
    
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
        <div>
    
     </div> 
      @include("admin.adminscript")
  </body>
</html>