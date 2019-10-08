<!-- kada smo na create,i u zavisnosti akcije imamo poruku(ta prikazana poruka je odavde) -->

@if (count($errors) > 0)                <!-- Ako ima erora,prodje kroz svaki i ispise sta je problem -->
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
