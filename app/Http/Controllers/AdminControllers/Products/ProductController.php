<?php

namespace App\Http\Controllers\AdminControllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;

class ProductController extends Controller
{
    /**
     * Display listing
     */
    public function index()
    {
        $data = Product::with('category')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.products.index', compact('data'));
    }

    /**
     * Create page
     */
    public function create()
    {
        $categories = ProductCategory::orderBy('name')->get();

        return view(
            'admin.products.create',
            compact('categories')
        );
    }

    /**
     * Store Product
     */
    public function store(Request $request)
    {
        $request->validate([
            'cl_product_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'benefits_title' => 'required'
        ]);

        $data = $request->all();

        $file = $request->file('featured_image');

        /*
        |--------------------------------------------------------------------------
        | Upload Product Image
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('featured_image')) {

            $product_file = $request->file('featured_image')
                ->getClientOriginalName();

            $extension = $request->file('featured_image')
                ->getClientOriginalExtension();

            $product_file = explode('.', $product_file);

            $file_name =
                Str::slug($product_file[0])
                . '-'
                . Str::random(40)
                . '.'
                . $extension;

            $destinationOriginal =
                public_path('uploads/products');

            $product_picture =
                Image::make($file->getRealPath());

            $width =
                Image::make($file->getRealPath())->width();

            $height =
                Image::make($file->getRealPath())->height();

            $product_picture->resize(
                $width,
                $height,
                function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(
                $destinationOriginal . '/' . $file_name
            );

            $data['featured_image'] = $file_name;
        }

        $data['slug'] = Str::slug($request->slug);

        $data['is_featured']
            = $request->is_featured ? 1 : 0;

        $data['show_in_home']
            = $request->show_in_home ? 1 : 0;

        $data['is_active']
            = $request->is_active ? 1 : 0;

        $result = Product::create($data);

        if ($result) {

            return redirect()
                ->back()
                ->with(
                    'message',
                    'Successfully added.'
                );
        }

        return "Error";
    }

    /**
     * Edit Page
     */
    public function edit($id)
    {
        $data = Product::find($id);

        $categories = ProductCategory::orderBy('name')
            ->get();

        return view(
            'admin.products.edit',
            compact(
                'data',
                'categories'
            )
        );
    }

    /**
     * Update Product
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cl_product_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'benefits_title' => 'required'
        ]);

        $data = Product::find($id);

        $file = $request->file('featured_image');

        /*
        |--------------------------------------------------------------------------
        | Update Product Image
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('featured_image')) {

            if ($data->featured_image) {

                if (
                    file_exists(
                        public_path(
                            'uploads/products/'
                                . $data->featured_image
                        )
                    )
                ) {

                    unlink(
                        'uploads/products/'
                            . $data->featured_image
                    );
                }
            }

            $product_file =
                $request->file('featured_image')
                ->getClientOriginalName();

            $extension =
                $request->file('featured_image')
                ->getClientOriginalExtension();

            $product_file =
                explode('.', $product_file);

            $file_name =
                Str::slug($product_file[0])
                . '-'
                . Str::random(40)
                . '.'
                . $extension;

            $destinationOriginal =
                public_path('uploads/products');

            $product_picture =
                Image::make($file->getRealPath());

            $width =
                Image::make($file->getRealPath())->width();

            $height =
                Image::make($file->getRealPath())->height();

            $product_picture->resize(
                $width,
                $height,
                function ($constraint) {
                    $constraint->aspectRatio();
                }
            )->save(
                $destinationOriginal
                    . '/'
                    . $file_name
            );

            $data->featured_image = $file_name;
        }

        $data->cl_product_category_id
            = $request->cl_product_category_id;

        $data->name
            = $request->name;

        $data->slug
            = Str::slug($request->slug);

        $data->sku
            = $request->sku;

        $data->short_description
            = $request->short_description;

        $data->description
            = $request->description;

        $data->benefits_title
            = $request->benefits_title;

        $data->benefits_description
            = $request->benefits_description;

        $data->suitable_for
            = $request->suitable_for;

        $data->product_type
            = $request->product_type;

        $data->quality
            = $request->quality;

        $data->price
            = $request->price;

        $data->external_link
            = $request->external_link;

        $data->meta_title
            = $request->meta_title;

        $data->meta_keyword
            = $request->meta_keyword;

        $data->meta_description
            = $request->meta_description;

        $data->is_featured
            = $request->is_featured ? 1 : 0;

        $data->show_in_home
            = $request->show_in_home ? 1 : 0;

        $data->is_active
            = $request->is_active ? 1 : 0;

        $data->sort_order
            = $request->sort_order;

        $data->save();

        return redirect()
            ->back()
            ->with(
                'message',
                'Update Successful.'
            );
    }

    /**
     * Delete Product
     */
    public function destroy($id)
    {
        $data = Product::find($id);

        if ($data->featured_image) {

            if (
                file_exists(
                    public_path(
                        'uploads/products/'
                            . $data->featured_image
                    )
                )
            ) {

                unlink(
                    'uploads/products/'
                        . $data->featured_image
                );
            }
        }

        $data->delete();

        return 'Are you sure to delete?';
    }

    /**
     * Delete Product Image
     */
    public function delete_image($id)
    {
        $data = Product::find($id);

        if ($data->featured_image) {

            if (
                file_exists(
                    public_path(
                        'uploads/products/'
                            . $data->featured_image
                    )
                )
            ) {

                unlink(
                    'uploads/products/'
                        . $data->featured_image
                );
            }
        }

        $data->featured_image = NULL;

        $data->save();

        return response(
            'Delete Successful.'
        );
    }

    /**
     * Show Product
     */
    public function show($id)
    {
        //
    }
}
