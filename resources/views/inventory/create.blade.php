@extends('layouts.app')

@section('template_title')
    Create Inventory
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Inventory</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventories.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('inventory.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
