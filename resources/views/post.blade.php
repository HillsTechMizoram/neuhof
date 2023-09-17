@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y  table-responsive">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Post
        </button>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/post" method="POSt" class="form" enctype="multipart/form-data">
                            @csrf
                            <label for="title">
                                Title
                            </label>
                            <input type="text" name="title" class="form-control" required>
                            <label for="title">
                                Descripttion
                            </label>
                            <textarea type="text" name="description" class="form-control" id="add_des" required></textarea>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <div class="d-flex justify-content-end mt-4">
                                <button class="btn btn-primary me-3" type="submit">Add</button>
                                {{-- <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <table id="post" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->created_at->format('d M Y') }}</td>
                        <td><img src="{{ asset('images/'.$post->image) }}" width="100php sa" alt="" srcset=""></td>
                        <td>
                            {{-- <a href="javascript:;" data-bs-toggle="modal" data-target="#exampleModalCenter" class="delbtn">
                            </a> --}}
                            <a href="javascript:;" class="btn btn-primary delbtn" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal">
                                <i class="bx bx-trash"></i>
                                Delete
                            </a>
                            {{-- <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter" class="delbtn">
                                <i class="fa fa-trash">
                                    Remove
                                </i>
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="">
                    <form action="" method="post" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body" style="color:gray;">
                                <b>
                                    <div id="deldis"></div>
                                </b>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <button type=button class="btn btn-secondary" data-bs-dismiss="modal" class="me-4">No</button>
                            <button type=submit class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <script>
        // $(document).ready(function() {
        //     $('#delbtn').click(function() {
        //         $tr = $(this).closest('tr');
        //         var data = $tr.children('td').map(function() {
        //             return $(this).text();
        //         }).get();
        //         document.getElementById("delete-form").action = '/post/' + data[0];
        //         $('#delid').val(data[0])
        //         $('#deldis').html(data[1])
        //     });
        // })
        $(document).ready(function() {
            $('.delbtn').click(function() {
                let $tr = $(this).closest('tr');
                const data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                const formAction = '/post/' + data[0];
                $('#delete-form').attr('action', formAction);
                if (data.length >= 2) {
                    $('#deldis').html(data[1]);
                }
            });
        })
    </script>
    {{-- <div id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
        class="modal">
        <div role="document">
            <div class="modal-dialog">
                <div class="modal-content">
                    <center>
                        <form action="#" method="post" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body" style="color:gray;">
                                <h5 id="exampleModalLabel">Are you sure want to delete?
                                    <b>
                                        <div id="deldis"></div>
                                    </b>
                                </h5>

                                <button type=button data-dismiss="modal" class="me-4">No</button>
                                <button type=submit class="btn btn-primary">Yes</button>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
