@extends('layouts.admin_master')
@extends('layouts.sidemenu')
@section('content')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{url('/')}}">الرئيسية</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('orders')}}">الطلبات</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>اضافة طلب</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> اضافة طلب
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form p-3">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3"> الاسم العميل</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="احمد حسن علي">
                                <span class="help-block"> اسم العميل يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">رقم الهاتف</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="0123456789">
                                <span class="help-block"> رقم هاتف العميل يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">عنوان العميل</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="الاسكندرية , مصر">
                                <span class="help-block">عنوان العميل يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-md-3">قيمة الطلب</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="1500">
                                <span class="help-block">قيمة مبلغ الطلب يكتب هنا </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6" style="padding-top: 20px;">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">اضافة</button>
                                        {{-- <button type="button" class="btn default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-top: 20px;"> </div>
                        </div>
                    </div>
        </form>

        <!-- END FORM-->
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
<script src="{{asset('/assets')}}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
<script src="{{asset('/assets')}}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

@endpush
