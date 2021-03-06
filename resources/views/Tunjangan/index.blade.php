@extends('layouts.app')

@section('content')
 
             <a href="{{url('/Tunjangan/create')}}" class="btn btn-primary">Create Tunjangan</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Tunjangan</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Status</center></th>
					<th><center>Jumlah Anak</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Action</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Tunjangan as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Kode_Tunjangan }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td><center>{{ $data->Status}}</center></td>
						<td><center>{{ $data->Jumlah_Anak }}</center></td>
					<td><center><?php echo 'Rp.'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </center></td>
						<td><center><a href="{{ route('Tunjangan.edit', $data->id) }}" class="btn btn-warning">Update</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['Tunjangan.destroy', $data->id]]) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach

            </tbody>
        </table>
       
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection