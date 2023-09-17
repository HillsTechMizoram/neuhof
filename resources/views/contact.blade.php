@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y  table-responsive">
        <table class="table" id="contact">
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Subject
                    </th>
                    <th>
                        Message
                    </th>
                    <th style="display: none;">
                        Display
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            {{ $contact->id }}
                        </td>
                        <td>
                            {{ $contact->name }}
                        </td>
                        <td>
                            {{ $contact->email }}
                        </td>
                        <td>
                            {{ $contact->phone }}
                        </td>
                        <td>
                            {{ $contact->subject }}
                        </td>
                        <td>
                            {{ substr($contact->message, 0, 20) }}...
                        </td>
                        <td style="display: none;">
                            {{ $contact->message }}
                        </td>
                        <td>
                            <a href="javascript:;" class="btn btn-info viewbtn" data-bs-toggle="modal"
                                data-bs-target="#ViewModal">
                                <i class="bx bx-book-open"></i>
                                View
                            </a>
                            <a href="javascript:;" class="btn btn-primary delbtn" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal">
                                <i class="bx bx-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="">
                        Name :
                        <div id="viewname" class="mb-3"></div>
                        Email :
                        <div id="viewemail" class="mb-3"></div>
                        Phone :
                        <div id="viewphone" class="mb-3"></div>
                        Subject :
                        <div id="viewsubject" class="mb-3"></div>
                        Message :
                        <div id="viewmessage" class="mb-3"></div>
                    </div>
                    <div class="modal-footer" class="mb-3">
    
                    </div>
                </div>
            </div>
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
            $('.delbtn').click(function() {
                let $tr = $(this).closest('tr');
                const data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                // alert(data);
                const formAction = '/contacts/' + data[0];
                $('#delete-form').attr('action', formAction);
                if (data.length >= 2) {
                    $('#deldis').html(data[1]);
                }
            });
            $('.viewbtn').click(function() {
                let $tr = $(this).closest('tr');
                const data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                
                    $('#viewname').html(data[1]);
                    $('#viewemail').html(data[2]);
                    $('#viewphone').html(data[3]);
                    $('#viewsubject').html(data[4]);
                    $('#viewmessage').html(data[6]);
                
            });
        })
    </script>
@endsection
