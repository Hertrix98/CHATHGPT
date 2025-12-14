@extends('layouts.app')

@section('content')
<div class="hero" id="funcionalidad">
    <div>
        <span class="badge">SAT XML Sync</span>
        <h1>Centraliza los XML del SAT sin esfuerzo</h1>
        <p>
            Nuestra plataforma conecta tus empresas con el SAT, descarga automáticamente los XML
            y los organiza para que puedas consultarlos, facturar y auditar en segundos.
        </p>
        <a class="cta" href="#flujo">Ver cómo funciona</a>
    </div>
    <div class="card">
        <h3>Empresas activas</h3>
        <p class="muted">Administra cada RFC, credenciales y certificados desde un solo lugar.</p>
        <div style="margin-top: 1rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 0.75rem;">
            <div style="padding: 0.75rem; background: #ecfeff; border-radius: 10px;">
                <strong>RFC</strong><br>
                <span class="muted">Control de vigencia de sellos</span>
            </div>
            <div style="padding: 0.75rem; background: #f8fafc; border-radius: 10px;">
                <strong>XML</strong><br>
                <span class="muted">Descarga y resguardo</span>
            </div>
            <div style="padding: 0.75rem; background: #ecfeff; border-radius: 10px;">
                <strong>Alertas</strong><br>
                <span class="muted">Errores y vencimientos</span>
            </div>
        </div>
    </div>
</div>

<h2 class="section-title" id="flujo">Flujo de sincronización</h2>
<div class="grid">
    <div class="card">
        <h3>1. Conecta tu empresa</h3>
        <p>Registra RFC, certificados (.cer y .key) y passphrase. Controlamos la vigencia para evitar rechazos.</p>
    </div>
    <div class="card">
        <h3>2. Sincroniza XML</h3>
        <p>Programamos descargas y guardamos cada CFDI con su contenido completo listo para consulta.</p>
    </div>
    <div class="card">
        <h3>3. Visualiza y exporta</h3>
        <p>Filtra por empresa, cliente o fecha. Descarga reportes y comparte con tu equipo de facturación.</p>
    </div>
</div>

<h2 class="section-title" id="seguridad">Seguridad y control</h2>
<div class="grid">
    <div class="card">
        <h3>Respaldo cifrado</h3>
        <p>Mantenemos los XML y credenciales cifrados y segregados por empresa.</p>
    </div>
    <div class="card">
        <h3>Auditoría</h3>
        <p>Bitácora de descargas, errores y accesos para cumplir con requisitos contables.</p>
    </div>
    <div class="card">
        <h3>Alertas proactivas</h3>
        <p>Notificamos expiración de certificados y XML faltantes para que siempre estés al día.</p>
    </div>
</div>
@endsection
