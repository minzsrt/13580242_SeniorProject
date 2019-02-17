@extends('layouts.mainListPackage')
@section('page_title', 'Profile')
@section('content')

    <form action="/createPackagecardCategory" method="post">
    {{ csrf_field() }}

        <span class="all_more_link">ประเภทงาน</span>
        <div class="row form-group" id="radioBtn">
            @foreach($categories as $category)
            <a class="col-md" data-toggle="id_category" data-title="{{$category->id}}">
                <label class="container_radio">
                    <div class="row height60">
                        <div class="col padtop20">
                            <h3 class="fontsize14">{{$category->name_category}}</h3>
                        </div>
                    </div>
                    <input type="radio" name="radio" {{ $loop->first ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                </label>
            </a>
            @endforeach
    		<input type="hidden" name="id_category" id="id_category">
        </div>
        <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>
        </form>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    jQuery(function($) {


        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
        });
    });
    </script>
@stop