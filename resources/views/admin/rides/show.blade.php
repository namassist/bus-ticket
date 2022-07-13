@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Detail Rute Perjalanan
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
                                {{ $ride->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Bus
                            </th>
                            <td>
                                {{ $ride->bus->select_name ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tempat Keberangkatan
                            </th>
                            <td>
                                {{ $ride->departure_place }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tempat Kedatangan
                            </th>
                            <td>
                                {{ $ride->arrival_place }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Waktu Keberangkatan
                            </th>
                            <td>
                                {{ $ride->departure_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Waktu Kedatangan
                            </th>
                            <td>
                                {{ $ride->arrival_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ride.fields.is_booking_open') }}
                            </th>
                            <td>
                                <input type="checkbox" disabled="disabled" {{ $ride->is_booking_open ? 'checked' : '' }}>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-primary" href="{{ route('admin.rides.index') }}">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
