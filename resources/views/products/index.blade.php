@extends('layouts.app')

@section('content')

<div class="wrapper">
  <!-- Navbar -->
  <!-- Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="text-decoration: none;"><strong>Home</strong></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #E5E1DA;">
                <h3 class="card-title">DataTable Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="background-color: #FBF9F1;">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Date Caducidade</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach($products as $product)
                  <tr>
                    <td>{{ $product -> id}}</td>
                    <td>{{ $product -> name}}</td>
                    <td>{{ $product -> description}}</td>
                    <td>{{ $product -> price}}</td>
                    <td>{{ $product -> date_caducidade}}</td>
                    <td>{{ $product -> quantity}}</td>
                    <td>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-info btn-sm" tittle="Edit" ><i class="fas fa-pencil-alt"></i></a>

                        <form class="d-inline delete-form" action="{{route('products.destroy', $product)}}" method="$_POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt" ></i></button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection

@push('scripts')

<script type="text/javascript">
		$(function () {
			$("#example1").DataTable({
				"responsive": true, 
				"lengthChange": true, 
				"autoWidth": false,
				//"buttons": ["excel", "pdf", "print", "colvis"],
				"language": 
						{
							"sLengthMenu": "Mostrar MENU entradas",
							"sEmptyTable": "No hay datos disponibles en la tabla",
							"sInfo": "Mostrando START a END de TOTAL entradas",
							"sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
							"sSearch": "Buscar:",
							"sZeroRecords": "No se encontraron registros coincidentes en la tabla",
							"sInfoFiltered": "(Filtrado de MAX entradas totales)",
							"oPaginate": {
								"sFirst": "Primero",
								"sPrevious": "Anterior",
								"sNext": "Siguiente",
								"sLast": "Ultimo"
							},
							/*"buttons": {
								"print": "Imprimir",
								"colvis": "Visibilidad Columnas"
								/*"create": "Nuevo",
								"edit": "Cambiar",
								"remove": "Borrar",
								"copy": "Copiar",
								"csv": "fichero CSV",
								"excel": "tabla Excel",
								"pdf": "documento PDF",
								"collection": "Colección",
								"upload": "Seleccione fichero...."
							}*/
						}
			});//.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		});
	</script>

@endpush

