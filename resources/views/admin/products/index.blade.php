@extends('admin.master')

@section('title', 'Products')

@section('breadcrumb')
    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
        Create
    </a>
@endsection

@section('content')

    <div class="tray tray-center">

        <div class="panel">

            <div class="panel-body ph20">

                <div class="tab-content">

                    <div class="tab-pane active">

                        <div class="table-responsive mhn20 mvn15">

                            <table class="table admin-form theme-warning fs13">

                                <thead>

                                    <tr class="bg-light">

                                        <th>SN</th>

                                        <th>Image</th>

                                        <th>Product Name</th>

                                        <th>Category</th>

                                        <th>Price</th>

                                        <th>Featured</th>

                                        <th>Status</th>

                                        <th class="text-left">
                                            Action
                                        </th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @if (count($data) > 0)

                                        @foreach ($data as $row)
                                            <tr class="id{{ $row->id }}">

                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>

                                                    @if ($row->featured_image)
                                                        <img src="{{ asset('uploads/products/' . $row->featured_image) }}"
                                                            width="60">
                                                    @endif

                                                </td>

                                                <td>

                                                    {{ $row->name }}

                                                </td>

                                                <td>

                                                    {{ optional($row->category)->name }}

                                                </td>

                                                <td>

                                                    {{ $row->price }}

                                                </td>

                                                <td>

                                                    @if ($row->is_featured)
                                                        <span class="label label-success">
                                                            Yes
                                                        </span>
                                                    @else
                                                        <span class="label label-default">
                                                            No
                                                        </span>
                                                    @endif

                                                </td>

                                                <td>

                                                    @if ($row->is_active)
                                                        <span class="label label-success">
                                                            Active
                                                        </span>
                                                    @else
                                                        <span class="label label-danger">
                                                            Inactive
                                                        </span>
                                                    @endif

                                                </td>

                                                <td class="text-left">

                                                    <a href="{{ route('products.edit', $row->id) }}">
                                                        Edit
                                                    </a>

                                                    |

                                                    <a href="#{{ $row->id }}" class="btn-delete">
                                                        Delete
                                                    </a>

                                                </td>

                                            </tr>
                                        @endforeach

                                    @endif

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')

    <script>
        jQuery(document).ready(function() {

            $('.btn-delete').on('click', function(e) {

                e.preventDefault();

                if (!confirm('Are you sure to delete?'))
                    return false;

                var csrf =
                    $('meta[name="csrf-token"]')
                    .attr('content');

                var str =
                    $(this).attr('href');

                var id =
                    str.slice(1);

                $.ajax({

                    type: 'DELETE',

                    url: "{{ url('admin/products') . '/' }}" + id,

                    data: {
                        _token: csrf
                    },

                    success: function(data) {

                        $('tbody tr.id' + id)
                            .remove();

                    },

                    error: function(data) {

                        alert('Error occurred!');

                    }

                });

            });

        });
    </script>

@endsection
