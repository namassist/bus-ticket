@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Detail Bus
        </div>

        <div class="card-body">
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $bus->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Nama
                            </th>
                            <td>
                                {{ $bus->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Kursi yang tersedia
                            </th>
                            <td>
                                {{ $bus->places_available }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-primary" href="{{ route('admin.buses.index') }}">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
