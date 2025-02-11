@foreach($proveedores as $proveedor)
    <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nom_proveedor }}</option>
@endforeach