@extends('home.master')
@section('title','پنل کاربری')
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs">
                    <ul>
                        <li class="active">سفارش ها</li>
                        <li>پروفایل</li>
                        <div class="tab-child">
                            <section style="display: block !important;">
                                @if($payments->count() == 0)
                                    <span class="alert alert-info"
                                          style="float: right;width: 100%;text-align: right">سفارشی یافت نشد</span>
                                @else
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">مقدار پرداخت</th>
                                            <th scope="col">وضعیت پرداخت</th>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align: right">
                                        @foreach($payments as  $item)

                                            <tr>
                                                <td>  {{$item->price}} تومان</td>
                                                <td>
                                                    @if($item->status == 0)
                                                        <span class="btn btn-danger"
                                                              style="font-size: 10px !important;;">پرداخت نشده</span>
                                                    @else
                                                        <span class="btn btn-success"
                                                              style="font-size: 10px !important;">پرداخت شده</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </section>
                            <section>
                                <span class="alert alert-primary" style="float: right">نام شما : </span>
                                <span class="alert alert-info" style="float: right;width: 90%">{{auth()->user()->name}}
                                <button type="button" style="float:left;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
ویرایش
</button>
                                </span>
                                <span class="alert alert-primary" style="float: right">ایمیل  شما : </span>
                                <span class="alert alert-info" style="float: right;width: 90%">{{auth()->user()->email}}</span>
                            </section>
                        </div>
                    </ul>
                </div>





            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{route('user.panel.update',auth()->user()->id)}}" method="post">
        @method('PUT')
        @csrf
    <input name="name" placeholder="نام جدید" />
    <button class="btn btn-primary">ثبت</button>
    </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection