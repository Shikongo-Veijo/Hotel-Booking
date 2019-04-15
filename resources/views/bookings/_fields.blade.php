<<<<<<< HEAD



  <form action="" method="post">
     <!-- <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53"> -->
    
	  
	<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('dateFrom','Check In') !!}
    {!! Form::date('From', $booking->From ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('dateFrom') ? $errors->first('From') : '' }}</span>
	</div>
	
    	 
	 <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('dateTo','Check Out') !!}
    {!! Form::date('dateFrom', $booking->dateTo ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('dateTo') ? $errors->first('dateTo') : '' }}</span>
	</div>
	
    <a href="/rooms/"></i> SEARCH AVAILABILITY</a>
	</form>
	</br>
		
=======
>>>>>>> master
<div class="form-group">
    {!! Form::label('name','Client:') !!}
    <select class="selectpicker form-control" data-live-search="true" title="" name="client_id">
        @foreach ($clients as $client)
            <option data-subtext="{{ $client->name }}" value="{{ $client->id }}">Client ID:{{ $client->id }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('room','Room:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="room_id">
        @foreach ($rooms as $room)
            <option data-subtext="{{ $room->name }}" value="{{ $room->id }}">Room ID:{{ $room->id }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('start_date','Start Date:') !!}
    {!! Form::date('start_date', $booking->start_date ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('start_date') ? $errors->first('start_date') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
    {!! Form::label('end_date','End Date') !!}
    {!! Form::date('end_date', $booking->end_date ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('end_date') ? $errors->first('end_date') : '' }}</span>
</div>