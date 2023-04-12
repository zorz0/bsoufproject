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
                <span>جميع المنتجات</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> جميع المنتجات
        {{-- <small>managed datatable samples</small> --}}
    </h3>
    <!-- END PAGE TITLE-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> المنتجات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn sbold green"> أضافة منتج
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">أدوات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-print"></i> طباعة </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-file-pdf-o"></i> حفظ كـ PDF </a>
                                        </li>
                                        <li>
                                            <a href="{{url('addProduct')}}">
                                                <i class="fa fa-file-excel-o"></i> استيراد إلى Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th> صورة المنتج </th>
                                <th> اسم المنتج </th>
                                <th> سعر المنتج</th>
                                <th> الكمية </th>
                                <th> اجراءات </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img class="item-pic rounded" src="{{asset('/assets')}}/pages/media/users/avatar4.jpg">
                                </td>
                                <td> منتج 1 </td>
                                <td>
                                    160 د.أ
                                </td>
                                <td class="center"> 100 </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> اجراءات
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-docs"></i> تعديل المنتج </a>
                                            </li>
                                            <li>
                                                <a href="{{url('addProduct')}}">
                                                    <i class="icon-trash"></i> حذف </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
<!-- END CONTENT -->
@endsection
@push('custom-scripts')
<script src="{{asset('/assets')}}/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
@endpush
