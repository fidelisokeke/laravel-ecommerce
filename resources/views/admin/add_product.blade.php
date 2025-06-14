<!DOCTYPE html>
<html>
    <head>
 @include('admin.head')

 <style type="text/css">
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    h1{
        color: white;
    }
    label{
        display: inline-block;
        width: 250px;
        font-size: 18px !important;
        color: white !important;
    }
    input[type='text']{
        width: 340px;
        height: 50px;
    }
    textarea{
        width: 450px;
        height: 50px;
    }
    .input_deg{
        padding: 15px;
    }
 </style>
    </head>
  <body>
     @include('admin.header')
      @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Add Product Category</h1>



          <div class="div_deg">
            <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div  class="input_deg">
                    <label>Product Title</label>
                    <input type="text" name="title">
                </div>
                 <div class="input_deg">
                    <label>description</label>
                    <textarea name="description" required></textarea>
                </div>
                 <div class="input_deg">
                    <label>Price</label>
                    <input type="text" name="price">
                </div>
                <div class="input_deg">
                    <label>quantity</label>
                    <input type="number" name="qty">
                </div>
                <div class="input_deg">
                    <label>Product Category</label>
                    <select name="category" required>
                        <option>select an option</option>

                        @foreach($category as  $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input_deg">
                    <label>Price</label>
                    <input type="file" name="image">
                </div>


                <div class="input_deg">
                    <label>Add Product</label>
                    <input class="btn btn-success" type="submit" value="add product">
                </div>
            </form>
          </div>



</div>
      </div>
    </div>


    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincssjs/charts-home.js')}}"></script>
    <script src="{{asset('/admincssjs/front.js')}}"></script>
    
  </body>
</html>