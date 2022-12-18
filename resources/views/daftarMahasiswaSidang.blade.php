@extends('layouts.layout')

@section('content')
    {{--    make dashboard --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        {{--                        mid title Daftar Sidang--}}
                        <h2 class="card-title  text-center text-lg font-medium text-gray-900 dark:text-white">Daftar Sidang</h2>
                        {{--                        <p class="card-category">Daftar Sidang yang telah dijadwalkan</p>--}}
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        {{--                        mid table --}}
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Nama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    NRP
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Judul
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Pembimbing 1
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Pembimbing 2
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Penguji 1
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Penguji 2
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ruangan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tanggal
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Waktu
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Feedback
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nilai
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Sidang
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sidang as $s)
                                <tr>
                                    <td>
                                        {{$s->nama}}
                                    </td>
                                    <td>
                                        {{$s->nrp}}
                                    </td>
                                    <td>
                                        {{$s->email}}
                                    </td>
                                    <td>
                                        {{$s->judul}}
                                    </td>
                                    <td>
                                        {{$s->pembimbing1}}
                                    </td>
                                    <td>
                                        {{$s->pembimbing2}}
                                    </td>
                                    <td>
                                        {{$s->penguji1}}
                                    </td>
                                    <td>
                                        {{$s->penguji2}}
                                    </td>
                                    <td>
                                        {{$s->ruangan}}
                                    </td>
                                    <td>
                                        {{$s->tanggal}}
                                    </td>
                                    <td>
                                        {{$s->waktu}}
                                    </td>
                                    <td>
                                        {{$s->feedback}}
                                    </td>
                                    <td>
                                        {{$s->nilai}}
                                    <td>
                                        {{$s->status}}
                                    </td>
                                    <td>
                                        <a href="/halamanSidang/{{$s->id}}}" class="btn btn-primary">Masuk Sidang</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
