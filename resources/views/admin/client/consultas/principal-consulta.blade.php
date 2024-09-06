@extends('layouts.admin')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Listado</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Consultas</a></li>
                                <li class="breadcrumb-item active">Listado</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-sidebar">
                    @include('admin.client.consultas.partials.module-listado')
                </div>
                <div class="file-manager-content w-100 p-4 pb-0">
                    @include('admin.client.consultas.partials.filtros-listado')
                    @include('admin.client.consultas.partials.listado')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
