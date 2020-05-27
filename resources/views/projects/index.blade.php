@extends('layouts.app')

@section('content')
  <header class="flex items-center mb-3">
    <div class="flex justify-between items-center w-full">
      <h2 class="text-grey text-sm font-normal">My Projects</h2>

      <a href="/projects/create" class="button">New Project</a>
    </div>
  </header>

  <div class="flex flex-wrap -mx-3">
    @forelse ($projects as $project)
      <div class="lg:w-1/3 px-3 pb-6">
        <div class="bg-white mr-4 p-5 rounded-lg shadow" style="height: 200px">
          <h3 class="font-normal text-xl m-0 py-4 -ml-5 mb-3 border-l-4 border-blue-light pl-4">
            <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
          </h3>

          <div class="text-grey">{{ Illuminate\Support\Str::limit($project->description, 100) }}</div>
        </div>
      </div>
    @empty
        <div>No projects yet.</div>
    @endforelse
  </div>
@endsection