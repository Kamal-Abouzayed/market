<div class="py-2 tile">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h3 class="tile-title">Social Links</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label for="social_facebook" class="control-label">Facebook Profile</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter facebook profile link"
                    name="social_facebook"
                    id="social_facebook"
                    value="{{ config('settings.social_facebook') }}"
                >
            </div>
            <div class="form-group">
                <label for="social_twitter" class="control-label">Twitter Profile</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter twitter profile link"
                    name="social_twitter"
                    id="social_twitter"
                    value="{{ config('settings.social_twitter') }}"
                >
            </div>
            <div class="form-group">
                <label for="social_instagram" class="control-label">Instagram Profile</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter instagram profile link"
                    name="social_instagram"
                    id="social_instagram"
                    value="{{ config('settings.social_instagram') }}"
                >
            </div>
            <div class="form-group">
                <label for="social_linkedin" class="control-label">LinkedIn Profile</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter linkedin profile link"
                    name="social_linkedin"
                    id="social_linkedin"
                    value="{{ config('settings.social_linkedin') }}"
                >
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
