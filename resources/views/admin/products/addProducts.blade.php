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
                <a href="#">المنتجات</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>اضافة منتج</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> اضافة منتج
    </h3>
    <!-- END PAGE TITLE-->
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">نموذج الاسم</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="قهوة مثلا">
                                <span class="help-block"> اسم المنتج يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">الكمية</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="100">
                                <span class="help-block"> كمية المنتج يكتب هنا </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">السعر</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="100">
                                <span class="help-block">سعر المنتج يكتب هنا </span>
                            </div>
                        </div>
                    </div>

                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">الفئة</label>
                                <div class="col-md-9">
                                    <select class="form-control" data-placeholder="اختر فئة" tabindex="1">
                                        <option value="1">فئة 1</option>
                                        <option value="2">فئة 2</option>
                                        <option value="3">فئة 5</option>
                                        <option value="4">فئة 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">وصف المنتج</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">الصورة الرئيسية</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" name="files[]" class="dropify" multiple/>

                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 pb-15">الصور</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" accept="image/*" name="files[]" class="dropify" multiple/>

                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">اضافة</button>
                                        {{-- <button type="button" class="btn default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
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
