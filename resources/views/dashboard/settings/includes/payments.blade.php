<div class="py-2 tile">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h3 class="tile-title">Payments</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="stripe_payment_method">Stripe Payment Method</label>
                <select class="form-control" name="stripe_payment_method" id="stripe_payment_method">
                    <option value="1" {{ (config('settings.stripe_payment_method' == 1 ? 'selected' : '')) }}>Enabled</option>
                    <option value="0" {{ (config('settings.stripe_payment_method' == 0 ? 'selected' : '')) }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="stripe_key" class="control-label">Key</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter stripe key"
                    name="stripe_key"
                    id="stripe_key"
                    value="{{ config('settings.stripe_key') }}"
                >
            </div>
            <div class="form-group">
                <label for="stripe_secret_key" class="control-label">Secret Key</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter stripe secret key"
                    name="stripe_secret_key"
                    id="stripe_secret_key"
                    value="{{ config('settings.stripe_secret_key') }}"
                >
            </div>
            <hr>
            <div class="form-group">
                <label class="control-label" for="paypal_payment_method">Paypal Payment Method</label>
                <select class="form-control" name="paypal_payment_method" id="paypal_payment_method">
                    <option value="1" {{ (config('settings.paypal_payment_method' == 1 ? 'selected' : '')) }}>Enabled</option>
                    <option value="0" {{ (config('settings.paypal_payment_method' == 0 ? 'selected' : '')) }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paypal_client_id" class="control-label">Client ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paypal client id"
                    name="paypal_client_id"
                    id="paypal_client_id"
                    value="{{ config('settings.paypal_client_id') }}"
                >
            </div>
            <div class="form-group">
                <label for="paypal_secret_id" class="control-label">Secret ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paypal secret id"
                    name="paypal_secret_id"
                    id="paypal_secret_id"
                    value="{{ config('settings.paypal_secret_id') }}"
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
