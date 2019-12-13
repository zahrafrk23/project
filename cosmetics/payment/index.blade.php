@extends('admin.Layout.master')
@section('content')
    <div class="col-lg-12">
        <h3>مدیریت سفارش ها</h3>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped product-table">
            <thead>
            <tr>
                <th scope="col">نام </th>
                <th scope="col">وضعیت پرداخت</th>
                <th scope="col">مبلغ پرداخت شده</th>
                <th scope="col">تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{\App\User::find($payment->user_id)->name}}</td>
                    <td>
                        @if($payment->status == 0)
                       <span class="label label-danger"> پرداخت نشده</span>
                        @endif
                            @if($payment->status == 1)
                               <span class="label label-success"> پرداخت شده</span>
                            @endif
                    </td>
                    <td> {{$payment->price}}  تومان  </td>
                    <td>
                        <a href="{{route('admin.payment.show',['id'=>$payment->id])}}">مشاهده جزئیات</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection