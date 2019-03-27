


  <form action="" method="post">
      <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
     <!-- <div class="medium-1  columns">FROM:</div>
      <div class="medium-2  columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
	  -->
	  
	<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('dateFromFrom','Check In') !!}
    {!! Form::date('From', $booking->From ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('dateFrom') ? $errors->first('From') : '' }}</span>
	</div>
	
     <!-- <div class="medium-1  columns">TO:</div>
      <div class="medium-2  columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>-->
     <!-- <div class="medium-2  columns"><input class="button" type="submit" href="/rooms/" value="SEARCH" /></div>-->
	 
	 <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('dateTo','Check Out') !!}
    {!! Form::date('dateFrom', $booking->dateTo ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('dateTo') ? $errors->first('dateTo') : '' }}</span>
	</div>
	
    <a href="/rooms/"></i> SEARCH AVAILABILITY</a>
	<!-- <div class="medium-2  columns"><input class="button"  href="/rooms/" type="submit" value = "SEARCH AVAILABILITY"/></div><i class="fa fa-table">-->
    </form>
	</br>
		
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