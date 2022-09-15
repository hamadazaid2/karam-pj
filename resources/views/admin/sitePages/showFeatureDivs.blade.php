@extends('admin.layout.layout')
@section('title')
Show Features
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
                <h6 class="mb-4">Features</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">i Tag</th>
                                <th scope="col">Header</th>
                                <th scope="col">Paragraph</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $div)
                                <tr>

                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $div->i_tag }}</td>
                                    <td>{{ $div->header }}</td>
                                    <td>{{ $div->paragraph }}</td>
                                    <td style="display: none">{{ $div->id }}</td>
                                    <td>
                                        <a href="{{ route('site.feature.div.edit.show', $div->id) }}"
                                            class="btn btn-square btn-info m-2"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('site.feature.div.delete', $div->id) }}"
                                            class="btn btn-square btn-warning m-2"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links('vendor.pagination.bootstrap-5') }}
                </div>
                <a href="{{ route('site.feature.div.new') }}" style="width: 190px" class="btn btn-square btn-success m-2"><i
                        class="fa fa-plus" style="padding-right: 15px"></i>ADD NEW DIV</a>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
