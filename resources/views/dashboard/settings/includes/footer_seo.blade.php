<div class="py-2 tile">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h3 class="tile-title">Footer &amp; SEO</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="footer_copyright_text">Footer Copyright Text</label>
                <textarea
                    class="form-control"
                    name="footer_copyright_text"
                    id="footer_copyright_text"
                    placeholder="Enter Footer Copyright Text"
                    rows="4"
                >{{ config('settings.footer_copyright_text') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="seo_meta_title">SEO Meta Title</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter seo meta title for store"
                    id="seo_meta_title"
                    name="seo_meta_title"
                    value="{{ config('settings.seo_meta_title') }}"
                >
            </div>
            <div class="form-group">
                <label class="control-label" for="seo_meta_description">SEO Meta Description</label>
                <textarea
                    class="form-control"
                    name="seo_meta_description"
                    id="seo_meta_description"
                    placeholder="Enter seo meta description for store"
                    rows="4"
                >{{ config('settings.seo_meta_description') }}</textarea>
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
