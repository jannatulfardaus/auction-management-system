@extends('backend.main')

@section('content')
<br> </br>
<h3> Payment Records</h3>
</div>
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-primary">{{session()->get('message')}}</span>
        </div>
    @endif

<table class="table table-hover table-success">
 
      <br></br>
      
      <tr class="table-info">
      <th>ID</th>
<th>Rent ID</th>
<th>Payment Type</th>
<th>Amount</th>
<th>User ID</th>
<th>Month</th>
<th>Payment Date</th>
<th>Status</th>
<th>Action</th>
      </tr>
  </thead>
  <tbody>


<tr class="table-danger">
<th scope="row">

<th scope="row"></th>
  <th scope="row"></th>
  <th scope="row"></th>
  <th scope="row"></th>
  <th scope="row"></th>
  <th scope="row">}</th>
  

  <th scope="row"></th>
  
  
  <td><a href="" > <i class="fas fa-check-double"></i></a></td>
 
  
  
  
</tr>

</thead>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>

@endsection