
@extends('admin.template.template')

@section('title', 'Crear usuario')


@section('contenido')
    <h2>Crear usuario</h2>
    <hr>

    @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif



    <div class="row">
        <div class="col-md-12">

         <form method="post" action="{{route('users.store')}}">
            @csrf
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text"
                            name='name'
                            class='form-control'
                            value="{{old('name')}}"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email"
                            name='email'
                            class='form-control'
                            value='{{old('email')}}'
                        >
                    </div>

                    <!-- Rol -->
                    <div class="form-group col-md-6">
                        <label for="rol">Rol</label>

                        <select class="form-control" name="role_id">
                            @foreach($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password">Contraseña</label>
                        <input type='password' name='password' class='form-control'>
                    </div>

                    <div class="form-group col-md-12 text-right">
                        <input type='submit' value='Guardar' class='btn btn-success'>
                    </div>


                </div>
            </form>

        </div>
    </div>



@endsection
