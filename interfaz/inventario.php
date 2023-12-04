<?php require('partials/header.php'); ?>



      <h1 class="er">GESTOR DE PRODUCTOS</h1>
        <form id="productoForm"> 
            <label for="nombre">Nombre de producto:</label> 
            <!--<input type="url" id="nombre" required>
            -->  
            <select name="productos"> 
            <option value=" queso"> queso</option>
            <option value="leche">leche</option>
            <option value="yogurt">yougut</option>
            <option value="manjar">manjar</option></select>
           



            <label for="precio">Precio:</label>
            <input type="number" id="precio" step="0.01" required>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" required>

            <button type="button" onclick="agregarProducto()">Agregar</button>

            <button type="button" onclick="modificarProducto()">Modificar</button>

            <button type="button" onclick="eliminarProducto()">Eliminar</button>

            <button type="button" onclick="buscarProducto()">Buscar</button>
            
            <button type="button" onclick="generarReporte()">Generar Reporte</button>
        </form>

        <div id="resultado"></div>
    </div>
    <script src="script.js"></script>
    

<?php require('partials/foder.php'); ?>