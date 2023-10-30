@extends('backend.layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">產品分類</h1>
            <h2>{{ $productCategory->name }}</h2>
        </div>

        <button onclick="add_row()" class="btn btn-success mb-3">
            <i class="fa-solid fa-circle-plus"></i>
        </button>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" data-order='[[ 0, "desc" ]]' id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10%">ID</th>
                                <th style="width: 70%">分類名稱</th>
                                <th style="width: 10%">編輯</th>
                                <th style="width: 10%">刪除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_categories as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <button class="btn btn-primary" onclick="edit_row({{ $value->id }})">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger" onclick="delete_row({{ $value->id }})">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
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


@section('js')
<script>
    $(function(){
        $('#dataTable').DataTable({
            "columnDefs": [{
                targets: [3, 4],
                orderable: false
            }],
            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "/admin/zh-HANT.json"
            }
        })

    })

    const edit_row = (categoriId) => {
        location.href = '/backend/product_category/detail/' + categoriId + '/edit';
    }

    const add_row = (categoriId) => {
        location.href = '/backend/product_category/detail/' + categoriId + '/create';
    }

    const delete_row = (categoriId) => {
        if(confirm('確定刪除？')){
            location.href = '/backend/product_category/detail/delete/' + categoriId;
        }
    }
</script>
@endsection
