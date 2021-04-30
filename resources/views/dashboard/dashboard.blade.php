@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<main class="col-span-10 xl:col-span-10 2xl:col-span-10 lg:col-span-10 md:col-span-9 sm:col-span-9 col-start-3 px-6 bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Panel de Administración</h3>
        <input type="hidden" id="rutaListar" value="{{ route('admin.index') }}">
        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <h2 class="text-gray-700 text-2xl font-medium">Bienvenido al Panel de Administración</h2>
                </div>
            </div>
            <div class="mt-8">

            </div>
        </div>
    </div>
</main>


@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
@stop

@section('vendor-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://nightly.datatables.net/select/js/dataTables.select.min.js"></script>
<script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('js/tablaEstado.js') }}"></script>
@stop