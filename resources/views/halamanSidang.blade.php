@extends('layouts.layout')

@section('content')
   <div class="container-fluid">
         <div class="row">
              <div class="col-md-12">
                <form action="/halamanSidang/{{$id}}" method="post" class="card">
                    @csrf
                    <div class="card-header card-header-primary">
                          <h2 class="card-title  text-center text-lg font-medium text-gray-900 dark:text-white">Sidang Proposal</h2>
                        </div>
                         <div class="mb-6">
                             <label for="feedback" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feedback</label>
                             <input type="text" id="feedback" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$sidang->feedback}}" name="feedback">
                         </div>
                    <div class="flex flex-row">
                        <div class="grow mr-4">
                            <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai</label>
                            <input type="text" id="nilai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$sidang->nilai}}" name="nilai">
                        </div>
                        <div class="grow ml-4">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
{{--                            $table->enum('status', ['Lulus dengan Revisi', 'Lulus tanpa Revisi', 'Belum Sidang'])->default('Belum Sidang');--}}
                            <option value="Belum Sidang" @if ($sidang->status=='Belum Sidang') selected @endif> Belum Sidang</option>
                            <option value="Lulus dengan Revisi" @if ($sidang->status=='Lulus dengan Revisi') selected @endif> Lulus dengan Revisi</option>
                            <option value="Lulus tanpa Revisi" @if ($sidang->status=='Lulus tanpa Revisi') selected @endif> Lulus tanpa Revisi</option>
                        </select>
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4 float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
