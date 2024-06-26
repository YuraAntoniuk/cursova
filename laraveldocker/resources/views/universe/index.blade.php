@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Університет</h1>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('universe.create')}}" class="btn btn-primary">Додати</a>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ім'я</th>
                                        <th>Прізвище</th>
                                        <th>Ставка</th>
                                        <th>Кафедра</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($universes as $universe)
                                    <?php if(($universe->load)<($universes_max-15)){
                                            echo "<tr>
                                       <td style='background-color:red'> $universe->id </td>
                                       <td style='background-color:red'><a href=' route('universe.show', $universe->id) '> $universe->name </a></td>
                                       <td style='background-color:red'> $universe->surname </td>
                                       <td style='background-color:red'> $universe->load </td>
                                       <td style='background-color:red'> $universe->kafedra </td>
                                     </tr>";
                                        }elseif (($universe->load)>(1000)){
                                            echo "<tr>
                                       <td style='background-color:green'> $universe->id </td>
                                       <td style='background-color:green'><a href=' route('universe.show', $universe->id) '> $universe->name </a></td>
                                       <td style='background-color:green'> $universe->surname </td>
                                       <td style='background-color:green'> $universe->load </td>
                                       <td style='background-color:green'> $universe->kafedra </td>
                                     </tr>";}else{
                                            echo "<tr>
                                       <td> $universe->id </td>
                                       <td><a href=' route('universe.show', $universe->id) '> $universe->name </a></td>
                                       <td> $universe->surname </td>
                                       <td> $universe->load </td>
                                       <td> $universe->kafedra </td>
                                     </tr>";
                                        }
                                    ?>
                                    @endforeach
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{$universes_max}}" class="form-control" placeholder="Назва">
                                    </div>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
