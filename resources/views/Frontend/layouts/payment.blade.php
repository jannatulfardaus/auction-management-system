@extends('Frontend.master')

@section('contents')

<h2>Payment </h2>
        <form action="{{route('store.payment')}}" method="Post">
            @csrf
        <div class="col-md-6">
       
            <input value="{{$bid->id}}" type="hidden" name="bid_id" class="form-control" id="recipient-name">
</div>
         

          <input type="hidden" name="user_id" value="{{$bid->product->user_id}}">
          
          <div class="col-md-5">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input value="{$bid->amount}}" type="number" name="amount" class="form-control" id="recipient-name">
          </div>
          
          <!-- <div class="col-md-4">
            <label for="message-text" class="col-form-label">Month:</label>
            <select required class="custom-select mr-sm-2" name="month" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
      </select>
          </div> -->
          
          <div class="col-md-3">
            <label for="message-text" class="col-form-label">Pay at:</label>
            <input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" name="date" class="form-control" id="recipient-name">
          </div>
          
       <br></br>
        <button type="submit" class="btn btn-success">Submit</button>
     
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection