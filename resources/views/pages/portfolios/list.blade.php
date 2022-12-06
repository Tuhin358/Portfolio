@extends('layouts.admin_layout')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                        <h1 class="mt-4">List Of portfolios</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"> List Of portfolios</li>
                        </ol>



                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Sub_Title</th>
                                <th scope="col">Big Image</th>
                                <th scope="col">Small Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">client</th>
                                <th scope="col">category</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @if(count($portfolios)> 0 )


                                @foreach ($portfolios as $portfolio)

                              <tr>
                                <th scope="row">{{$portfolio->id}}</th>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->sub_title}}</td>
                               <td>
                                    <img src="{{url($portfolio->big_image)}}" alt="big_image" style="height: 20vh">
                                </td>
                                <td>
                                    <img src="{{url($portfolio->small_image)}}" alt="big_image" style="height: 10vh">
                                </td>

                                <td>{{$portfolio->description}}</td>
                                <td>{{$portfolio->client}}</td>
                                <td>{{$portfolio->category}}</td>


                                <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{route('admin.portfolios.edit',$portfolio->id) }}" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-1 mx-4">
                                            <div class="span2">
                                                <form  action="{{route('admin.portfolios.destroy',$portfolio->id)}}" method="POST" >

                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">

                                            </form>
                                        </div>

                                    </div>

                                </td>
                              </tr>

                              @endforeach

                              @endif

                            </tbody>
                          </table>



                </main>
            </div>
@endsection
