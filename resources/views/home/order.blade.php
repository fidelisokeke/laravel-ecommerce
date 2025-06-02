<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }
        th{
            border: 2px solid skyblue;
            background-color: black;
            color: white;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }
        td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    @include('home.header')
    <!-- Hero Section -->


    <div class="div_deg">
        <table>
            <tr>
                <th>Product Name</th>
                <th>price</th>
                <th>Delivery Status</th>
                <th>Image</th>

            </tr>

            @foreach( $order as $order )
                
            
            <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <img height="200" width="200" src="products/{{$order->product->image}}">
                </td>
            </tr>
            @endforeach
        </table>
    </div>




    <!-- Footer -->

    @include('home.footer')
    <script src="script.js"></script>
</body>

</html>