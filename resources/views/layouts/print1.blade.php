<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="text-center mt-5">
    <h1 class="lead">ELy's ELectronic Service Center</h1>
    <small>Official List of Out of Stock Products</small><br>
    <small>&copy; {{date("Y")}}</small>
</div>
<table class="table table-bordered table-striped mt-5">
    <thead>
        <tr>
            <td>Identifier</td>
            <td>Description</td>
            {{-- <td>Quantity</td> --}}
            <td>Price</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{$product->pname}}</td>
            <td>{{$product->pdescription}}</td>
            {{-- <td>{{$product->pquantity}}</td> --}}
            <td>{{$product->pprice}}</td>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="4">
                No Data
            </td>
        </tr>
        @endforelse
    </tbody>
</table>