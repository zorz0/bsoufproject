


<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <input value="Auth::user()->id" type="text" hidden>
    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-3"> </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" placeholder="قهوة مثلا">
                        <span class="help-block"> </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-3">الخصم</label>
                    <div class="col-md-9">
                        <input type="number" name="discount_price" class="form-control" placeholder="100">
                        <span class="help-block"> الخصم علي المنتج يكتب هنا </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-3">السعر</label>
                    <div class="col-md-9">
                        <input type="number" name="price" class="form-control" placeholder="100">
                        <span class="help-block">سعر المنتج يكتب هنا </span>
                    </div>
                </div>
            </div>
        </form>
