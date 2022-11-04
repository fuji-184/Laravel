@php
 $judul = ['No','Nama','Nilai','Keterangan'];
@endphp

<style type="text/css">
	
	@keyframes color{
  0%{
    color:darkblue;
  }
  
  20%{
    color:blue;
  }
  
  40%{
    color:lightblue;
  }
  
  60%{
    color:red;
  }
  
  80%{
    color:white;
  }
  
  100%{
    color:purple;
  }
}
	.container {
		display: flex;justify-content: center;align-items: center;height: 600px;
	}
	.tb {
		background-image: linear-gradient(red,purple);color: white;border-radius: 8px;padding: 15px;
		
	}

</style>

<div class="container">
<table cellpadding="25" class="tb">
	<thead>
		<tr>
			@foreach ($judul as $j)
				<th>{{ $j }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach ($siswa as $key=>$s)
			<tr>
				<td>{{ $key+1 }}</td>
   				<td>{{ $siswa[$key]['nama'] }}</td>
   				<td>{{ $siswa[$key]['nilai'] }}</td>
   				<td>{{ $siswa[$key]['nilai']>=60 ? 'Lulus' : 'Tidak Lulus' }}</td>
   			</tr>
		@endforeach
	</tbody>
</table>
</div>


