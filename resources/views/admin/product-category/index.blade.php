@extends('admin.master')

@section('title','Product Category')

@section('breadcrumb')
<a href="{{ route('products_categories.create') }}"
   class="btn btn-primary btn-sm">
    Create
</a>
@endsection

@section('content')

<div class="tray tray-center">

    <div class="panel">

        <div class="panel-body ph20">

            <div class="table-responsive mhn20 mvn15">

                <table class="table admin-form theme-warning fs13">

                    <thead>
                    <tr class="bg-light">

                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Order</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($data as $row)

                        <tr class="id{{$row->id}}">

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $row->name }}</td>

                            <td>{{ $row->slug }}</td>

                            <td>{{ $row->sort_order }}</td>

                            <td>

                                <a href="{{ route('products_categories.edit',$row->id) }}">
                                    Edit
                                </a>

                                |

                                <a href="#{{$row->id}}"
                                   class="btn-delete">
                                    Delete
                                </a>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection

@section('scripts')

<script>

$('.btn-delete').on('click',function(e){

    e.preventDefault();

    if(!confirm('Are you sure to delete?'))
        return false;

    var csrf = $('meta[name="csrf-token"]').attr('content');

    var str = $(this).attr('href');

    var id = str.slice(1);

    $.ajax({

        type:'DELETE',

        url:"{{ url('admin/products_categories') . '/' }}" + id,

        data:{
            _token:csrf
        },

        success:function(){

            $('tbody tr.id'+id).remove();

        }

    });

});

</script>

@endsection