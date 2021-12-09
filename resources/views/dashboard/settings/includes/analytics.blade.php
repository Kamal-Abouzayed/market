<div class="py-2 tile">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h3 class="tile-title">Analytics</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label for="google_analytics" class="control-label">Google Analytics Code</label>
                <textarea
                    class="form-control"
                    name="google_analytics"
                    id="google_analytics"
                    placeholder="Enter google analytics code"
                    rows="4"
                >{!! Config::get('settings.google_analytics') !!}</textarea>
            </div>
        </div>
        <div class="tile-body">
            <div class="form-group">
                <label for="facebook_pixels" class="control-label">Facebook Pixel Code</label>
                <textarea
                    class="form-control"
                    name="facebook_pixels"
                    id="facebook_pixels"
                    placeholder="Enter facebook pixel code"
                    rows="4"
                >{{ Config::get('settings.facebook_pixels') }}</textarea>
            </div>
        </div>
        <div class="tile-footer">
            <div class="mt-2 row d-print-none">
                <div class="text-right col-12">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
