@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('content')

@include('layouts.style_form')

<div class="row">
    <div class="col-12 col-lg-9 mx-auto">
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0" style="text-align: center;">@yield('title')</h4>
                </div>
                <hr>
                <div class="form-body">
                    <form action=@yield('form-action') method="POST" enctype="multipart/form-data">
                        @csrf
                        @yield('fields')

                        {{--<div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label" for="gridCheck2">I agree <a target="_blank" href="{{ route('terms') }}">terms &amp; conditions</a></label>
                                </div>
                            </div>
                        </div>--}}                      
                    
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-light px-4" id="submit" disabled>Submit</button>
                            </div>
                        </div>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

{{--<script type="text/javascript">
    // check if gridCheck2 is checked
    document.getElementById('gridCheck2').addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('submit').disabled = false;            
        } else {
            document.getElementById('submit').disabled = true;
        }
    });
</script>--}}
@endsection

