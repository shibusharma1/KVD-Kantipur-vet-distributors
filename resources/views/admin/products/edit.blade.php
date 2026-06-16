@extends('admin.master')
@section('title', 'Products')
@section('breadcrumb')
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
        List
    </a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" action="{{ route('products.update', $data->id) }}" method="post"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">
                        Edit Product
                    </span>
                </div>
                <div class="panel-body">
                    {{-- Category --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Category
                        </label>
                        <div class="col-lg-8">
                            <select class="form-control" name="cl_product_category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $data->cl_product_category_id ? 'selected' : '' }}>
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
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                        </div>
                    </div>
                    {{-- Slug --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Slug
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="slug" class="form-control" value="{{ $data->slug }}">
                        </div>
                    </div>
                    {{-- SKU --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            SKU
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="sku" class="form-control" value="{{ $data->sku }}">
                        </div>
                    </div>
                    {{-- Price --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Price
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="price" class="form-control" value="{{ $data->price }}">
                        </div>
                    </div>
                    {{-- External Link --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            External Link
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="external_link" class="form-control"
                                value="{{ $data->external_link }}">
                        </div>
                    </div>
                    {{-- Short Description --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Short Description
                        </label>
                        <div class="col-lg-8">
                            <textarea class="form-control" rows="4" name="short_description">{{ $data->short_description }}</textarea>
                        </div>
                    </div>
                    {{-- Description --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Description
                        </label>
                        <div class="col-lg-8">
                            <textarea class="form-control" rows="8" name="description">{{ $data->description }}</textarea>
                        </div>
                    </div>
                    {{-- Benefits Title --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Benefits Title
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="benefits_title" class="form-control"
                                value="{{ $data->benefits_title }}">
                        </div>
                    </div>
                    {{-- Benefits Description --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Benefits Description
                        </label>
                        <div class="col-lg-8">
                            <textarea class="form-control" rows="5" name="benefits_description">{{ $data->benefits_description }}</textarea>
                        </div>
                    </div>
                    {{-- Suitable For --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Suitable For
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="suitable_for" class="form-control"
                                value="{{ $data->suitable_for }}">
                        </div>
                    </div>
                    {{-- Product Type --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Product Type
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="product_type" class="form-control"
                                value="{{ $data->product_type }}">
                        </div>
                    </div>
                    {{-- Quality --}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Quality
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="quality" class="form-control" value="{{ $data->quality }}">
                        </div>
                    </div>
                    <hr>
                    <h4>SEO Information</h4>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Meta Title
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="meta_title" class="form-control"
                                value="{{ $data->meta_title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Meta Keyword
                        </label>
                        <div class="col-lg-8">
                            <input type="text" name="meta_keyword" class="form-control"
                                value="{{ $data->meta_keyword }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">
                            Meta Description
                        </label>
                        <div class="col-lg-8">
                            <textarea class="form-control" rows="4" name="meta_description">{{ $data->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="admin-form">
                {{-- <div class="sid_bvijay mb10">
            <footer>
               <div id="publishing-action">
                  <input type="submit"
                     class="btn btn-primary btn-lg"
                     value="Update">
               </div>
            </footer>
         </div> --}}
                <div class="sid_bvijay mb10">
                    <div class="hd_show_con">
                        <div class="publice_edi">
                            Status:
                            <a href="javascript:void(0);">
                                {{ $data->is_active ? 'Active' : 'Inactive' }}
                            </a>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-lg" value="Update">
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>
                <div class="sid_bvijay mb10">
                    <input type="number" name="sort_order" class="form-control" value="{{ $data->sort_order }}"
                        placeholder="Sort Order">
                </div>
                <div class="sid_bvijay mb10">
                    <label>
                        <input type="checkbox" name="is_featured" value="1"
                            {{ $data->is_featured ? 'checked' : '' }}>
                        Featured Product
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="show_in_home" value="1"
                            {{ $data->show_in_home ? 'checked' : '' }}>
                        Show In Home
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="is_active" value="1" {{ $data->is_active ? 'checked' : '' }}>
                        Active
                    </label>
                </div>
                <div class="sid_bvijay mb10">
                    <h4>Featured Image</h4>
                    <div class="hd_show_con">
                        @if ($data->featured_image)
                            <span class="image{{ $data->id }}">
                                <a href="#{{ $data->id }}" class="imagedelete">
                                    X
                                </a>
                                <img src="{{ asset('uploads/products/' . $data->featured_image) }}" width="250">
                            </span>
                            <hr>
                        @endif
                        <input type="file" name="featured_image">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('libraries')
    <script>
        $('.imagedelete').on('click', function(e) {

            e.preventDefault();

            if (!confirm('Are you sure to delete?'))
                return false;

            var csrf = $('meta[name="csrf-token"]').attr('content');

            var str = $(this).attr('href');

            var id = str.slice(1);

            $.ajax({

                type: 'DELETE',

                url: "{{ url('delete_product_image') . '/' }}" + id,

                data: {
                    _token: csrf
                },

                success: function() {

                    $('span.image' + id).remove();

                },

                error: function() {

                    alert('Error!');

                }

            });

        });
    </script>
@endsection
