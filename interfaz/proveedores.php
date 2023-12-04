<?php require('partials/header.php'); ?>


<link rel="stylesheet" href="stilo.css">
<div class="provider-interface">
        <h2>Proveedores</h2>
        <form class="provider-form" action="#" method="post">
            <div class="form-group">
                <label for="providerName">Nombre del Proveedor:</label>
                <input type="text" id="providerName" name="providerName" required>
            </div>
            <div class="form-group">
                <label for="contactPerson">Persona de Contacto:</label>
                <input type="text" id="contactPerson" name="contactPerson" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Dirección:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Registrar Proveedor</button>
        <button type="submit" class="submit-btn">mostrar los proveedores</button>
        </form>
    </div>


<?php require('partials/foder.php'); ?>