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
                    <a href="index.html">الرئيسية</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="{{ url('users') }}">الاعدادات</a>
                    <i class="fa fa-circle"></i>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> اعدادات الموقع
        </h3>
        <!-- END PAGE TITLE-->
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form role="form" action="#" method="POST"
                enctype="multipart/">
                <div class="form-group col-md-4">
                    <label class="control-label">اسم الموقع</label>
                    <input type="text" placeholder="الاسم بالكامل" class="form-control" name="title" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">رقم الهاتف</label>
                    <input type="text" placeholder="0123456789" name="phone" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">العملة الرئيسية</label>
                    <input type="text" placeholder="د.أ" name="currency" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">الشعار</label>
                    <input type="file" accept="image/" name="logo" />
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">الصورة المصغرة بالرابط</label>
                    <input type="file" accept="image/" name="favicon" />
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">صور البانر</label>
                    <input type="file" accept="image/*" name="panerImgs" class="dropify" multiple />
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">البريد الالكتروني للموقع</label>
                    <input type="email" placeholder="User@gmail.com" name="email" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">العنوان</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">فيسبوك</label>
                    <input type="text" class="form-control" name="facebook">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">تويتر</label>
                    <input type="text" class="form-control" name="twitter">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">انستجرام</label>
                    <input type="text" class="form-control" name="instagram">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">يوتيوب</label>
                    <input type="text" class="form-control" name="youtube">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">عن الموقع</label>
                    <textarea class="ckeditor form-control" name="description" rows="6"></textarea>
                </div>
                <button type="submit" class="btn green"> حفظ </button>
            </form>

            <!-- END FORM-->
        </div>
    </div>
    <!-- END CONTENT BODY -->
    <!-- END CONTENT -->
@endsection
@push('custom-scripts')
    <script src="{{ asset('/assets') }}/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
    <script src="{{ asset('/assets') }}/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
    <script src="{{ asset('/assets') }}/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
@endpush
