@extends('layouts.app')

@section('content')
  <header class="flex items-end mb-3">
    <div class="flex justify-between items-end w-full">
      <h2 class="text-grey text-sm font-normal">My Projects</h2>

      <a href="/projects/create" class="button">New Project</a>
    </div>
  </header>

  <div class="flex flex-wrap -mx-3">
    @forelse ($projects as $project)
      <div class="lg:w-1/3 px-3 pb-6">
        @content('projects.card')
      </div>
    @empty
        <div>No projects yet.</div>
    @endforelse
  </div>
@endsection