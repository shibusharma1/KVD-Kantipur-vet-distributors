@extends('admin.master')

@section('title','Products')

@section('breadcrumb')
<a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
    List
</a>
@endsection

@section('content')

<form class="form-horizontal"
      role="form"
      action="{{ route('products.store') }}"
      method="post"
      enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="col-md-8">

        <div class="panel">

            <div class="panel-heading">
                <span class="panel-title">
                    Create Product
                </span>
            </div>

            <div class="panel-body">

                {{-- Category --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Category
                    </label>

                    <div class="col-lg-8">

                        <select class="form-control"
                                name="cl_product_category_id">

                            <option value="">
                                Select Category
                            </option>

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>
                </div>

                {{-- Product Name --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Product Name
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="name"
                               class="form-control">
                    </div>
                </div>

                {{-- Slug --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Slug
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="slug"
                               class="form-control">
                    </div>
                </div>

                {{-- SKU --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        SKU
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="sku"
                               class="form-control">
                    </div>
                </div>

                {{-- Price --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Price
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="price"
                               class="form-control">
                    </div>
                </div>

                {{-- External Link --}}
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        External Link
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="external_link"
                               class="form-control">
                    </div>
                </div>

                {{-- Short Description --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Short Description
                    </label>

                    <div class="col-lg-8">

                        <textarea
                            class="form-control"
                            rows="4"
                            name="short_description"></textarea>

                    </div>

                </div>

                {{-- Description --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Description
                    </label>

                    <div class="col-lg-8">

                        <textarea
                            class="form-control"
                            rows="8"
                            name="description"></textarea>

                    </div>

                </div>

                {{-- Benefits Title --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Benefits Title
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="benefits_title"
                               class="form-control">

                    </div>

                </div>

                {{-- Benefits Description --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Benefits Description
                    </label>

                    <div class="col-lg-8">

                        <textarea
                            class="form-control"
                            rows="5"
                            name="benefits_description"></textarea>

                    </div>

                </div>

                {{-- Suitable For --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Suitable For
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="suitable_for"
                               class="form-control">

                    </div>

                </div>

                {{-- Product Type --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Product Type
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="product_type"
                               class="form-control">

                    </div>

                </div>

                {{-- Quality --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Quality
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="quality"
                               class="form-control">

                    </div>

                </div>

                <hr>

                <h4>SEO Information</h4>

                {{-- Meta Title --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Meta Title
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="meta_title"
                               class="form-control">

                    </div>

                </div>

                {{-- Meta Keyword --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Meta Keyword
                    </label>

                    <div class="col-lg-8">

                        <input type="text"
                               name="meta_keyword"
                               class="form-control">

                    </div>

                </div>

                {{-- Meta Description --}}
                <div class="form-group">

                    <label class="col-lg-3 control-label">
                        Meta Description
                    </label>

                    <div class="col-lg-8">

                        <textarea
                            class="form-control"
                            rows="4"
                            name="meta_description"></textarea>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="admin-form">

            {{-- Publish --}}
            <div class="sid_bvijay mb10">

                <div class="hd_show_con">

                    <div class="publice_edi">
                        Status:
                        <a href="avoid:javascript;"
                           data-toggle="collapse"
                           data-target="#publish_1">
                            Active
                        </a>
                    </div>

                </div>

                <footer>

                    <div id="publishing-action">

                        <input type="submit"
                               class="btn btn-primary btn-lg"
                               value="Publish">

                    </div>

                    <div class="clearfix"></div>

                </footer>

                <div class="clearfix"></div>

            </div>

            {{-- Sort Order --}}
            <div class="sid_bvijay mb10">

                <input type="number"
                       name="sort_order"
                       class="form-control"
                       placeholder="Sort Order">

            </div>

            {{-- Options --}}
            <div class="sid_bvijay mb10">

                <label>

                    <input type="checkbox"
                           name="is_featured"
                           value="1">

                    Featured Product

                </label>

                <br>

                <label>

                    <input type="checkbox"
                           name="show_in_home"
                           value="1">

                    Show In Home

                </label>

                <br>

                <label>

                    <input type="checkbox"
                           name="is_active"
                           value="1"
                           checked>

                    Active

                </label>

            </div>

            {{-- Featured Image --}}
            <div class="sid_bvijay mb10">

                <h4>
                    Featured Image
                </h4>

                <div class="hd_show_con">

                    <input type="file"
                           name="featured_image">

                </div>

            </div>

        </div>

    </div>

</form>

@endsection