@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.bookings.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="ride_id">Rute Perjalanan</label>
                    <select class="form-control select2 {{ $errors->has('ride') ? 'is-invalid' : '' }}" name="ride_id" id="ride_id" required>
                        @foreach ($rides as $id => $ride)
                            <option value="{{ $id }}" {{ old('ride_id') == $id ? 'selected' : '' }}>{{ $ride }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('ride'))
                        <div class="invalid-feedback">
                            {{ $errors->first('ride') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.booking.fields.ride_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name">Nama</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.booking.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="email">Email</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.booking.fields.email_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="phone">No Telepon</label>
                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                    @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.booking.fields.phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">Status</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach (App\Booking::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', 'processing') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.booking.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
