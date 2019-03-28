@extends('layouts.mainmenu_notiG')
@section('page_title', 'Notification')
@section('content')

    <div class="container">
        @foreach($messagenoti as $messagenotishow)
            <div class="row margin_box10" onclick="window.location.href='/order/{{$messagenotishow->id_order}}'">
                <div class="col-12 noti_card noti_active ">
                            <span class="all_more_link fontsize10">
                                {{date_format($messagenotishow->created_at,"g:i A jS M Y  ")}}
                            </span>
                            <br>
                            <span class="fontsize14">
                                {{$messagenotishow->message}}
                            </span>
                </div>
            </div>
        @endforeach
    </div>

</div> 
@stop

@push('scripts')
	<script>
		clearNoti()
	</script>
@endpush