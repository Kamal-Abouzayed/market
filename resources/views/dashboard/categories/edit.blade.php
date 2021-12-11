@extends('dashboard.layouts.app')

@section('title') {{ $pageTitle }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('dashboard.partials.flash')
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h3 class="tile-title">{{ $subTitle }}</h3>
        </div>
        <div class="card-body">
            <div class="mx-auto">
                <div class="tile">
                    <form action="{{ route('admin.categories.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                                <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                                @error('name') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description">Description</label>
                                <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $targetCategory->description) }}</textarea>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Category</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
