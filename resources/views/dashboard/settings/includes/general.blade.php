<div class="tile py-2">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Name</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Site Name"
                    id="site_name"
                    name="site_name"
                    value="{{ config('settings.site_name') }}"
                >
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Title</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Site Title"
                    id="site_title"
                    name="site_title"
                    value="{{ config('settings.site_title') }}"
                >
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Default Email Address</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Store Default Email Address"
                    id="default_email_address"
                    name="default_email_address"
                    value="{{ config('settings.default_email_address') }}"
                >
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_code">Currency Code</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Store Currency Code"
                    id="currency_code"
                    name="currency_code"
                    value="{{ config('settings.currency_code') }}"
                >
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_symbol">Currency Symbol</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Store Currency Symbol"
                    id="currency_symbol"
                    name="currency_symbol"
                    value="{{ config('settings.currency_symbol') }}"
                >
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
