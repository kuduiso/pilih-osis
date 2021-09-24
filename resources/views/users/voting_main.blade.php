@extends('template.template-vote')

@section('title', $title)

@section('main-content')
{{-- <div class="">
    <div class=""> --}}
        <div class="text-center font-extrabold text-2xl my-14">
            <h1>PEMILIHAN KETUA OSIS</h1>
            <h1>SMP 5 TIRTAYASA</h1>
        </div>
        <div class="flex flex-wrap justify-center my-8">
            @foreach ($kandidat as $k)
            <div class="card w-full md:w-2/6 m-3">
                <div class="mb-5 text-center">
                    <span class="bg-green-500 p-3 text-white font-bold rounded-full">{{ $k->no_kandidat }}</span>
                </div>
                <img src="{{ url('storage/foto_kandidat/'.$k->foto) }}" alt="foto_kandidat_{{ ++$loop->index }}">
                <p class="text-center font-bold text-md my-2">{{ $k->nama_kandidat }}</p>
                <div class="flex justify-center">
                    <a href="{{ url('/profile-kandidat/'.$k->id_kandidat) }}" class="inline bg-blue-500 hover:bg-blue-600 focus:ring-2 ring-blue-300 focus:bg-blue-600 text-white text-center w-1/3 rounded-md p-2 mx-2">Profile</a>
                    <form action="{{ action('VotingController@action_vote') }}" id="vote-{{$k->id_kandidat}}" method="POST" class="w-1/3">
                        @csrf
                        <input type="hidden" name="id_kandidat" id="id_kandidat" value="{{ $k->id_kandidat }}">
                        <input type="hidden" name="id_pemilih" id="id_pemilih" value="{{ Session('user_elector')->id_pemilih }}">
                        <button type="button" onclick="on_vote({{ $k->id_kandidat}}, '{{ $k->nama_kandidat }}')" class="bg-orange-500 hover:bg-orange-600 focus:ring-2 ring-orange-300 focus:bg-orange-500 text-white rounded-md w-full p-2 mx-2">Vote</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    {{-- </div>
</div> --}}
@endsection

@section('javascript')
<script>
    function on_vote(id, nama) {
        Swal.fire({
            title: 'Apakah Anda ingin memilih \''+nama+'\'?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Terima Kasih!',
                    'Atas partisipasi Anda dalam melakukan kegiatan E-voting ini!',
                    'success'
                )
                document.querySelector(`#vote-${id}`).submit();
            }
        })
    }
</script>
@endsection
