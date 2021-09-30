@extends('backend.main')

@section('content')

<h1>Report</h1>


<br>
<button class="btn btn-danger" onclick="printDiv('printableArea')">
    <i class="fas fa-print"></i> Print
</button>
<form action="{{route('date.bid')}}" method="post">
        @csrf
<div class="row" style="padding-left: 300px;padding-top: 5px;">

    <div class="col-md-4">
        <input name="date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <input name="date1" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>

</div>
    </form>  


<div id="printableArea">
<table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Bid Price</th>
     
    
     
    </tr>
  </thead>
  <tbody>
 
  @foreach($bids as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{optional($data->user)->name}}</td>
      <td>{{$data-> price}}</td>
     <td>
                        
   </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection


