@extends('admin.layout.layout')
@section('title')
Show Contact Us Messages
@endsection
@section('content')
    <!-- Form Start -->
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12" style="width: 95%; margin-left: 3rem;">
            <div class="bg-secondary rounded h-100 p-4">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Contact Us Messages</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Message</th>
                                <th scope="col">Operation</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $msg)
                                <tr>

                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $msg->name }}</td>
                                    <td>{{ $msg->email }}</td>
                                    <td>{{ $msg->phone }}</td>
                                    <td>{{ $msg->message }}</td>
                                    <td style="display: none">{{ $msg->id }}</td>
                                    <td>
                                        <a href="{{ route('contact.us.message.delete', $msg->id) }}"
                                            class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Form End -->
    @endsection
