@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y  table-responsive">
        <h2 class="text-center mt-2">Post Recycle Bin</h2>

        <table id="post" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            {{-- <a href="javascript:;" data-bs-toggle="modal" data-target="#exampleModalCenter" class="delbtn">
                        </a> --}}
                            <a href="javascript:;" class="btn btn-info restorebtn" data-bs-toggle="modal"
                                data-bs-target="#RestoreModal">
                                <i class="bx bx-refresh"></i>
                                Restore
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
        <div class="modal fade" id="RestoreModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to Restore?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="">
                        <form action="" method="post" id="delete-form">
                            @csrf
                            <div class="modal-body" style="color:gray;">
                                <b>
                                    <div id="resdis"></div>
                                </b>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <button type=button class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type=submit class="btn btn-primary">Yes</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.restorebtn').click(function() {
                let $tr = $(this).closest('tr');
                const data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                // alert(data);
                const formAction = '/postbin/' + data[0];
                $('#delete-form').attr('action', formAction);
                if (data.length >= 2) {
                    $('#resdis').html(data[1]);
                }
            });
        })
    </script>
@endsection
