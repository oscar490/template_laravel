@extends('admin.template.template')

@section('title', 'Usuarios')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">

@endsection

@section('contenido')
    <h2>Usuarios</h2>
    <hr>

    <div class="row">
        <div class="col-md-12 mt-2">
            <table class="table" id="users_index">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de creación</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
        </div>
    </div>

    @section('js')
        <script src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js'></script>


        <script>
            $(document).ready(function() {
                $('#users_index').DataTable();

            })
        </script>
    @endsection


@endsection
