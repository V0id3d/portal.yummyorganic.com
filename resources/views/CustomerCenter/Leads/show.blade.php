@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Customer Center</strong> Show Lead</h2>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Show</strong> Lead</h4>
                    </header>

                    <div class="card-body">
                        <form>
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $selected_lead->name ) }}" readonly>
                                        <label>Name</label>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group do-float">
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email', $selected_lead->email ) }}" readonly>
                                        <label>E-Mail</label>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" id="website" name="website" value="{{ old('tier', $selected_lead->website) }}" readonly>
                                        <label>Website</label>
                                        @if ($errors->has('website'))
                                            <div class="invalid-feedback">{{ $errors->first('website') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" value="{{ old('phone', $selected_lead->phone) }}" readonly>
                                        <label>Phone</label>
                                        @if ($errors->has('phone'))
                                            <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('tier') ? ' is-invalid' : '' }}" id="tier" name="tier" value="{{ old('tier', $selected_lead->tier) }}" readonly>
                                        <label>Tier</label>
                                        @if ($errors->has('tier'))
                                            <div class="invalid-feedback">{{ $errors->first('tier') }}</div>
                                        @endif
                                    </div>
                                </div>

                                {{--<div class="col-6">--}}
                                    {{--<div class="form-group do-float">--}}

                                        {{--<select class="form-control" data-provide="selectpicker" tabindex="-98" data-live-search="true" name="company_id">--}}
                                            {{--@if(!is_null($companyList))--}}
                                                {{--<option selected style="display: none;" value=""></option>--}}
                                                {{--@foreach ($companyList as $company)--}}
                                                    {{--<option value="{{ $company->id }}"@if(!is_null($selected_lead->company)){{ ($selected_lead->company->pluck('id')->contains($company->id) ? ' selected' : '') }}@endif>{{ $company->name }}</option>--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--</select>--}}
                                        {{--<label class="label-floated">Company</label>--}}
                                        {{--@if ($errors->has('company'))--}}
                                            {{--<div class="invalid-feedback">{{ $errors->first('company_id') }}</div>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" id="address" name="address" value="{{ old('address', $selected_lead->address) }}" readonly>
                                        <label>Address</label>
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" id="address2" name="address2" value="{{ old('address2', $selected_lead->address2) }}" readonly>
                                        <label>Addtl.</label>
                                        @if ($errors->has('address2'))
                                            <div class="invalid-feedback">{{ $errors->first('address2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" name="city" value="{{ old('city', $selected_lead->city) }}" readonly>
                                        <label>City</label>
                                        @if ($errors->has('city'))
                                            <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group do-float">
                                        <input type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" id="state" name="state" value="{{ old('state', $selected_lead->state) }}" readonly>
                                        <label>State</label>
                                        @if ($errors->has('state'))
                                            <div class="invalid-feedback">{{ $errors->first('state') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group do-float">
                                        <input type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" id="zip" name="zip" value="{{ old('zip', $selected_lead->zip) }}" readonly>
                                        <label>Zip</label>
                                        @if ($errors->has('zip'))
                                            <div class="invalid-feedback">{{ $errors->first('zip') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6 center-block">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm btn-primary" formaction="{{ route('CustomerCenter.Lead.Edit', $selected_lead) }}" value="Edit Lead">
                                        <input type="submit" class="btn btn-sm btn-primary" formaction="{{ route('CustomerCenter.Lead.CompanyConvert', $selected_lead) }}" formmethod="POST" value="Export To Company">
                                        <input type="submit" class="btn btn-sm btn-primary" formaction="{{ route('CustomerCenter.Lead.ContactConvert', $selected_lead) }}" formmethod="POST" value="Export To Contact">


                                        {{--<button type="submit"></button>--}}
                                        {{--<a class="btn btn-sm btn-primary" href="{{ route('CustomerCenter.Lead.Edit', $selected_lead)  }}">Edit Lead</a>--}}
                                        {{--<a class="btn btn-sm btn-primary" href="#">Use To Create Company</a>--}}
                                        {{--<a class="btn btn-sm btn-primary" href="#">Use To Create Contact</a>--}}
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection