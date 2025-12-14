@extends('template.layout')

@push('style')
    
@endpush

@section('content')
    <div class="col-7">
      @include('order.form')
    </div>
    <div class="col-5">
      @include('order.cart')
    </div>
@endsection

@push('script')
    @include('order.script')
@endpush