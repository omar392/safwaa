@extends('dashboard.layouts.master')
@section('pageTitle', 'العملاء')
@section('content')
 <!--Start Main content container-->
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارةالعملاء والموكلين</a></li>
                <li class="bring_right"><a href="">عرض العملاء والموكلين</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل العملاء والموكلين</h1>

            <div class="wrap">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>اسم العميل بالعربية</td>
                        <td>Customer Name En</td>
                        <td>اللوجو الخاص بالعميل</td>
                        <td>التحكم</td>
                    </tr>
                    @foreach ($all_data as $key=>$customers)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$customers->name_ar}}</td>
                        <td>{{$customers->name_en}}</td>
                        <td><img src="{{(!empty($customers->customer_logo))?url('upload/customer_logo/'.$customers->customer_logo):url('upload/no_image.jfif')}}" width="120px" height="130px" alt="customer_logo"></td>
                        <td>
                            <a href="{{route('customers.edit',$customers->id)}}" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                               data-placement="top" title="تعديل"></a>
                            <a href="{{route('customers.delete',$customers->id)}}" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                               data-placement="top" title="حذف"></a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!--/End Main content container-->
@endsection