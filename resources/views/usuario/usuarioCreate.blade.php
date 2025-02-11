<form class="form formEvent formCreate" data-route="Store_Usuario" data-event="submit" data-tables_liged="Usuario">
    
    @csrf

    <div class="form-group">
        <label for="nom_usuario">Usuario:</label>
        <input type="text" placeholder="Ingrese el nombre del usuario" class="form-control nom_usuario" name="nom_usuario">
        <div class="contMessage contMessage_nom_usuario"></div>
    </div>

    <div class="form-group">
        <label for="rol">Rol:</label>
        <div class="row">
            <div class="col">
                <select name="rol" class="form-control form-control-sm pais btnEvent notClear">
                    <option value="">Seleccione un rol...</option>
                    @foreach($rolesList as $rol)
                        <option value="{{ $rol->id_rol }}">{{ $rol->nom_rol }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_rol"></div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="password">Contraseña:</label>
                <input type="password" placeholder="Contraseña temporal" class="form-control password" name="password">
            </div>
            <div class="col">
                <label for="password_confirmation">Confirmación:</label>
                <input type="password" placeholder="Confirmación de contraseña" class="form-control password_confirmation" name="password_confirmation">
            </div>
        </div>
        <div class="contMessage contMessage_password"></div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="nombres">Nombres:</label>
            <input type="text" placeholder="Ingrese los nombres" class="form-control nombres" name="nombres">
            <div class="contMessage contMessage_nombres"></div>
        </div>
        <div class="col">
            <label for="apellidos">Apellidos:</label>
            <input type="text" placeholder="Ingrese los apellidos" class="form-control apellidos" name="apellidos">
            <div class="contMessage contMessage_apellidos"></div>
        </div>
    </div>

    <div class="form-group">
        <label for="correo">Correo electrónico:</label>
        <input type="text" placeholder="Ingrese el correo electrónico del usuario" class="form-control correo" name="correo">
        <div class="contMessage contMessage_correo"></div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>