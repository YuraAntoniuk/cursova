@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Додати </h1>
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
                <form action="{{route('universe.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="прізвище">
                    </div>
                    <div class="form-group">
                        <input type="text" name="load" class="form-control" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kafedra" class="form-control" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Додати">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
