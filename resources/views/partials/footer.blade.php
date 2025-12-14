<div class="container" id="contacto">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 1rem; align-items: center;">
        <div>
            <strong>{{ config('app.name') }}</strong><br>
            <span class="muted">Sincronización de XML del SAT para tu empresa.</span>
        </div>
        <div class="muted" style="text-align: right;">
            <div>Soporte: <a href="mailto:hello@example.com">hello@example.com</a></div>
            <div>Tel: <a href="tel:+5215555555555">+52 1 55 5555 5555</a></div>
            <div style="margin-top: 0.3rem;">&copy; {{ now()->year }} {{ config('app.name') }}. Todos los derechos reservados.</div>
        </div>
    </div>
</div>
