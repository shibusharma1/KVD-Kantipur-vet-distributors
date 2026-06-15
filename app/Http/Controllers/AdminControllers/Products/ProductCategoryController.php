<?php

namespace App\Http\Controllers\AdminControllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $data = ProductCategory::orderBy('id', 'desc')->get();

        return view('admin.product-category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.product-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $data = $request->all();

        /*
        |--------------------------------------------------------------------------
        | Banner Upload
        |--------------------------------------------------------------------------
        */
        $banner = $request->file('banner_image');

        if ($request->hasFile('banner_image')) {

            $bannerFile = $banner->getClientOriginalName();
            $extension = $banner->getClientOriginalExtension();

            $bannerFile = explode('.', $bannerFile);

            $bannerName = Str::slug($bannerFile[0])
                . '-' . Str::random(40)
                . '.' . $extension;

            $destination = public_path('uploads/product-category/banner');

            $image = Image::make($banner->getRealPath());

            $width = $image->width();
            $height = $image->height();

            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination . '/' . $bannerName);

            $data['banner_image'] = $bannerName;
        }

        /*
        |--------------------------------------------------------------------------
        | Icon Upload
        |--------------------------------------------------------------------------
        */
        $icon = $request->file('icon');

        if ($request->hasFile('icon')) {

            $iconFile = $icon->getClientOriginalName();
            $extension = $icon->getClientOriginalExtension();

            $iconFile = explode('.', $iconFile);

            $iconName = Str::slug($iconFile[0])
                . '-' . Str::random(40)
                . '.' . $extension;

            $destination = public_path('uploads/product-category/icon');

            $image = Image::make($icon->getRealPath());

            $width = $image->width();
            $height = $image->height();

            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination . '/' . $iconName);

            $data['icon'] = $iconName;
        }

        $data['slug'] = Str::slug($request->slug);

        $data['show_in_menu'] = $request->show_in_menu ? 1 : 0;
        $data['show_in_home'] = $request->show_in_home ? 1 : 0;
        $data['is_active'] = $request->is_active ? 1 : 0;

        $result = ProductCategory::create($data);

        if ($result) {
            return redirect()->back()->with('message', 'Successfully added.');
        }

        return "Error";
    }

    public function edit($id)
    {
        $data = ProductCategory::find($id);

        return view('admin.product-category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $data = ProductCategory::find($id);

        /*
        |--------------------------------------------------------------------------
        | Banner Update
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('banner_image')) {

            if ($data->banner_image) {

                if (file_exists(public_path(
                    'uploads/product-category/banner/' .
                        $data->banner_image
                ))) {

                    unlink(
                        'uploads/product-category/banner/' .
                            $data->banner_image
                    );
                }
            }

            $file = $request->file('banner_image');

            $name = explode('.', $file->getClientOriginalName());

            $bannerName =
                Str::slug($name[0]) .
                '-' .
                Str::random(40) .
                '.' .
                $file->getClientOriginalExtension();

            $destination = public_path(
                'uploads/product-category/banner'
            );

            $image = Image::make($file->getRealPath());

            $image->save($destination . '/' . $bannerName);

            $data->banner_image = $bannerName;
        }

        if ($request->hasFile('icon')) {

            if ($data->icon) {

                if (file_exists(public_path(
                    'uploads/product-category/icon/' .
                        $data->icon
                ))) {

                    unlink(
                        'uploads/product-category/icon/' .
                            $data->icon
                    );
                }
            }

            $file = $request->file('icon');

            $name = explode('.', $file->getClientOriginalName());

            $iconName =
                Str::slug($name[0]) .
                '-' .
                Str::random(40) .
                '.' .
                $file->getClientOriginalExtension();

            $destination = public_path(
                'uploads/product-category/icon'
            );

            $image = Image::make($file->getRealPath());

            $image->save($destination . '/' . $iconName);

            $data->icon = $iconName;
        }

        $data->name = $request->name;
        $data->slug = Str::slug($request->slug);
        $data->description = $request->description;

        $data->meta_title = $request->meta_title;
        $data->meta_keyword = $request->meta_keyword;
        $data->meta_description = $request->meta_description;

        $data->show_in_menu = $request->show_in_menu ? 1 : 0;
        $data->show_in_home = $request->show_in_home ? 1 : 0;
        $data->is_active = $request->is_active ? 1 : 0;

        $data->sort_order = $request->sort_order;

        $data->save();

        return redirect()->back()
            ->with('message', 'Update Successful.');
    }

    public function destroy($id)
    {
        $data = ProductCategory::find($id);

        if ($data->banner_image) {

            if (file_exists(public_path(
                'uploads/product-category/banner/' .
                    $data->banner_image
            ))) {

                unlink(
                    'uploads/product-category/banner/' .
                        $data->banner_image
                );
            }
        }

        if ($data->icon) {

            if (file_exists(public_path(
                'uploads/product-category/icon/' .
                    $data->icon
            ))) {

                unlink(
                    'uploads/product-category/icon/' .
                        $data->icon
                );
            }
        }

        $data->delete();

        return 'Are you sure to delete?';
    }

    public function delete_banner($id)
    {
        $data = ProductCategory::find($id);

        if ($data->banner_image) {

            if (file_exists(public_path(
                'uploads/product-category/banner/' .
                    $data->banner_image
            ))) {

                unlink(
                    'uploads/product-category/banner/' .
                        $data->banner_image
                );
            }
        }

        $data->banner_image = null;

        $data->save();

        return response('Delete Successful.');
    }

    public function delete_icon($id)
    {
        $data = ProductCategory::find($id);

        if ($data->icon) {

            if (file_exists(public_path(
                'uploads/product-category/icon/' .
                    $data->icon
            ))) {

                unlink(
                    'uploads/product-category/icon/' .
                        $data->icon
                );
            }
        }

        $data->icon = null;

        $data->save();

        return response('Delete Successful.');
    }
}
