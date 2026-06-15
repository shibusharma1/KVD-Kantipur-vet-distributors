@extends('admin.master')

@section('title','Product Category')

@section('breadcrumb')
<a href="{{ route('products_categories.index') }}" class="btn btn-primary btn-sm">
    List
</a>
@endsection

@section('content')

<form class="form-horizontal"
      action="{{ route('products_categories.store') }}"
      method="post"
      enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="col-md-8">

        <div class="panel">

            <div class="panel-heading">
                <span class="panel-title">
                    Create Product Category
                </span>
            </div>

            <div class="panel-body">

                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Name
                    </label>

                    <div class="col-lg-8">
                        <input type="text"
                               name="name"
                               class="form-control">
                    </div>
                </div>

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

                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Description
                    </label>

                    <div class="col-lg-8">
                        <textarea class="form-control"
                                  rows="5"
                                  name="description"></textarea>
                    </div>
                </div>

                <hr>

                <h4>SEO Information</h4>

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

                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Meta Description
                    </label>

                    <div class="col-lg-8">
                        <textarea class="form-control"
                                  rows="4"
                                  name="meta_description"></textarea>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="admin-form">

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

            <div class="sid_bvijay mb10">

                <label class="field text">

                    <input type="number"
                           name="sort_order"
                           class="form-control"
                           placeholder="Sort Order">

                </label>

            </div>

            <div class="sid_bvijay mb10">

                <label>
                    <input type="checkbox"
                           name="show_in_menu"
                           value="1"
                           checked>

                    Show In Menu
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

            <div class="sid_bvijay mb10">

                <h4>Banner Image</h4>

                <input type="file"
                       name="banner_image">

            </div>

            <div class="sid_bvijay mb10">

                <h4>Icon</h4>

                <input type="file"
                       name="icon">

            </div>

        </div>

    </div>

</form>

@endsection