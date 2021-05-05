<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="jumbotron text-white p-3" style="background-color: #2065A8; border-top-left-radius:0px;border-top-right-radius:0px
    ; border-bottom-left-radius:0px;border-bottom-right-radius:0px">
        <div class="row">
            <div class="col-sm-4 text-left">
                <img class="mt-2" src="{{ asset('img/1.png') }}" alt="" width="80">
                <h2 class="mt-">Invoice<small>2021</small></h2>
            </div>
            <div class="col-sm-4 offset-sm-4 text-right">
                <p class="lead" class="mt-5" style="font-size:16px;margin-top: 15px">Ely's Electronic Service Center</p>
                <p class="lead" style="font-size:12px;margin-top: -10px">San Vicente, Pili, Cam. Sur</p>
                <p class="lead" style="font-size:12px;margin-top: -10px">Municipality of Pili</p>
                <p class="lead" style="font-size:12px;margin-top: -10px">Philippines</p>
            </div>
        </div>
      </div>
      <table style="margin-top: -5px" width="100%" class="">
         
          <tr>
              <td width="10%" class=""><b class="ml-2">Name:</b></td>
              <td width="40%" class="text-left">{{ $data[0]->customer->cname }} </td>
              <td width="20%" class="text-right"><b>Invoice No. :</b></td>
              <td width="10%" class="text-right"><span class="mr-2">{{ rand(100,500)."-".rand(10000,50000) }}</span></td>
          </tr>
          <tr>
            <td width="10%"><b class="ml-2">Address:</b></td>
            <td width="40%" class="text-left">{{ $data[0]->customer->caddress }} </td>
            <td width="20%" class="text-right"><b>Invoice Date:</b></td>
            <td width="12%" class="text-right"><span class="mr-2">{{ date("F j,Y") }}</span></td>
        </tr>

      </table>
      <table width="100%" class="table mt-4 table-borderless">
        <thead class="border">
            <tr>
                <th>No.</th>
                <th width="20%">Purchase Item</th>
                <th>Descptions</th>
                <th width="11%">Quantity</th>
                <th width="13%">Price</th>
                <th width="13%">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; $total=0;?>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $item->product->pname }}</td>
                    <td>{{ $item->product->pdescription }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>₱ {{ $item->product->pprice }}.00</td>
                    <td>₱ {{ $item->perItemAmount }}.00</td>
                    @php
                        $total+=$item->perItemAmount;
                    @endphp
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No data Available</td>
                </tr>
            @endforelse
            <tr>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="4" style="background: #BCDFF5;">
                    <small><b>Notes:</b></small><br>
                    <small>Get some color inspiration with Color Hunt's green palettes collection and find the perfect scheme for your design or art project.</small>
                </td>
                <td colspan="2" style="background: #2065A8;color:white"><b>Total amount:</b><br>
                    <h1>₱ {{ $total.".00" }}</h1>    
                </td>
            </tr>
        </tbody>
      </table>
      <div class="text-center">
        <img class="mt-5" src="{{ asset('img/img.png') }}" alt="" width="50">
        <h6 class="">Invoice<small>2021</small></h6>
        <small>If you have any enqueries concerning this <br> invoice, please contact us!</small>
      </div>
</body>
</html>