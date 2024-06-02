@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crmCustomer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crm-customers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}">
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="full_name">{{ trans('cruds.crmCustomer.fields.full_name') }}</label>
                <textarea class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" name="full_name" id="full_name" required>{{ old('full_name') }}</textarea>
                @if($errors->has('full_name'))
                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.full_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_identification">{{ trans('cruds.crmCustomer.fields.user_identification') }}</label>
                <input class="form-control {{ $errors->has('user_identification') ? 'is-invalid' : '' }}" type="text" name="user_identification" id="user_identification" value="{{ old('user_identification', '') }}" required>
                @if($errors->has('user_identification'))
                    <span class="text-danger">{{ $errors->first('user_identification') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.user_identification_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="clinic_name">{{ trans('cruds.crmCustomer.fields.clinic_name') }}</label>
                <input class="form-control {{ $errors->has('clinic_name') ? 'is-invalid' : '' }}" type="text" name="clinic_name" id="clinic_name" value="{{ old('clinic_name', '') }}" required>
                @if($errors->has('clinic_name'))
                    <span class="text-danger">{{ $errors->first('clinic_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.clinic_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_number">{{ trans('cruds.crmCustomer.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" required>
                @if($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="birthday">{{ trans('cruds.crmCustomer.fields.birthday') }}</label>
                <input class="form-control date {{ $errors->has('birthday') ? 'is-invalid' : '' }}" type="text" name="birthday" id="birthday" value="{{ old('birthday') }}" required>
                @if($errors->has('birthday'))
                    <span class="text-danger">{{ $errors->first('birthday') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.birthday_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="new_address">{{ trans('cruds.crmCustomer.fields.new_address') }}</label>
                <textarea class="form-control {{ $errors->has('new_address') ? 'is-invalid' : '' }}" name="new_address" id="new_address">{{ old('new_address') }}</textarea>
                @if($errors->has('new_address'))
                    <span class="text-danger">{{ $errors->first('new_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.new_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="unrwa_clinic">{{ trans('cruds.crmCustomer.fields.unrwa_clinic') }}</label>
                <textarea class="form-control {{ $errors->has('unrwa_clinic') ? 'is-invalid' : '' }}" name="unrwa_clinic" id="unrwa_clinic" required>{{ old('unrwa_clinic') }}</textarea>
                @if($errors->has('unrwa_clinic'))
                    <span class="text-danger">{{ $errors->first('unrwa_clinic') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.unrwa_clinic_helper') }}</span>
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