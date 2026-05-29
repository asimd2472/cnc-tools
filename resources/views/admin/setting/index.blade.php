@extends('admin.layouts.admin')

@section('content')

<div class="app-content-header">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
        {{-- <h3 class="mb-0">Users</h3> --}}
        </div>
    </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary mb-4">
                    <div class="card-body">
                        <form action="{{ route('admin.setting.save') }}" method="POST">
                            @csrf
                            <div class="row gy-4 gy-sm-1" bis_skin_checked="1">
                                <!-- Address Section -->
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $setting->address ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $setting->city ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $setting->state ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pin" class="form-label">Pin</label>
                                        <input type="text" class="form-control" id="pin" name="pin" value="{{ old('pin', $setting->pin ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gst" class="form-label">GST</label>
                                        <input type="text" class="form-control" id="gst" name="gst" value="{{ old('gst', $setting->gst ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pan" class="form-label">PAN</label>
                                        <input type="text" class="form-control" id="pan" name="pan" value="{{ old('pan', $setting->pan ?? '') }}">
                                    </div>
                                </div>
                                <!-- Payment Gateway Section -->
                                <div class="col-md-6">
                                    <h5>Payment Gateway</h5>
                                    <div class="mb-3">
                                        <label for="key_id" class="form-label">Key ID</label>
                                        <input type="text" class="form-control" id="key_id" name="key_id" value="{{ old('key_id', $setting->key_id ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="key_secret" class="form-label">Key Secret</label>
                                        <input type="text" class="form-control" id="key_secret" name="key_secret" value="{{ old('key_secret', $setting->key_secret ?? '') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="module">
  
</script>
@endpush