
@extends('layouts.admin')

@section('title')
    <title>Setting Add</title>
@endsection

@section('content')

<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Setting','key'=>'add'])
    <div class="content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('setting.store').'?type='.request()->type}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Config key</label>
                            <input type="text" class="form-control @error('config_key') is-invalid @enderror" name="config_key"  placeholder="Enter config key " value="{{ old('config_key') }}">
                            @error('config_key')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (request()->type==='Text')
                            <div class="form-group">
                                <label>Config value </label>
                                <input type="text" class="form-control @error('config_value') is-invalid @enderror" name="config_value" placeholder="Enter config value" value="{{ old('config_value') }}">
                                @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @elseif (request()->type==='Textarea')
                            <div class="form-group">
                                <label>Config value </label>
                                
                                <textarea  class="form-control @error('config_value') is-invalid @enderror" name="config_value" placeholder="Enter config value" rows="5">{{ old('config_value') }}</textarea>
                                @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        @endif
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
      </div>
    </div>
</div>

@endsection

