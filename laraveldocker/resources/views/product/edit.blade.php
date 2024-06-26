@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати каегорію</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Головна</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('product.update', $product->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" value="{{$product->title ?? old('title')}}" class="form-control" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{$product->description ?? old('description')}}" class="form-control" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" name="content" value="{{$product->content ?? old('content')}}" class="form-control" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" name="preview_image" value="{{$product->preview_image ?? old('preview_image')}}" class="form-control" placeholder="Зображення">
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" value="{{$product->price ?? old('price')}}" class="form-control" placeholder="Ціна">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" value="{{$product->count ?? old('count')}}" class="form-control" placeholder="Кількість на складі">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редагувати">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
