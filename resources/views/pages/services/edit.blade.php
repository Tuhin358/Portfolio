@extends('layouts.admin_layout')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                        <h1 class="mt-4">Create</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Create</li>
                        </ol>

                        <form action="{{ route('admin.services.update',$services->id) }}  " method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- {{ route('admin.services.store') }}   --}}
                        <div class="row">

                            <div class="form-group col-md-4 mt-3">
                                <div class="mb-3">
                                    <label for="Icon"><h4>Font Awsome Icon</h4></label>
                                    <input type="text" class="form-control" id="icon" name="icon" value="{{ $services->icon }}" >
                                </div>

                                <div class="mb-5">
                                    <label for="title"><h4>Title</h4></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $services->title }}" >
                                </div>
                                <div class="mb-5">
                                    <label for="description"><h4>Description</h4></label>
                                    <textarea type="text" class="form-control" id="description" name="description"  > {{ $services->description }}</textarea>
                                </div>


                             </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5">

                    </div>

                </form>
                </main>
            </div>
@endsection
