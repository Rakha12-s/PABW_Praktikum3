<div class="alert">
    <strong>Berhasil!</strong> {{ $slot }}
</div>

<style>
    .alert {
        padding: 10px;
        margin: 10px 0;
        border-width: 1px;
        border-style: solid;
    }
    .alert-error {
        border-color: red;
    }
    .alert-green, .alert-success {
        border-color: green;
    }
</style>