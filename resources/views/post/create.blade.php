@extends('layout.layouts')

@section('titulo')
    Añadir dulce
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="row">
        <div class="col-5 p-5 text-center m-2 rounded-2">
            <form action="{{ route('imagenes') }}" id="dropzone" method="POST" enctype="multipart/form-data"
                class="dropzone w-100 h-100 rounded border-1 d-flex">
                @csrf
            </form>

        </div>

        <div class="col-6 p-5 text-center m-2 rounded-2 border">
            <h2 class="mb-3">Crear producto</h2>
            <form action="{{ route('post.store') }}" method="POST" novalidate>
                @csrf
                <div class="form-outline m-3">
                    <input type="text" id="typeText" class="form-control" name="titulo" />
                    <label class="form-label" for="typeText">Nombre</label>
                </div>
                @error('titulo')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <div class="form-outline m-3">
                    <input class="form-control" name="descripcion" id="textAreaExample" rows="4" />
                    <label class="form-label" for="textAreaExample">Precio</label>
                </div>
                @error('descripcion')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <div>
                    <input name="imagen" id="imagen" type="hidden" value={{ old('imagen') }} />
                </div>
                @error('imagen')
                    <p style="color:red">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-block mb-4"
                    style="    background-color: rgba(203, 46, 156, 0.962); color:#fff;     border-radius: 30px;
                    ">
                    Crear ahora
                </button>
            </form>
        </div>
    @endsection
