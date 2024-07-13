@extends('admin.layouts.app')

@section('content')
<div class="container">
    @include('admin.SideBar')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Event</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="event_type_id">Event Type</label>
                            <select name="event_type_id" id="event_type_id" class="form-control">
                                @foreach($eventTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('event_type_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_type">Event Type Name</label>
                            <input type="text" name="event_type" id="event_type" class="form-control" value="{{ old('event_type') }}">
                            @error('event_type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="short_description">Short Description</label>
                            <input type="text" name="short_description" id="short_description" class="form-control" value="{{ old('short_description') }}">
                            @error('short_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="long_description">Long Description</label>
                            <textarea name="long_description" id="long_description" class="form-control">{{ old('long_description') }}</textarea>
                            @error('long_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_logo">Event Logo</label>
                            <input type="file" name="event_logo" id="event_logo" class="form-control">
                            @error('event_logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_date">Event Date</label>
                            <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date') }}">
                            @error('event_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_start_time">Event Start Time</label>
                            <input type="time" name="event_start_time" id="event_start_time" class="form-control" value="{{ old('event_start_time') }}">
                            @error('event_start_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_end_time">Event End Time</label>
                            <input type="time" name="event_end_time" id="event_end_time" class="form-control" value="{{ old('event_end_time') }}">
                            @error('event_end_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_location">Event Location</label>
                            <input type="text" name="event_location" id="event_location" class="form-control" value="{{ old('event_location') }}">
                            @error('event_location')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="is_active">Is Active</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @error('is_active')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="is_postponed">Is Postponed</label>
                            <select name="is_postponed" id="is_postponed" class="form-control">
                                <option value="1" {{ old('is_postponed') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_postponed') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @error('is_postponed')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="postponed_date">Postponed Date</label>
                            <input type="date" name="postponed_date" id="postponed_date" class="form-control" value="{{ old('postponed_date') }}">
                            @error('postponed_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
