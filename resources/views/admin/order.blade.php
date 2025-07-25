<!DOCTYPE html>
<html>


    @include('admin.head')
    <style type="text/css">
        table {
            border: 2px solid;
            text-align: center;
        }

        th {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        td{
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
        }


        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


<body>
    @include('admin.header')
    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="table_center">

                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product title</th>
                            <th>price</th>
                            <th>image</th>
                            <th>Status</th>
                            <th>Change Status</th>
                        </tr>

                        @foreach ( $data as $data)
                            
                        

                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->rec_address}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->product->title}}</td>
                            <td>{{$data->product->price}}</td>
                            <td>
                                <img width="150" src="products/{{$data->product->image}}">
                            </td>
                             <td>{{$data->status}}</td>

                             <td>
                                <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}">On the way</a>
                             </td>
                             <td>
                                <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
                             </td>
                             
                            
                        </tr>
                        @endforeach
                    </table>

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