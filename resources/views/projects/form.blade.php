@csrf

<div class="field mb-6">
  <label for="title" class="label text-sm mb-2 block">Title</label>
  
  <div class="control">
    <input
      type="text"
      class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
      name="title"
      placeholder="My next awesome project"
      value="{{ $project->title }}"
      required>
  </div>
</div>

<div class="field mb-6">
  <label for="description" class="label text-sm mb-2 block">Description</label>
  
  <div class="control">
    <textarea
      rows="10"
      class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
      name="description"
      required
      placeholder="I should start learing piano.">{{ $project->description }}</textarea>
  </div>
</div>

<div class="field">
  <div class="control">
    <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>

    <a href="{{ $project->path() }}">Cancel</a>
  </div>
</div>

@include('errors')