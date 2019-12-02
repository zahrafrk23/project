@extends('home.master')

@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                   <div class="alert alert-success" style="font: 11px isans;text-align: right;">پرداخت با موفقیت انجام شد</div>
                </div>

                <hr>
                <div class="alert alert-info" style="text-align: right;font: 12px isans;">شماره تراکنش : {{$ref_id}}</div>
            </div>
        </div>
    </div>

@endsection